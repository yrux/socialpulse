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
