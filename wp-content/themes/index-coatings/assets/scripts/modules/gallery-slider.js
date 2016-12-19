// --------------------------------------------------------------------------
//
//   Gallery Slider
//
// --------------------------------------------------------------------------

$('.gallery-slider').slick({
  slidesToShow: 5,
  dots: false,
  arrows: false,
  autoplay: true,
  centerMode: true,
  centerPadding: '0px',

  responsive: [{

    breakpoint: 1120,
    settings: {
      slidesToShow: 3,
      infinite: true,
      arrows: true,
    }

  }, {

    breakpoint: 800,
    settings: {
      slidesToShow: 2,
      dots: false
    }

  }, {

    breakpoint: 400,
    settings: {
      slidesToShow: 1,
      dots: false
    }

  }]
})
