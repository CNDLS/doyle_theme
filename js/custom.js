var $ = jQuery.noConflict();

$(document).ready(function () {

  var $window = $(window);
  var timer; // For debouncing window resize events
  var $loop_container = $('.loop-container');
  var $loop_item_images = $loop_container.find('.loop-item .img-responsive');

  // Init Isotope JS (masonry javascript plugin: https://isotope.metafizzy.co/)
  $loop_container.isotope({
      itemSelector: '.loop-item',
      percentPosition: true,
      masonry: {
          // use element for option
          columnWidth: '.loop-item'
      }
  });

  //Add active class to first carousel item and first carousel indicator.
  $('#doyleCarousel').find('.item:first').addClass('active');
  $('#doyleCarousel').find('.carousel-indicators li:first').addClass('active');

  // Run isotope JS for masonry layout
  // This initial call is necessary in case the images load before the DOM is ready (with fast connections).
  $loop_container.isotope('layout');

  // Run isotope JS for masonry layout every time an image is loaded, so slow-loading images don't break the grid
  $loop_item_images.load(function() {
    $loop_container.isotope('layout');
  });

  // Run isotope's layout on window.resize, after the window stops resizing for a certain delay
  $window.on('resize', function() {
    console.log("Resize triggered!");
    clearTimeout(timer);
    timer = setTimeout(function() {
      console.log('Isotope layout triggered!');
      $loop_container.isotope('layout');
    }, 500);
  });

});
