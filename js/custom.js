var $ = jQuery.noConflict();

$(document).ready(function(){

//Add active class to first carousel item and first carousel indicator.

  $('#doyleCarousel').find('.item:first').addClass('active');
  $('#doyleCarousel').find('.carousel-indicators li:first').addClass('active');

});
