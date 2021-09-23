@extends('layouts.main')
@section('content')
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Checkout</h1>
      </div>
    </div>
  </div>
</div>
<section class="checkout-sec pd_80">
    <div id="cartapp" class="container">
        <div class="checkout-tab-main">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8">
                    <div class="form-sec-checkout">
                        <div class="checkout-heading">
                            <h3>Billing Address</h3>
                        </div>
                        <div class="form-tab ">
                            <form id="order_form" method="POST" action="{{route('checkout.placeOrder')}}">
                                @csrf
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                            <label for="">First Name <span>*</span></label>
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input name="first_name" value="{{old('first_name')}}" class="form-control" type="text">
                                        </div>
                                        {{Helper::errorField('first_name',$errors)}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                            <label for="">Last Name <span>*</span></label>
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input name="last_name" value="{{old('last_name')}}" class="form-control" type="text">
                                        </div>
                                        {{Helper::errorField('last_name',$errors)}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                            <label for="">Company Name <span>*</span></label>
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input name="company_name" value="{{old('company_name')}}" class="form-control" type="text">
                                        </div>
                                        {{Helper::errorField('company_name',$errors)}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                            <label for="">Address</label>
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input name="address" value="{{old('address')}}" class="form-control" placeholder="Street Address" type="text">
                                        </div>
                                        {{Helper::errorField('address',$errors)}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-9 col-sm-9 col-xs-12 offset-3">
                                            <input name="address2" value="{{old('address2')}}" class="form-control" type="text">
                                        </div>
                                        {{Helper::errorField('address2',$errors)}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                            <label for="">Town / City <span>*</span></label>
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input name="city" value="{{old('city')}}" class="form-control" placeholder="Town / City" type="text">
                                        </div>
                                        {{Helper::errorField('city',$errors)}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                            <label for="">Email Address <span>*</span></label>
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input name="email" value="{{old('email')}}" class="form-control" type="text">
                                        </div>
                                        {{Helper::errorField('email',$errors)}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                            <label for="">Phone</label>
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input name="phone" value="{{old('phone')}}" class="form-control" type="text">
                                        </div>
                                        {{Helper::errorField('phone',$errors)}}
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="checkoutSec">
                        <div class="checkoutBox">
                            <div class="checkoutHead">
                                <h3>your order</h3>
                            </div>

                            <div class="chk-one">
                                <div class="checkoutBody">
                                    <ul class="list-unstyled">
                                        <li>Cart Subtotal x @{{cart.count}} <span class="pull-right">£@{{productSubTotal}}</span></li>
                                        <li>Shipping <span class="pull-right">Free Shipping</span></li>
                                        <li>Discount <span class="pull-right">@{{cart.discount}}%</span></li>
                                        <li>Tax <span class="pull-right">£0.00</span></li>
                                        <li>Order Total <span class="pull-right">£@{{productTotal}}</span></li>
                                    </ul>

                                </div>
                                <div class="checkoutFoot">
                                    
                                    <div class="web-btn">
                                        <a onclick="$('#order_form').submit()" href="javascript:void(0)">PLACE ORDER</a>
                                    </div>
                                </div>
                            </div>
                        </div>
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