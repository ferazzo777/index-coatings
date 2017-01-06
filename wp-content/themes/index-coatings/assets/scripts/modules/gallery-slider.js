// --------------------------------------------------------------------------
//
//   Gallery Slider
//
// --------------------------------------------------------------------------

$('.gallery-slider').slick({
  //slidesToScroll: 3,
  infinite: false,
  autoplay: true,
  autoplaySpeed: 3000,
  arrows: true,
  //variableWidth: true,
  dots: false,
  //centerMode: true,
  placeholders: false,
  speed: 300,
  slidesToShow: 5,

  responsive: [
    {
      breakpoint: 1790,
      settings: {
        slidesToShow: 4,
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

$('.services-intro .service').hover(function() {
  //remove active state
  $('.services-intro .service').removeClass('active');
  //add active state
  $(this).addClass('active');
});
