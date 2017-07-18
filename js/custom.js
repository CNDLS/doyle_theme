var $ = jQuery.noConflict();

$(document).ready(function(){

//Add active class to first carousel item and first carousel indicator.

  $('#doyleCarousel').find('.item:first').addClass('active');
  $('#doyleCarousel').find('.carousel-indicators li:first').addClass('active');


//Initialize Masonry JS//
  $('.loop-container').masonry({
    itemSelector: '.loop-item',
    columnWidth: '.loop-item',
  });
});
