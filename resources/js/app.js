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
        slidesToShow: 3,
        slidesToScroll: 2,
        autoplay: false,
        autoplaySpeed: 3000,
        dots: false,
        prevArrow: false,
        nextArrow: false
      });
});
