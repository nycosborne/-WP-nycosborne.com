jQuery(document).ready(function($) {

	/* Stick navigation to the top of the page */
	var stickyNavTop = $('.site-header').offset().top;

	$(window).scroll(function(){

		var scrollTop = $(window).scrollTop();

		if (scrollTop > stickyNavTop) {
			$('.site-header').addClass('sticky-header');
			$('.site-header').addClass('shifted');

		} else {
			$('.site-header').removeClass('sticky-header');
			$('.site-header').removeClass('shifted');

		}

	});
});
