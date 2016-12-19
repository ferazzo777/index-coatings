// --------------------------------------------------------------------------
//
//   Partners
//
// --------------------------------------------------------------------------

$('.partners-slider').slick({
  slidesToShow: 5,
  dots: false,
  arrows: false,
  autoplay: true,

  responsive: [{

    breakpoint: 1120,
    settings: {
      slidesToShow: 3,
      infinite: true,
      arrows: true,
    }

  }, {

    breakpoint: 300,
    settings: {
      slidesToShow: 1,
      dots: false
    }

  }]
})
