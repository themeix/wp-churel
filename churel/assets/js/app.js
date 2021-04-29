// ================================
// Theme Options
// ================================
if (typeof themeConfig == "undefined") {
	themeConfig = {};
}

var ghosthunter_key = themeConfig.ghostSearchKey;

(function ($) {
	"use strict";
	/*  Preloader*/
	$(window).on('load', function () {

		var preLoder = $(".lds-css");
		preLoder.fadeOut(1000);

	});


	jQuery('ul.sf-menu').superfish();



	/*  AOS */
	AOS.init({
		offset: 120,
		delay: 0,
		duration: 400,
		easing: 'ease',
		once: true,
		mirror: false,
		anchorPlacement: 'top-bottom'

	});

	/*  tooltip */



	$('[data-toggle="tooltip"]').tooltip();


	/*  fitVids */

	$(".container").fitVids();


	/*  scrollTop */


	var header = $(".social-fixed");
	$(window).scroll(function () {
		var scroll = $(window).scrollTop();

		if (scroll >= 600) {
			header.removeClass('hide-social').addClass("show-social");
		} else {
			header.removeClass("show-social").addClass('hide-social');
		}
	});

	/*  scrollTop */

	$(window).scroll(function () {
		if ($(this).scrollTop() >= 50) {
			$('#return-top').fadeIn(200);
		} else {
			$('#return-top').fadeOut(200);
		}
	});

	$('#return-top').on('click', function () {
		$('body,html').animate({
			scrollTop: 0
		}, 500);
	}

	);


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

	// ==============
	// Ajax Load More
	// ==============

	var pagination_next_url = $('link[rel=next]').attr('href'),
		$load_posts_button = $('.js-load-posts');

	$load_posts_button.click(function (e) {
		e.preventDefault();

		var request_next_link = pagination_next_url.split(/page/)[0] + 'page/' + pagination_next_page_number + '/';

		$.ajax({
			url: request_next_link,
			beforeSend: function () {
				$load_posts_button.text(escape('Loading'));
				$load_posts_button.addClass('button--loading');
			}
		}).done(function (data) {
			var posts = $('.post', data);

			$load_posts_button.text(escape('Load More'));
			$load_posts_button.removeClass('button--loading');

			$('.posts').append(posts);

			pagination_next_page_number++;

			// If you are on the last pagination page, add the disabled attribute
			if (pagination_next_page_number > pagination_available_pages_number) {
				$load_posts_button.addClass('c-btn-disabled').attr('disabled', true);
			}
		});
	});


	// =====================
	// Mailchimp
	// ===================== 
	if ($(".mailchimp_subscribe").length > 0) {
		$(".subscribe-form.mailchimp_subscribe").attr("action", mailchimp_url);
	}




	 


	// =====================
	// Switch Color
	// ===================== 
	var themeSwitch = document.getElementById('switch_theme');
	if (themeSwitch) {
		initTheme(); // if user has already selected a specific theme -> apply it
		themeSwitch.addEventListener('change', function (event) {
			resetTheme(); // update color theme
		});

		function initTheme() {
			var darkThemeSelected = (localStorage.getItem('switch_theme') !== null && localStorage.getItem('switch_theme') === 'dark');
			// update checkbox
			themeSwitch.checked = darkThemeSelected;
			// update body data-theme attribute
			darkThemeSelected ? document.body.setAttribute('data-theme', 'dark') : document.body.removeAttribute('data-theme');
		};

		function resetTheme() {
			if (themeSwitch.checked) { // dark theme has been selected
				document.body.setAttribute('data-theme', 'dark');
				localStorage.setItem('switch_theme', 'dark');
			} else {
				document.body.removeAttribute('data-theme');
				localStorage.removeItem('switch_theme');
			}
		};
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
