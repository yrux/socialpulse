<?php

namespace App\Http\Controllers;

use Helper;
use View;
use App\Helpers\Cart;
use Illuminate\Http\Request;
use App\Model\products;
use App\Model\orders;
use App\Http\Requests\yTableordersRequest;

class CartController extends Controller
{
    public $cart;
    public function __construct()
    {
        $this->middleware('guest');
        $favicon = Helper::OneColData('imagetable', 'img_path', "table_name='favicon' and ref_id=0 and is_active_img='1'");
        $logo = Helper::OneColData('imagetable', 'img_path', "table_name='logo' and ref_id=0 and is_active_img='1'");
        $this->cart = new Cart;
        View()->share('favicon', $favicon);
        View()->share('logo', $logo);
        View()->share('config', $this->getConfig());
    }
    public function directadd(products $product)
    {
        $product->load('image');
        $this->cart->add($product->id, [
            'product' => $product,
            'qty' => 1,
            'price' => $product->price,
            'discount' => $product->discount
        ]);
        return redirect()->route('cart.index')->with('notify_success', 'Product added in cart');
    }
    public function index()
    {
        return view('shop.cart.index')->with('title', 'Cart');
    }
    public function getCart()
    {
        return $this->cart->getSummary();
    }
    public function updateQty(Request $request, products $product)
    {
        $this->cart->updateQty($product->id, $request->qty);
        return $this->getCart();
    }
    public function removeCart(products $product)
    {
        $this->cart->removeSpecific($product->id);
        return back()->with('notify_succes', 'Product removed from cart');
    }
    public function couponApply(Request $request)
    {
        $data = Helper::returnMod('coupons')->where('code', $request->code)->first();
        if ($data->id > 0) {
            /*apply coupon*/
            $this->cart->applyCoupon($data->discount, $data->code);
        } else {
            $this->cart->resetCoupon();
        }
        return $this->getCart();
    }
    public function checkout()
    {
        return view('shop.cart.checkout')->with('title', 'Checkout');
    }
    public function placeOrder(yTableordersRequest $request)
    {
        $orders = orders::create($request->except(['__token']));
        $data = $this->getCart();
        $cart = $data['data'];
        $orders->total_products = count($cart);
        $orders->subtotal = $data['subtotal'];
        $orders->total = $data['total'];
        $orders->discount = $data['discount'];
        $orders->save();
        foreach ($cart as $key => $value) {
            $orders->products()->create([
                'product_id' => $key,
                'qty' => $value['qty'],
                'rowtotal' => $value['rowtotal'],
                'discount' => $value['discount'],
                'price' => $value['price']
            ]);
        }
        $this->cart->resetCoupon();
        $this->cart->forget();
        return redirect()->route('checkout.invoice', [$orders]);
    }
    public function invoice(orders $order)
    {
        return view('shop.cart.invoice')->with('title', 'Invoice #' . $order->id)->with(compact('order'));
    }
}
