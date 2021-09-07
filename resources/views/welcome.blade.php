@extends('layouts.main')
@section('content')
<!-- Banner -->
<div class="banner">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-12 col-md-6">
        <div class="banner_img">
          <img src="assets/images/banner-img.png" alt="Banner Image" class="imgFluid" />
          <a href="#">Read More</a>
        </div>
      </div>
      <div class="col-12 col-md-4 offset-md-2">
        <div class="banner_play">
          <i class="bx bx-play"></i>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Categories -->
<div class="categories">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-4">
        <div class="categories_card">
          <img src="assets/images/card-1.png" alt="category" class="imgFluid" />
          <div class="categories_cardTitle">
            <a href="#">Promo Pulse</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4">
        <div class="categories_card">
          <img src="assets/images/card-2.png" alt="category" class="imgFluid" />
          <div class="categories_cardTitle">
            <a href="#">Promo Pulse</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4">
        <div class="categories_card">
          <img src="assets/images/card-3.png" alt="category" class="imgFluid" />
          <div class="categories_cardTitle">
            <a href="#">Promo Pulse</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Featured Products -->
<div class="products">
  <div class="container">
    <div class="heading">
      <img src="assets/images/wave.png" alt="image" class="imgFluid" />
      <div>
        <span>Lorem Ipsum Dolor Sit Amet Cing</span>
        <h2>Featured Products</h2>
      </div>
    </div>
    <div class="row products_slider">
      <div class="col-12 col-lg-4">
        <div class="product">
          <img src="assets/images/product-1.png" alt="product" class="imgFluid" />
          <h4 class="product_title">LED Safety Heel Clip</h4>
          <div class="product_overlay">
            <h4>LED Safety Heel Clip</h4>
            <a href="#" class="themeBtn">Shop Now</a>
            <div>
              <span>&dollar;240.00</span>
              <div>
                <i class="bx bx-heart bx-sm bx-tada-hover"></i>
                <i class="bx bx-shopping-bag bx-sm bx-tada-hover"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4">
        <div class="product">
          <img src="assets/images/product-2.png" alt="product" class="imgFluid" />
          <h4 class="product_title">LED Laser Event Band</h4>
          <div class="product_overlay">
            <h4>LED Laser Event Band</h4>
            <a href="#" class="themeBtn">Shop Now</a>
            <div>
              <span>&dollar;240.00</span>
              <div>
                <i class="bx bx-heart bx-sm bx-tada-hover"></i>
                <i class="bx bx-shopping-bag bx-sm bx-tada-hover"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4">
        <div class="product">
          <img src="assets/images/product-3.png" alt="product" class="imgFluid" />
          <h4 class="product_title">LED Key Tags</h4>
          <div class="product_overlay">
            <h4>LED Key Tags</h4>
            <a href="#" class="themeBtn">Shop Now</a>
            <div>
              <span>&dollar;240.00</span>
              <div>
                <i class="bx bx-heart bx-sm bx-tada-hover"></i>
                <i class="bx bx-shopping-bag bx-sm bx-tada-hover"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4">
        <div class="product">
          <img src="assets/images/product-1.png" alt="product" class="imgFluid" />
          <h4 class="product_title">LED Safety Heel Clip</h4>
          <div class="product_overlay">
            <h4>LED Safety Heel Clip</h4>
            <a href="#" class="themeBtn">Shop Now</a>
            <div>
              <span>&dollar;240.00</span>
              <div>
                <i class="bx bx-heart bx-sm bx-tada-hover"></i>
                <i class="bx bx-shopping-bag bx-sm bx-tada-hover"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4">
        <div class="product">
          <img src="assets/images/product-2.png" alt="product" class="imgFluid" />
          <h4 class="product_title">LED Laser Event Band</h4>
          <div class="product_overlay">
            <h4>LED Laser Event Band</h4>
            <a href="#" class="themeBtn">Shop Now</a>
            <div>
              <span>&dollar;240.00</span>
              <div>
                <i class="bx bx-heart bx-sm bx-tada-hover"></i>
                <i class="bx bx-shopping-bag bx-sm bx-tada-hover"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4">
        <div class="product">
          <img src="assets/images/product-3.png" alt="product" class="imgFluid" />
          <h4 class="product_title">LED Key Tags</h4>
          <div class="product_overlay">
            <h4>LED Key Tags</h4>
            <a href="#" class="themeBtn">Shop Now</a>
            <div>
              <span>&dollar;240.00</span>
              <div>
                <i class="bx bx-heart bx-sm bx-tada-hover"></i>
                <i class="bx bx-shopping-bag bx-sm bx-tada-hover"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Video Section -->
<div class="video">
  <div class="container">
    <div class="row justify-content-end">
      <div class="col-12 col-lg-5">
        <div class="video_content">
          <h2>Lorem Ipsum Dolor</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do
            eiusmod tempor
          </p>
          <a href="#" class="play">
            <img src="assets/images/forward.png" alt="image" class="imgFluid" />
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- About Section -->
<div class="about">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-lg-6">
        <img src="assets/images/about-1.png" alt="about" class="imgFluid" />
      </div>
      <div class="col-12 col-lg-6">
        <div class="about_content">
          <h6>About</h6>
          <h5>Social Pulse</h5>
          <h2>About</h2>
          <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting
            industry. Lorem Ipsum has been the industry's standard dummy
            text ever since the 1500s, when an unknown printer took a galley
            of type and scrambled it to make a type specimen book. It has
            survived not only five centuries,
          </p>
          <a href="#" class="themeBtn">Read More</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Power Banks -->
<div class="powerBanks">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-5">
        <div class="powerBanks_content">
          <h3>Pick Our</h3>
          <h2>Power Banks</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna.
          </p>
          <a href="#" class="themeBtn">Click Here</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Gallery -->
<div class="gallery">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="heading">
          <img src="assets/images/wave.png" alt="image" class="imgFluid" />
          <div>
            <span>Lorem Ipsum Dolor</span>
            <h2>Our Gallery</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-lg-8">
        <div class="gallery_img">
          <img src="assets/images/gallery-1.png" alt="image" class="imgFluid" />
          <div class="overlay">
            <a href="assets/images/gallery-1.png" data-fancybox="gallery">View</a>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-lg-6">
            <div class="gallery_img">
              <img src="assets/images/gallery-4.png" alt="image" class="imgFluid" />
              <div class="overlay">
                <a href="assets/images/gallery-4.png" data-fancybox="gallery">View</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6">
            <div class="gallery_img">
              <img src="assets/images/gallery-5.png" alt="image" class="imgFluid" />
              <div class="overlay">
                <a href="assets/images/gallery-5.png" data-fancybox="gallery">View</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4">
        <div class="gallery_img">
          <img src="assets/images/gallery-2.png" alt="image" class="imgFluid" />
          <div class="overlay">
            <a href="assets/images/gallery-2.png" data-fancybox="gallery">View</a>
          </div>
        </div>
        <div class="gallery_img">
          <img src="assets/images/gallery-3.png" alt="image" class="imgFluid" />
          <div class="overlay">
            <a href="assets/images/gallery-3.png" data-fancybox="gallery">View</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Contact Us -->
<div class="contact">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="heading">
          <img src="assets/images/wave.png" alt="image" class="imgFluid" />
          <div>
            <span>Lorem Ipsum Dolor</span>
            <h2>Contact Us</h2>
          </div>
        </div>
        <form action="#">
          <div class="row">
            <div class="col-12 col-lg-6">
              <input type="text" name="name" id="name" placeholder="Name" />
            </div>
            <div class="col-12 col-lg-6">
              <input type="email" name="email" id="email" placeholder="Email" />
            </div>
            <div class="col-12">
              <textarea name="message" id="message" rows="8" placeholder="Your Message"></textarea>
            </div>
          </div>
          <button type="submit" class="themeBtn">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
@section('css')
<style type="text/css">
  /*in page css here*/
</style>
@endsection
@section('js')
<script type="text/javascript">
  (() => {
    /*in page css here*/
  })()
</script>
@endsection