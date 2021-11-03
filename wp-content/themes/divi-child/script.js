jQuery(function($) {
	"use strict";
	//     $(window).on('load', function(event) {
	//         $('#preloader').delay(500).fadeOut(500)
	//     });
	$(window).on('scroll', function(event) {
		if ($(this).scrollTop() > 600) {
			$('.back-to-top').fadeIn(200)
		} else {
			$('.back-to-top').fadeOut(200)
		}
	});
	$('.back-to-top').on('click', function(event) {
		event.preventDefault();
		$('html, body').animate({
			scrollTop: 0,
		}, 1500)
	});

	$('#client-slider').slick({
		slidesToShow: 6,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 0,
		speed: 3000,
		arrows: false,
		pauseOnHover: false,
		cssEase: 'linear'
	});
});
