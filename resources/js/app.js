require('./bootstrap');
require('slick-carousel');
require('slick');

$('.single-item').slick();

jQuery(document).ready(function($){
    $('.hero-slider').slick({
        // slidesToShow: 4,
        // slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: false,
        prevArrow: false,
        nextArrow: false
      });
});


jQuery(document).ready(function($){
    $('.cat-selector').slick({
        slidesToShow: 4,
        slidesToScroll: 4,
        autoplay: false,
        autoplaySpeed: 3000,
        dots: false,
        prevArrow: false,
        nextArrow: false
      });
});

jQuery(document).ready(function openCity(cityName){
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(cityName).style.display = "block";
});