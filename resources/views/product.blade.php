@extends('layouts.main')
@section('content')
<!-- Page Title -->
<div class="pageTitle">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>{{$product->name}}</h1>
            </div>
        </div>
    </div>
</div>
<!-- Tabs -->
<section class="productdetail_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                <div class="productdescr_img">
                    <div class="slickproduct_slider">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                <div class="slick_navcontrol">
                                    <div class="slider slider-nav">
                                        @foreach($product->allimages as $image)
                                        <div><img src="{{asset($image->img_path)}}" width="100%" alt="" /></div>
                                        @endforeach
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                <div class="slider slider-for">
                                    @foreach($product->allimages as $image)
                                    <div><img src="{{asset($image->img_path)}}" width="100%" alt="" /> </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <div class="productdetail_diver">
                    <h2>{{$product->name}} </h2>
                    <h3> {{$product->category->flag_value}}</h3>
                    <h2> ${{$product->formatted_price_discounted}} </h2>
                    <hr>
                    <?php print $product->description; ?>

                    <div class="btn-appointment-detail">
                        <a href="{{route('cart.add.direct',[$product])}}">Add to cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Section End -->
@include('extends.newsletter')
@endsection
@section('js')

@endsection