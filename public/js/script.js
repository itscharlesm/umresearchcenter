/**
 * WEBSITE: https://themefisher.com
 * TWITTER: https://twitter.com/themefisher
 * FACEBOOK: https://www.facebook.com/themefisher
 * GITHUB: https://github.com/themefisher/
 */

(function ($) {
	'use strict';

	// Preloader js
	$(window).on('load', function () {
		$('.preloader').fadeOut(700);
	});

	// Sticky Menu
	$(window).scroll(function () {
		var height = $('.top-header').innerHeight();
		if ($('header').offset().top > 10) {
			$('.top-header').addClass('hide');
			$('.navigation').addClass('nav-bg');
			$('.navigation').css('margin-top', '-' + height + 'px');
		} else {
			$('.top-header').removeClass('hide');
			$('.navigation').removeClass('nav-bg');
			$('.navigation').css('margin-top', '-' + 0 + 'px');
		}
	});

	// navbarDropdown
	if ($(window).width() < 992) {
		$('.navigation .dropdown-toggle').on('click', function () {
			$(this).siblings('.dropdown-menu').animate({
				height: 'toggle'
			}, 300);
		});
	}

	// Background-images
	$('[data-background]').each(function () {
		$(this).css({
			'background-image': 'url(' + $(this).data('background') + ')'
		});
	});

	// Hero Slider
	$('.hero-slider').slick({
		autoplay: true,
		autoplaySpeed: 7500,
		pauseOnFocus: false,
		pauseOnHover: false,
		infinite: true,
		arrows: true,
		fade: true,
		prevArrow: '<button type=\'button\' class=\'prevArrow\'><i class=\'ti-angle-left\'></i></button>',
		nextArrow: '<button type=\'button\' class=\'nextArrow\'><i class=\'ti-angle-right\'></i></button>',
		dots: true
	});
	$('.hero-slider').slickAnimation();

	// venobox popup
	$(document).ready(function () {
		$('.venobox').venobox();
	});

	// filter
	$(document).ready(function () {
		var containerEl = document.querySelector('.filtr-container');
		var filterizd;
		if (containerEl) {
			filterizd = $('.filtr-container').filterizr({});
		}
		// Active changer
		$('.filter-controls li').on('click', function () {
			$('.filter-controls li').removeClass('active');
			$(this).addClass('active');
		});
	});

	// Count Up
	function counter() {
		var oTop;
		if ($('.count').length !== 0) {
			oTop = $('.count').offset().top - window.innerHeight;
		}
		if ($(window).scrollTop() > oTop) {
			$('.count').each(function () {
				var $this = $(this),
					countTo = $this.attr('data-count');
				$({
					countNum: $this.text()
				}).animate({
					countNum: countTo
				}, {
					duration: 1000,
					easing: 'swing',
					step: function () {
						$this.text(Math.floor(this.countNum));
					},
					complete: function () {
						$this.text(this.countNum);
					}
				});
			});
		}
	}
	$(window).on('scroll', function () {
		counter();
	});

	// Scroll to top button show/hide
	function scrollTopBtn() {
		var scrollToTop = $('#back-to-top'),
			scroll = $(window).scrollTop();
		if (scroll >= 50) {
			scrollToTop.fadeIn();
		} else {
			scrollToTop.fadeOut();
		}
	}
	scrollTopBtn();

	// back to top functionality
	$('#back-to-top').on('click', function () {
		$('#back-to-top').tooltip('hide');
		$('body,html').animate({
			scrollTop: 0
		}, 800);
		return false;
	});

	// Shuffle js filter and masonry
	function projectShuffle() {
		if ($('.shuffle-wrapper').length !== 0) {
			var Shuffle = window.Shuffle;
			var myShuffle = new Shuffle(document.querySelector('.shuffle-wrapper'), {
				itemSelector: '.shuffle-item',
				sizer: '.shuffle-sizer',
				buffer: 1
			});
			$('input[name="shuffle-filter"]').on('change', function (evt) {
				var input = evt.currentTarget;
				if (input.checked) {
					myShuffle.filter(input.value);
				}
			});
			$('.shuffle-btn-group label').on('click', function () {
				$('.shuffle-btn-group label').removeClass('active');
				$(this).addClass('active');
			});
		}
	}
	projectShuffle();

	// Testimonial carousel
	function testimonialCarousel() {
		$('.testimonial-slide').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			dots: true,
			speed: 600,
			arrows: false
		});
	}
	testimonialCarousel();

	// Team carousel
	function teamCarousel() {
		$('.team-slide').slick({
			dots: false,
			infinite: false,
			speed: 300,
			slidesToShow: 4,
			slidesToScroll: 2,
			arrows: true,
			prevArrow: '<button type="button" class="carousel-control left" aria-label="carousel-control"><i class="fas fa-chevron-left"></i></button>',
			nextArrow: '<button type="button" class="carousel-control right" aria-label="carousel-control"><i class="fas fa-chevron-right"></i></button>',
			responsive: [{
					breakpoint: 992,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 3
					}
				},
				{
					breakpoint: 768,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2
					}
				},
				{
					breakpoint: 481,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
			]
		});
	}
	teamCarousel();

	// Media popup
	function mediaPopup() {
		$('.gallery-popup').colorbox({
			rel: 'gallery-popup',
			transition: 'slideshow',
			innerHeight: '500'
		});
		$('.popup').colorbox({
			iframe: true,
			innerWidth: 600,
			innerHeight: 400
		});
	}
	mediaPopup();

})(jQuery);