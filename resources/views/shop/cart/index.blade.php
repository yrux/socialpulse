@extends('layouts.main')
@section('content')
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Cart</h1>
      </div>
    </div>
  </div>
</div>
<section class="cart_sec_main pd_80">
    <div id="cartapp" class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="table_cart_sec">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Products</th>
                                    <th>Price</th>
                                    <th>Qty</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-if="cart.count>0" v-for="(cartRow, cartRowk) in cart.data" :key="cartRowk">
                                    <td>
                                        <div class="row">
                                            <div class="col-md-2 padd-0">
                                                <div class="products_check">
                                                    <img style="height: 105px;" :src="'{{asset('/')}}/'+cartRow.product.image.url" alt="" class="img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="checkout_pro_con">
                                                    <h5>@{{cartRow.product.name}}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="price">@{{cartRow.product.currency+cartRow.product.formatted_price_discounted}}</td>
                                    <td class="text-center counter">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <button @click="lessQty(cartRow)" type="button" class="btn btn-number" data-type="minus" data-field="quant[1]"> <i class="fa fa-minus" aira-hidden="true"></i> </button>
                                            </span>
                                            <input v-model="cartRow.qty" type="text" name="quant[1]" class="form-control input-number" value="01" min="1" max="10" />
                                            <span class="input-group-btn">
                                                <button @click="addQty(cartRow)" type="button" class="btn btn-number" data-type="plus" data-field="quant[1]"> <i class="fa fa-plus" aira-hidden="true"></i> </button>
                                            </span>
                                        </div>
                                    </td>

                                    <td class="total_amout">@{{cartRow.product.currency+cartRow.rowtotal}}</td>
                                    <td><a :href="'{{route('cart.remove')}}/'+cartRow.product.slug" class="delet_icon"><i class="fas fa-trash-alt"></i></a></td>
                                </tr>
                                <tr v-else>
                                    <td colspan="5">No Data in Cart</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="promotional_code">
                    <div class="head_promotional_code">
                        <h2>Have a Promotional Code?</h2>
                    </div>

                    <div class="code_form">
                        <form>
                            <input v-model="coupon_code" type="text" name="copon_code" class="form-control" placeholder="Coupon Code?">
                            <button @click="couponApply" type="button">Apply Now</button>
                        </form>
                    </div>
                </div>

                <div class="back_btn">
                    <a href="{{route('products')}}">go back to shopping</a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="promotional_code">
                    <div class="head_promotional_code">
                        <h2>There @{{cart.count>1?'Are':'Is'}} @{{cart.count}} Items in Your Cart</h2>
                    </div>

                    <div class="cart_item">
                        <ul>
                            <li>Total Products: <span>£@{{productSubTotal}}</span></li>
                            <li>Total Shipping: <span>£0.00</span></li>
                            <li>Coupon Discount % <span>@{{cart.discount}}%</span></li>
                            <li>Taxes <span>£0.00</span></li>
                            <li class="total">Total <span>£@{{productTotal}}</span></li>
                        </ul>
                        <a href="{{route('checkout.index')}}">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('css')
<style type="text/css">
    /*in page css here*/
</style>
@endsection
@section('js')
@include('shop.cart.js')
@endsection