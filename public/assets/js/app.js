$(document).ready(function () {
  // Slider
  if ($(".products_slider")) {
    $(".products_slider").slick({
      slidesToShow: 3,
      slidesToScroll: 1,
    });
  }
  // Initialize Fancybox
  if ($('[data-fancybox="gallery"]').length > 0) {
    $('[data-fancybox="gallery"]').fancybox({
      buttons: ["slideShow", "fullScreen", "thumbs", "close"],
    });
  }
});



$('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,

  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  vertical: true,
  dots: false,
  arrows: false,
  focusOnSelect: true
});
