var $ = jQuery.noConflict();
var navLink = $('.navbar-nav').children('.dropdown-toggle');
var subLink = $('.sub-menu').children('li');
var navWidth = $('.navbar-nav').width();

function desktopDropDown() {
  $(".navbar-nav li:first-child").each(function(){
      var parent = $(this).parent('ul').parent('.dropdown');
      var copy = parent.clone();
      $(copy).removeClass("dropdown").find(".dropdown-menu, span").remove();
      $(copy).children().removeClass('dropdown-toggle').removeAttr( "data-toggle" );
      $(this).before(copy);
  });

  // $('.menu-item-has-children > a').attr('href' ,'#');

}
$(document).ready(function(){
  desktopDropDown();
});
