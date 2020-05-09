jQuery(document).ready(function($) {

  var arrow = $('.arrow_wrap');

  /*
		Function add and remove class from header to shrink logo when page scroll is > 40 from top
	*/

  function headerClassesScroll() {
    if ($(window).scrollTop() > 40) {
      $('header').addClass('scroll');
      arrow.addClass('active');
    } else {
      $('header').removeClass('scroll');
      arrow.removeClass('active');
    }
  }

  /*
		call function headerClassesScroll when page is scrolled
	*/

  $(window).on('scroll', function (event) {
    headerClassesScroll()
  });

  arrow.click(function(e){

    $(window).scrollTop();
  });

});
