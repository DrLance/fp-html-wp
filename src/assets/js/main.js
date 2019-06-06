jQuery(document).ready(function($){

  $(".slider-front").slick({
    dots: false,
    speed: 500,
    slidesToShow: 2,
    slidesToScroll: 2,
    draggable: false,
    accessibility: false,

    //nextArrow: '<button class="arrow-next slick-next"></button>',
    //prevArrow: '<button class="arrow-prev slick-prev"></button>',
  });

  $('.gallery-item').fancybox();
});