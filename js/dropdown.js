var $ = jQuery.noConflict();
function dropDown() {
  var navLink = $('.navbar-nav li');
  var navWidth = $('.navbar-nav').width()*0.5;
    $(navLink).hover(
        function() {
            $(this).children('ul').show();
            $(this).children('ul').width(navWidth);
            $(this).children('ul').slideDown('fast');
        },
        function() {
            $('ul', this).slideUp('fast');
        });
}

$(document).ready(function(){
  dropDown();
});
$(window).resize(function() {
    dropDown();
});
