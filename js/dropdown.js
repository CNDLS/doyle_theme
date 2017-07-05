var $ = jQuery.noConflict();
var navLink = $('.navbar-nav').children('.dropdown-toggle');
var subLink = $('.sub-menu').children('li');
var navWidth = $('.navbar-nav').width();

function desktopDropDown() {
  //clone all top menu links and prepend them to the sub menu links
  $(".navbar-nav li:first-child").each(function(){
      var parent = $(this).parent('ul').parent('.dropdown');
      var copy = parent.clone();
      $(copy).removeClass("dropdown").find(".dropdown-menu, span").remove();
      $(copy).children().removeClass('dropdown-toggle').removeAttr( "data-toggle" );
      $(this).before(copy);
  });
  // add a chevron if  menu links to a submenu
    $('.dropdown-submenu').children('a').append('<span class="glyphicon glyphicon-chevron-right"></span>');
    // ADD SLIDEDOWN ANIMATION TO DROPDOWN //
   $('.dropdown').on("show.bs.dropdown", function (e) {
     console.log("I am showing!");
       $(this).find('.dropdown-menu').slideDown();
   });

   // ADD SLIDEUP ANIMATION TO DROPDOWN //
   $('.dropdown').on('hide.bs.dropdown', function (e) {
       $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
   });
}

$(document).ready(function(){
  //instantiate function on doc ready//
  desktopDropDown();




});
