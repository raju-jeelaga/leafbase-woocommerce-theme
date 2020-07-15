jQuery(document).ready(function($) {
    $('.drawer').drawer();

    //Prodcut Slider
    $('.product-slider').slick({
          infinite: true,
          slidesToShow: 4,
          slidesToScroll: 4,
          dots: true,
          responsive: [
          {
          breakpoint: 980,
          settings: {
            arrows: true,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 3
          }
        },
          {
            breakpoint: 600,
            settings: {
              arrows: true,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 2
            }
          }
        ]
    });

    //Cat slider
    $('.cat-slider').slick({
          infinite: true,
          slidesToShow: 6,
          slidesToScroll: 6,
          dots: false,
          responsive: [
          {
          breakpoint: 980,
          settings: {
            arrows: true,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 4
          }
        },
          {
            breakpoint: 600,
            settings: {
              arrows: true,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 2
            }
          }
        ]
    });

});