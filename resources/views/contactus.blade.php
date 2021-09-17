@extends('layouts.main')
@section('content')
<!-- Page Title -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Contact Us</h1>
      </div>
    </div>
  </div>
</div>
<!-- Iframe -->
<div class="iframeWrapper">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="iframe">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158857.7281062214!2d-0.24168183442752886!3d51.52877184100476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C%20UK!5e0!3m2!1sen!2s!4v1627597456490!5m2!1sen!2s" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Contact Links -->
<div class="contactLinks">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-4">
        <a href="tel:+14038275502" class="contactLinks_thumbnail">
          <i class="fas fa-phone-alt"></i>
          <span>+1 (403) 827-5502</span>
        </a>
      </div>
      <div class="col-12 col-md-4">
        <a href="mailto:info@socialpulsellc.com" class="contactLinks_thumbnail">
          <i class="far fa-envelope"></i>
          <span>info@socialpulsellc.com</span>
        </a>
      </div>
      <div class="col-12 col-md-4">
        <a href="#" class="contactLinks_thumbnail">
          <i class="fas fa-map-marker-alt"></i>
          <span>Social Pulse LLC 5348 Vegas Drive Las Vegas, NV
            89108-2347</span>
        </a>
      </div>
    </div>
  </div>
</div>

@include('extends.contactform')

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

  function inquiry_error(res) {
    if (res) {
      if (isJSON(res)) {
        res = JSON.parse(res);
        if (res.errors) {
          var _errors = '';
          for (j in res.errors) {
            _errors += res.errors[j].join('</br>') + '</br>';
          }
          generateNotification('0', _errors);
        }
      }
    }
  }

  function inquiry_success(_msg) {
    if (_msg.status) {
      generateNotification('1', 'Thank you! your message has been sent to admin.');
      $('#inquiry_form')[0].reset();
    }
  }
</script>
@endsection