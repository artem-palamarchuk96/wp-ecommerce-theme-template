$(document).on('ready', function() { 
    $('.product-slick').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: false,
        asNavFor: '.product-slick-nav'
    });
    $('.product-slick-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.product-slick',
        arrows: true,
        centerMode: true,
        focusOnSelect: true
    });
});