// --------------------------------------------------------------------------
//
//   Gallery Filter
//
// --------------------------------------------------------------------------

$('.gallery-filter-trigger').on('click', (event) => {

  event.preventDefault()

  $('.gallery-filter-options').slideToggle()

})

$('.gallery-filter-option').on('click', (event) => {

  var selection = event.currentTarget

  event.preventDefault()

  $(selection).addClass('active')

  $('.gallery-filter-option').not(selection).removeClass('active')

  filterGallery($(selection).data('type'))


})


var filterGallery = (something) => {

  var items = $('.gallery-item')

  items.show()

  items.not('.' + something).hide()

}
