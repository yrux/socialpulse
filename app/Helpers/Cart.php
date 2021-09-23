<?php

namespace App\Helpers;

use Session;

class Cart extends Helper
{
    public $sessionName = 'cart';
    public $qtyKey = 'qty';
    public $priceKey = 'price';
    public $discountKey = 'discount';
    public $couponKey = 'cart_coupon';
    public $cart = [];
    public function add($key, $data)
    {
        $this->setCart();
        $this->cart[$key] = $data;
        $this->put();
        $this->setRowTotal($key);
    }
    public function check()
    {
        return Session::has($this->sessionName);
    }
    public function get()
    {
        return Session::get($this->sessionName);
    }
    public function put()
    {
        Session::put($this->sessionName, $this->cart);
    }
    public function setCart()
    {
        if ($this->check()) {
            $this->cart = $this->get();
        }
    }
    public function checkKey($key)
    {
        if ($this->check()) {
            return isset($this->cart[$key]);
        }
    }
    public function updateQty($key, $qty)
    {
        $this->setCart();
        if ($this->checkKey($key)) {
            $this->cart[$key][$this->qtyKey] = $qty;
        }
        $this->setRowTotal($key);
    }
    public function setRowTotal($key)
    {
        // $this->setCart();
        if ($this->checkKey($key)) {
            if (isset($this->cart[$key][$this->discountKey]) && intval($this->cart[$key][$this->discountKey]) > 0) {
                $this->cart[$key]['rowtotal'] = (($this->cart[$key][$this->priceKey] - (($this->cart[$key][$this->priceKey] / 100) * $this->cart[$key][$this->discountKey])) * $this->cart[$key][$this->qtyKey]);
            } else {
                $this->cart[$key]['rowtotal'] = ($this->cart[$key][$this->priceKey] * $this->cart[$key][$this->qtyKey]);
            }
            $this->put();
        }
    }
    public function getTotal($addDiscount = true)
    {
        $total = 0.00;
        $this->setCart();
        foreach ($this->cart as $key => $value) {
            $total += $value['rowtotal'];
        }
        if ($addDiscount === true) {
            if ($this->checkCoupon()) {
                $discount = $this->getDiscount();
                $total = ($total - (($total / 100) * $discount));
            }
        }
        return $total;
    }
    public function getCount()
    {
        $this->setCart();
        return count($this->cart);
    }
    public function getSummary()
    {
        $subtotal = $this->getTotal(false);
        $total = $this->getTotal(true);
        $count = $this->getCount();
        $data = $this->get();
        $discount = 0;
        if ($this->checkCoupon()) {
            $discount = $this->getDiscount();
        }
        return ['total' => $total, 'count' => $count, 'data' => $data, 'subtotal' => $subtotal, 'discount' => $discount];
    }
    public function forget()
    {
        Session::forget($this->sessionName);
    }
    public function removeSpecific($key)
    {
        $this->setCart();
        if ($this->checkKey($key)) {
            unset($this->cart[$key]);
            $this->put();
        }
    }
    public function checkCoupon()
    {
        return Session::has($this->couponKey);
    }
    public function getDiscount()
    {
        return Session::get($this->couponKey);
    }
    public function resetCoupon()
    {
        Session::forget($this->couponKey);
        Session::forget($this->couponKey . '_code');
    }
    public function applyCoupon($discount, $code)
    {
        Session::put($this->couponKey, $discount);
        Session::put($this->couponKey . '_code', $code);
    }
}
