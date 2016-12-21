// --------------------------------------------------------------------------
//
//   Gallery Filter
//
// --------------------------------------------------------------------------

$('.gallery-filter-trigger').on('click', (event) => {

  event.preventDefault()

  $('.gallery-filter-options').slideToggle()

})

$('.gallery-filter-option').on('click', function (event) {

  event.preventDefault()

  $(this).addClass('active')

  $('.gallery-filter-option').not(this).removeClass('active')

  filterGallery($(this).data('type'))


})


var filterGallery = (something) => {

  var items = $('.gallery-item')

  items.show()

  items.not('.' + something).hide()

}
