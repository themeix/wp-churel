// ================================
// Theme Options
// ================================

(function ($) {
	"use strict";


	/*  banner slider */
	$('.banner-slider').owlCarousel({
		nav: false,
		dots: true,
		margin: 30,
		autoplay: true,
		loop:true,
		responsive: {
			0: {
				items: 1
			},
			1000: {
				items: 1
			}
		}

	});


	/*  latest slider */
	$('.latest-slider').owlCarousel({
		nav: true,
		dots: false,
		margin: 30,
		loop:true,
		autoplay: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 1
			},
			1000: {
				items: 2
			}
		}

	});
	/*  author bio slider */
	$('.author-bio-slider').owlCarousel({
		nav: true,
		dots: false,
		loop:true,
		margin: 30,
		autoplay: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 1
			},
			1000: {
				items: 1
			}
		}

	});


	// =====================
	// Mailchimp
	// ===================== 
	if ($(".mailchimp_subscribe").length > 0) {
		$(".subscribe-form.mailchimp_subscribe").attr("action", mailchimp_url);
	}


	const closeEl = '<button id="hamburger-close--2" class="sf-hidden menu-btn"><i class="fa fa-plus"></i> '+escape('Close')+'</button>';

	$('.search-modal').before(closeEl);

	$('#hamburger-open').on('click', function () {
		$('.sf-menu').removeClass('sf-hidden');
		$(this).addClass('sf-hidden');
		$('#hamburger-close').removeClass('sf-hidden');
	});
	$('#hamburger-close').on('click', function () {
		$('.sf-menu').addClass('sf-hidden');
		$(this).addClass('sf-hidden');
		$('#hamburger-open').removeClass('sf-hidden');
	});
	$('#hamburger-close--2').on('click', function () {
		$('.sf-menu').addClass('sf-hidden');
		$(this).addClass('sf-hidden');
		$('#hamburger-open').removeClass('sf-hidden');
	});

	$('#main-menu>li:last-child>a').focus(function () {
		$('#hamburger-close').addClass('sf-hidden');
		$('#hamburger-close--2').removeClass('sf-hidden');
	});
	$('#hamburger-close--2').focus(function () {
		$('#hamburger-close').removeClass('sf-hidden');
		$('#hamburger-close--2').addClass('sf-hidden');
		$('#hamburger-close').focus();
	});
	$('#main-menu>li:first-child>a').focus(function () {
		$('#hamburger-close').removeClass('sf-hidden');
		$('#hamburger-close--2').addClass('sf-hidden');
	});
	
	$('#hamburger-close').on('click', function (){
		$('#hamburger-open').focus();
	});
	$('#hamburger-open').on('click', function (){
		$('#hamburger-close').focus();
	});



	//Efficient way to smooth scroll
	const skip_link = document.querySelector('.skip-link');
	skip_link.addEventListener('click', function (e) {
		e.preventDefault();
		document.querySelector('#content').scrollIntoView({
			behavior: 'smooth',
		});
	});


}(jQuery));
