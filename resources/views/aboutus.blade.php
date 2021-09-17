@extends('layouts.main')
@section('content')
<!-- Page Title -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>About Us</h1>
      </div>
    </div>
  </div>
</div>
<!-- Who We Are Section -->
<div class="about whoWeAre">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-lg-6">
        <img src="{{ asset('assets/images/about-1.png') }}" alt="about" class="imgFluid" />
      </div>
      <div class="col-12 col-lg-6">
        <div class="about_content">
          <h6>About</h6>
          <h5>Social Pulse</h5>
          <h2>Who We Are</h2>
          <p>
            The name says it all! Social Pulse understands your need for
            exciting products to ensure your event or brand are distinctive.
            We are here with unique products that can be laser customized
            with words, logos and color.
            <br />
            <br />
            Provide us with your logo, share specific artwork or allow us to
            assist in creating designs with your creative input.The name
            says it all! Social Pulse understands your need for exciting
            products to ensure your event or brand are distinctive. We are
            here with unique products that can be laser customized with
            words, logos and color.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- What We Do Section -->
<div class="about whatWeDo">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-lg-6">
        <div class="about_content">
          <h6>About</h6>
          <h5>Social Pulse</h5>
          <h2>What We Do</h2>
          <p>
            The name says it all! Social Pulse understands your need for
            exciting products to ensure your event or brand are distinctive.
            We are here with unique products that can be laser customized
            with words, logos and color.
            <br />
            <br />
            Provide us with your logo, share specific artwork or allow us to
            assist in creating designs with your creative input.The name
            says it all! Social Pulse understands your need for exciting
            products to ensure your event or brand are distinctive. We are
            here with unique products that can be laser customized with
            words, logos and color.
          </p>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <img src="{{ asset('assets/images/about-1.png') }}" alt="about" class="imgFluid" />
      </div>
    </div>
  </div>
</div>
<!-- Video Section -->
<div class="videoWrapper">
  <div class="video">
    <div class="container">
      <div class="row justify-content-end">
        <div class="col-12 col-lg-5">
          <div class="video_content">
            <h2>Lorem Ipsum Dolor</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed
              do eiusmod tempor
            </p>
            <a href="#" class="play">
              <img src="{{ asset('assets/images/forward.png') }}" alt="image" class="imgFluid" />
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Footer -->

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