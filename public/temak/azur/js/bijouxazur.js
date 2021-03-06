$(document).ready(function () {


    $('.menu').click(function() {

        if ($('.header').hasClass('nav-active')) {
			$('.header').removeClass('nav-active');
			return false;
		}

        if ($('.header').hasClass('search-active')) {
			$('.header').removeClass('search-active');
            $('.header').addClass('nav-active');
			return false;
		}

		else {
			$('.header').addClass('nav-active');
			return false;
		}

    });

    $('.search-icon').click(function() {

        if ($('.header').hasClass('search-active')) {
			$('.header').removeClass('search-active');
			return false;
		}

        if ($('.header').hasClass('nav-active')) {
			$('.header').removeClass('nav-active');
            $('.header').addClass('search-active');
			return false;
		}

		else {
			$('.header').addClass('search-active');
			return false;
		}

    });


    // esc --> close menu & search dropdowns
	$(document).on('keyup',function(evt) {
	    if (evt.keyCode == 27) {
	    	$('.header').removeClass('nav-active');
            $('.header').removeClass('search-active');
            $('.popup').css("display","none");
	    }
	});

    // click anywhere to close nav dropdowns & popup
	$(document).on('click', function (e) {

		if ((!$(e.target).closest('.header').length)) {
			$('.header').removeClass('nav-active');
            $('.header').removeClass('search-active');
		}

        if ((!$(e.target).closest('.popup-inner').length)) {
			$('.popup').css("display","none");
		}

	});

    // nav & nav-icon dropdown close
	$('.close').click(function() {
		$('header').removeClass('nav-active');
        $('header').removeClass('search-active');
		return false;
	});

    // popup close
	$('.popup-close').click(function() {
		$('.popup').css("display","none");
		return false;
	});

    // main-banner
	$('.main-banner').slick({
		dots: true,
		arrows: true,
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
  		autoplaySpeed: 6000,
        responsive: [
		    {
		      breakpoint: 1200,
		      settings: {
		        arrows: false
		      }
		    }
		  ]
  	});

    // homepage product slider
	$('.product-slider').slick({
		dots: false,
		arrows: true,
		infinite: true,
		slidesToShow: 5,
		slidesToScroll: 1,
		autoplay: false,
		responsive: [
		    {
		      breakpoint: 1200,
		      settings: {
		        slidesToShow: 4,
		        slidesToScroll: 1
		      }
		    },
		    {
		      breakpoint: 960,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 1
		      }
		    },
            {
		      breakpoint: 768,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 1
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		  ]
  	});

    // add-to-favs
	$('.add-to-favs').click(function() {
		$(this).parent().toggleClass('favorite');
		return false;
	});


    // open-close filter boxes
	$('.filter-title').click(function() {

		if ($(this).parent().hasClass('filter-active')) {
			$(this).parent().children('.filter-content').slideUp(150);
			$(this).parent().removeClass('filter-active');
		}

		else {
			$(this).parent().children('.filter-content').slideDown(150);
			$(this).parent().addClass('filter-active');
		}

	});


    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });

    $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        asNavFor: '.slider-for',
        focusOnSelect: true
    });


    // Fancybox call & options
	$().fancybox({
	    selector : '[data-fancybox]',
		buttons: [
	        "zoom",
	        //"share",
	        //"slideShow",
	        //"fullScreen",
	        //"download",
	        //"thumbs",
	        "close"
	    ]
	});



    // open-close checkout-cart-mini
	$('.checkout-cart-title').click(function() {

		if ($(this).parent().hasClass('checkout-cart-active')) {
			$(this).parent().children('.checkout-cart-content').slideUp(150);
			$(this).parent().removeClass('checkout-cart-active');
		}

		else {
			$(this).parent().children('.checkout-cart-content').slideDown(150);
			$(this).parent().addClass('checkout-cart-active');
		}

	});

    // input not empty check
	$('.input-container input').blur(function() {

	    if (!$(this).val() == '') {
	        $(this).parent().addClass('not-empty');
	    }

		else {
			$(this).parent().removeClass('not-empty');
		}
	});


    /*

	// search input not empty check
	$('.search input').keyup(function() {

	    if (!$('.search input').val() == '') {
	        $('.search').addClass('not-empty');
	    }

		else {
			$('.search').removeClass('not-empty');
		}
	});

	// if search input focused
	$('.search input').focusin(function() {
		$('.search').addClass('search-active');
		$('.header').addClass('header-active');
		$('.nav-icon').removeClass('dropdown-active');
		$('nav .has-child').removeClass('dropdown-active');
		return false;
	});


    // input not empty check
	$('.input-container input').blur(function() {

	    if (!$(this).val() == '') {
	        $(this).parent().addClass('not-empty');
	    }

		else {
			$(this).parent().removeClass('not-empty');
		}
	});

    */

});

// Bind to the resize event of the window object
$(window).on("resize", function () {
	if ($(window).width() < 960) {
		$('.filter').removeClass('filter-active');
		$('.filter-content').css("display","none");
	}
// Invoke the resize event immediately
}).resize();
