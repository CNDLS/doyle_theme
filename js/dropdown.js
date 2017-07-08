var $ = jQuery.noConflict();
var navLink = $('.navbar-nav').children('.dropdown-toggle');
var subLink = $('.sub-menu').children('li');
var navWidth = $('.navbar-nav').width();
var lastItems = $('.navbar-nav').children('.dropdown');

function desktopDropDown() {
  //clone all top menu links and prepend them to the sub menu links
  $(".navbar-nav li:first-child").each(function(){
      var parent = $(this).parent('ul').parent('.dropdown');
      var copy = parent.clone();
      $(copy).removeClass("dropdown").find(".dropdown-menu, span").remove();
      $(copy).children().removeClass('dropdown-toggle').removeAttr( "data-toggle" );
      $(this).before(copy);
  });

//add an active class to the toggle button so we can style it when open
  if ( $('.navbar-collapse').attr('aria-expanded') === 'true' ) {
    $('.navbar-toggle').addClass('active');
  }
//add a class to last two list items
lastItems.slice(lastItems.length - 1).addClass("last-items");


}

$(document).ready(function(){
  //instantiate function on doc ready//
  desktopDropDown();
  $('#doyleCarousel').find('.item:first').addClass('active');
  $('#doyleCarousel').find('.carousel-indicators li:first').addClass('active');





});
