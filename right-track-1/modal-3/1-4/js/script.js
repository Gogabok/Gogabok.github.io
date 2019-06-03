$(document).ready(function () {
	 $('.banner-slider-thumb-item').click(function (e) {
	 	e.preventDefault();
	$('#modalWindow').arcticmodal();
});

	$('.banner-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: false,
		infinite: true,
		draggable: false,
		fade: true,
		cssEase: 'linear',
		asNavFor: '.banner-slider-thumb',
		prevArrow: $('.banner-slider-wrap .slider-navigation .slick-prev'),
		nextArrow: $('.banner-slider-wrap .slider-navigation .slick-next'),
	});

	$('.banner-slider-thumb').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		asNavFor: '.banner-slider',
		focusOnSelect: true,
		infinite: true,
		prevArrow: $('.banner-slider-thumb-wrap .slider-navigation .slick-prev'),
		nextArrow: $('.banner-slider-thumb-wrap .slider-navigation .slick-next'),
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
				}
    },
			{
				breakpoint: 993,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
    },
			{
				breakpoint: 768,
				settings: {
					centerMode: true,
					centerPadding: '60px',
					slidesToShow: 2,
					slidesToScroll: 1,
					arrows: false
				}
    },
			{
				breakpoint: 550,
				settings: {
					centerPadding: '40px',
					slidesToShow: 1,
					centerMode: true,
					slidesToScroll: 1
				}
    }
  ]
	});


	$('.slider-1').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		focusOnSelect: true,
		infinite: true,
		prevArrow: $('.slider-1-wrap .slider-navigation .slick-prev'),
		nextArrow: $('.slider-1-wrap .slider-navigation .slick-next'),
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
				}
    },
			{
				breakpoint: 993,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
    },
			{
				breakpoint: 768,
				settings: {
					centerMode: true,
					centerPadding: '60px',
					slidesToShow: 2,
					slidesToScroll: 1,
					arrows: false
				}
    },
			{
				breakpoint: 550,
				settings: {
					centerPadding: '40px',
					slidesToShow: 1,
					centerMode: true,
					slidesToScroll: 1
				}
    }
  ]
	});

	$('.slider-2').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		focusOnSelect: true,
		infinite: true,
		prevArrow: $('.slider-2-wrap .slider-navigation .slick-prev'),
		nextArrow: $('.slider-2-wrap .slider-navigation .slick-next'),
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
				}
    },
			{
				breakpoint: 993,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
    },
			{
				breakpoint: 768,
				settings: {
					centerMode: true,
					centerPadding: '60px',
					slidesToShow: 2,
					slidesToScroll: 1,
					arrows: false
				}
    },
			{
				breakpoint: 550,
				settings: {
					centerPadding: '40px',
					slidesToShow: 1,
					centerMode: true,
					slidesToScroll: 1
				}
    }
  ]
	});

	$('.slider-3').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		focusOnSelect: true,
		infinite: true,
		prevArrow: $('.slider-3-wrap .slider-navigation .slick-prev'),
		nextArrow: $('.slider-3-wrap .slider-navigation .slick-next'),
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
				}
    },
			{
				breakpoint: 993,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
    },
			{
				breakpoint: 768,
				settings: {
					centerMode: true,
					centerPadding: '60px',
					slidesToShow: 2,
					slidesToScroll: 1,
					arrows: false
				}
    },
			{
				breakpoint: 550,
				settings: {
					centerPadding: '40px',
					slidesToShow: 1,
					centerMode: true,
					slidesToScroll: 1
				}
    }
  ]
	});

	$('.slider-4').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		focusOnSelect: true,
		infinite: true,
		prevArrow: $('.slider-4-wrap .slider-navigation .slick-prev'),
		nextArrow: $('.slider-4-wrap .slider-navigation .slick-next'),
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
				}
    },
			{
				breakpoint: 993,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
    },
			{
				breakpoint: 768,
				settings: {
					centerMode: true,
					centerPadding: '60px',
					slidesToShow: 2,
					slidesToScroll: 1,
					arrows: false
				}
    },
			{
				breakpoint: 550,
				settings: {
					centerPadding: '40px',
					slidesToShow: 1,
					centerMode: true,
					slidesToScroll: 1
				}
    }
  ]
	});

	$('.slider-5').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		focusOnSelect: true,
		infinite: true,
		prevArrow: $('.slider-5-wrap .slider-navigation .slick-prev'),
		nextArrow: $('.slider-5-wrap .slider-navigation .slick-next'),
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
				}
    },
			{
				breakpoint: 993,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
    },
			{
				breakpoint: 768,
				settings: {
					centerMode: true,
					centerPadding: '60px',
					slidesToShow: 2,
					slidesToScroll: 1,
					arrows: false
				}
    },
			{
				breakpoint: 550,
				settings: {
					centerPadding: '40px',
					slidesToShow: 1,
					centerMode: true,
					slidesToScroll: 1
				}
    }
  ]
	});

	$('.banner-slider-thumbs').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		focusOnSelect: false,
		infinite: true,
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
				}
    },
			{
				breakpoint: 993,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
    },
			{
				breakpoint: 768,
				settings: {
					centerMode: true,
					centerPadding: '40px',
					slidesToShow: 2,
					slidesToScroll: 1,
					arrows: true
				}
    },
			{
				breakpoint: 550,
				settings: {
					centerPadding: '40px',
					slidesToShow: 1,
					centerMode: true,
					slidesToScroll: 1
				}
    }
  ]
	});

	$('.button_container').click(function () {
		$(this).toggleClass('active');
		$('#overlay').toggleClass('open');
		$("html").toggleClass("overflow");
	});



});