var $ = jQuery.noConflict();

$(document).ready(function () {

  var $loop_container = $('.loop-container');
  var $loop_item_images = $loop_container.find('.loop-item .img-responsive');

  function runIsotope() {
    $loop_container.isotope({
      itemSelector: '.loop-item',
      percentPosition: true,
      masonry: {
        // use element for option
        columnWidth: '.loop-item'
      }
    });
  }


  //Add active class to first carousel item and first carousel indicator.
  $('#doyleCarousel').find('.item:first').addClass('active');
  $('#doyleCarousel').find('.carousel-indicators li:first').addClass('active');

  // Run isotope JS for masonry layout
  runIsotope();

  // Run isotope JS for masonry layout every time an image is loaded, so slow-loading images don't break the grid
  $loop_item_images.load(function() {
    runIsotope();
    console.log('The image has loaded!');
  });

  // Trigger Isotope when the img object has mutated (in this case, the mutation is that the currentSrc of each image
  // has changed, for example when the user resizes the screen. This is because the images have srcset attributes.)
  // select the target node

  // configuration of the observer:
  // var config = { attributes: true, childList: true, characterData: true };
  //
  // $loop_item_images.each(function(index, element) {
  //   // create an observer instance
  //   var observer = new MutationObserver(function(mutations) {
  //     mutations.forEach(function(mutation) {
  //       console.log(mutation.type);
  //     });
  //   });
  //
  //   // pass in the target node, as well as the observer options
  //   observer.observe(element, config);
  //
  // });





});
