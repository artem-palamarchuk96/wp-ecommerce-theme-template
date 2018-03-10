$(document).on('ready', function() { 
    $('.product-slick').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: false,
        fade: true,
        asNavFor: '.product-slick-nav'
    });
    $('.product-slick-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.product-slick',
        arrows: true,
        centerMode: true,
        focusOnSelect: true,
        responsive: [
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 4,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
    });
});