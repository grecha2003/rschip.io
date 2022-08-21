
function click_update_cart_btn(upd_cart_btn) {
	 var upd_cart_btn = jQuery(".cart_item").parents('form').find('.cart_update');
	 upd_cart_btn.trigger('click');
}


jQuery('#cart_cart_field').addClass('hidden');
jQuery(document).ready(function () {
		if (getCookie('brand') !== null) {
			$('#cart_cart').val(getCookie('brand') + ' ' + getCookie('model') + ' ' +getCookie('modi'));
		}
	});
jQuery(document).ready(function($) {

	//this will remove bad class from select country


	var update_cart;
	jQuery(".qty").on("change", function(){

		if(update_cart != null){
			clearTimeout(update_cart);
		}

	});
});
var mapData = {
	mapStyles: [{ "featureType": "landscape.man_made", "elementType": "geometry", "stylers": [{ "hue": "#9300ff" }, { "saturation": "-59" }] }, { "featureType": "landscape.man_made", "elementType": "geometry.fill", "stylers": [{ "saturation": "-54" }, { "lightness": "4" }, { "gamma": "0.52" }, { "weight": "0.01" }, { "hue": "#9300ff" }] }, { "featureType": "landscape.man_made", "elementType": "geometry.stroke", "stylers": [{ "hue": "#ff0000" }] }, { "featureType": "landscape.man_made", "elementType": "labels.icon", "stylers": [{ "saturation": "48" }, { "lightness": "1" }, { "visibility": "off" }] }, { "featureType": "landscape.natural", "elementType": "geometry.fill", "stylers": [{ "visibility": "on" }, { "color": "#e9e9e9" }] }, { "featureType": "poi", "elementType": "geometry.fill", "stylers": [{ "visibility": "off" }, { "color": "#c0e8e8" }] }, { "featureType": "poi", "elementType": "labels", "stylers": [{ "visibility": "off" }] }, { "featureType": "poi", "elementType": "labels.icon", "stylers": [{ "visibility": "off" }] }, { "featureType": "poi.business", "elementType": "labels.icon", "stylers": [{ "visibility": "off" }] }, { "featureType": "poi.medical", "elementType": "labels.icon", "stylers": [{ "visibility": "off" }] }, { "featureType": "poi.park", "elementType": "geometry.fill", "stylers": [{ "color": "#e0f5e3" }] }, { "featureType": "poi.place_of_worship", "elementType": "labels.icon", "stylers": [{ "visibility": "off" }] }, { "featureType": "poi.school", "elementType": "labels.icon", "stylers": [{ "visibility": "off" }] }, { "featureType": "poi.sports_complex", "elementType": "labels.icon", "stylers": [{ "visibility": "off" }] }, { "featureType": "road", "elementType": "geometry", "stylers": [{ "lightness": 100 }, { "visibility": "simplified" }] }, { "featureType": "road", "elementType": "labels", "stylers": [{ "visibility": "on" }] }, { "featureType": "road.arterial", "elementType": "labels", "stylers": [{ "visibility": "on" }] }, { "featureType": "road.arterial", "elementType": "labels.text", "stylers": [{ "visibility": "on" }] }, { "featureType": "road.arterial", "elementType": "labels.icon", "stylers": [{ "visibility": "off" }] }, { "featureType": "road.local", "elementType": "labels", "stylers": [{ "visibility": "on" }] }, { "featureType": "road.local", "elementType": "labels.text", "stylers": [{ "visibility": "on" }] }, { "featureType": "road.local", "elementType": "labels.icon", "stylers": [{ "visibility": "off" }] }, { "featureType": "transit.line", "elementType": "geometry", "stylers": [{ "visibility": "on" }, { "lightness": 700 }] }, { "featureType": "transit.station.bus", "elementType": "labels.icon", "stylers": [{ "visibility": "off" }] }, { "featureType": "water", "elementType": "all", "stylers": [{ "color": "#89a3bb" }] }],
	apiKey: 'AIzaSyChB7e96Eq9FSTpa222X63OGe3q2NamOJ8'
};


//// this is a new increment +- function
jQuery( function( $ ) {

	//prepend class to input val
	$('.qty').addClass('js-num counter__input');
	$('.qty').attr('type','text');
	// Quantity buttons
	$( 'div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)' ).addClass( 'buttons_added counter' ).append( '<button type="button" value="+" class="plus js-plus counter__btn counter__btn_type_plus" ></button>' ).prepend( '<button type="button" value="-" class="minus js-minus counter__btn counter__btn_type_minus" ></button>' );

	$( document ).on( 'updated_cart_totals', function() {
		$( 'div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)' ).addClass( 'buttons_added counter' ).append( '<button type="button" value="+" class="plus js-plus counter__btn counter__btn_type_plus" ></button>' ).prepend( '<button type="button" value="-" class="minus js-minus counter__btn counter__btn_type_minus" ></button>' );
		$('.qty').addClass('js-num counter__input');
		$('.qty').attr('type','text');
	});

	$( document ).on( 'click', '.plus, .minus', function() {

		var $qty		= $( this ).closest( '.quantity' ).find( '.qty' ),
			currentVal	= parseFloat( $qty.val() ),
			max			= parseFloat( $qty.attr( 'max' ) ),
			min			= parseFloat( $qty.attr( 'min' ) ),
			step		= $qty.attr( 'step' );

		if ( ! currentVal || currentVal === '' || currentVal === 'NaN' ) currentVal = 0;
		if ( max === '' || max === 'NaN' ) max = '';
		if ( min === '' || min === 'NaN' ) min = 0;
		if ( step === 'any' || step === '' || step === undefined || parseFloat( step ) === 'NaN' ) step = 1;

		if ( $( this ).is( '.plus' ) ) {

			if ( max && ( max == currentVal || currentVal > max ) ) {
				$qty.val( max );

			} else {
				//$qty.val( currentVal + 1 );
				$qty.attr('value', (currentVal + 1) );
				update_cart = setTimeout(click_update_cart_btn, 500);
			}

		} else {
			if ( min && ( min == currentVal || currentVal < min ) ) {
				$qty.val( min );
			} else if ( currentVal > 0 ) {
				//$qty.val( currentVal - parseFloat( step ) );
				$qty.attr('value', (currentVal - 1) );
				update_cart = setTimeout(click_update_cart_btn, 500);
			}

		}
		$qty.trigger( 'change' );

	});

});

$(document).ready(function () {
	$('#user_country').prop({type:"hidden"});
	$('#pre_car').prop({type:"hidden"});
	$('#pre_model').prop({type:"hidden"});
	$('#pre_modification').prop({type:"hidden"});

	if ('objectFit' in document.documentElement.style === false) {
		$("[data-object-fit]").each((i, item)=>{
			let $t = $(item);
			let imgUrl = $t.attr('src');
			let fitStyle = $t.attr('data-object-fit');
			if (imgUrl) {
				$t.parent()
				.css({
					'backgroundImage': 'url(' + imgUrl + ')',
					'backgroundSize': fitStyle
				})
				.addClass('fit-img');
			}
		})
	}

	setRipples($('[data-ripple-color]'));

	// wow animations init
	if ($('.wrap-site').hasClass('wow-on') && $(window).width() >= 768) {
		new WOW().init();
	}

	fullWidthBlock();
	var fullWidthTimeout = 0;
	$(window).resize(function () {
		clearTimeout(fullWidthTimeout);
		fullWidthTimeout = setTimeout(function () {
			fullWidthBlock();
		}, 100);
	});

	$(document).on('click', '.menu-trigger', function () {
		$(this).toggleClass('active');
		$('body').toggleClass('nav-showed');
	});
	$(document).on('click', '.chat-widget__btn', function () {
		$(this).closest('.chat-widget').toggleClass('chat-widget_active');
	});
	// close on focus lost
	$(document).click(function (e) {
		var $trg = $(e.target);
		if (!$trg.closest(".header").length) {
			$('body').removeClass('nav-showed');
			$('.menu-trigger').removeClass('active');
		}
		if (!$trg.closest(".chat-widget").length) {
			$('.chat-widget').removeClass('chat-widget_active');
		}
	});

	$('.top-block__slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		infinite: true,
		dots: true,
		// lazyLoad: 'ondemand',
		arrows: false,
		fade: true,
		speed: 500,
		// autoplay: true,
		// autoplaySpeed: 4000,
		// pauseOnFocus: false,
		cssEase: 'linear'
	})

	// popups
	$('.ajax-popup').magnificPopup({
		type: 'ajax',
		removalDelay: 300,
		mainClass: 'mfp-fade',
		midClick: true
	});
	$('.inline-popup').magnificPopup({
		type: 'inline',
		mainClass: 'mfp-fade',
		midClick: true
	});
	$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false

	});
	$('.dyno-popups').magnificPopup({
		midClick: true,
		removalDelay: 300,
		mainClass: 'mfp-fade mfp-dyno',
		type: 'image',
		image: {
			markup: '<div class="mfp-figure dyno-popup">'+
						'<button class="popup-modal-dismiss dyno-popup__close-btn" type="button">Close<i class="dyno-popup__close-icon">✖</i></button>'+
						'<div class="mfp-title dyno-popup__title"></div>'+
						'<div class="dyno-popup__img-wrap"><div class="mfp-img"></div></div>'+
					'</div>'
		},
		delegate: '.popup-link',
		gallery: {
			enabled: true,
			arrowMarkup: '<button title="%title%" type="button" class="dyno-popup__btn popup-%dir%">'+
							'<span class="dyno-popup__btn-text"></span>'+
						'</button>',
		},
		callbacks: {
			buildControls: function() {
				this.contentContainer.find('.dyno-popup').append(this.arrowLeft.add(this.arrowRight));
			},
			open: function() {
				var href = this.currItem.el[0].hash;
				history.pushState(null, null, href);
			}
		}
	});
	(function(){
		var hash = window.location.hash,
		$link = $('a.popup-link[href="'+hash+'"]');
		if (hash && $link.length) {
			$link.click();
		}
	})();
	$(document).on('click', '.popup-modal-dismiss', function (e) {
		e.preventDefault();
		$.magnificPopup.close();
	});

	if ($(".shop-product__hidden-checkbox:checked").length) {
		// $('.w-product').toggleClass('show', true);
	}
	$(document).on('change', '.shop-product__hidden-checkbox', function () {
		var checked = $(".shop-product__hidden-checkbox:checked").length;

		//var $product_ = $(".shop-product__hidden-checkbox:checked").parent('.shop-product');

		var $notyfi = $('.w-product');
		var $site = $('body');
		if (checked) {
			//$(this).parent('.shop-product').find('.shop-product__btn').addClass('btn-orange');
			//console.log('added!');
			$notyfi.toggleClass('show', true);
			$site.toggleClass('notyfi-shown', true);
		} else {
			//$(this).parent('.shop-product').find('.shop-product__btn').removeClass('btn-orange');
			//console.log('removed!');
			$notyfi.toggleClass('show', false);
			$site.toggleClass('notyfi-shown', false);
		}
	});

	$(document).on('click', '.w-subscribe__close', function () {
		var $t = $(this);
		$t.parent().removeClass('show');
	});

	// selects init
	if ($('select[data-list-href]').length) {
		var $selectWithData = $('select[data-list-href]'),
		    listPath = $selectWithData.attr('data-list-href');
		$.getJSON(listPath, function (data) {
			var items = [];
			$.each(data, function (key, val) {
				$selectWithData.append($('<option>', {
					value: val.code,
					text: val.name
				}));
			});
		}).done(function () {
			$('.js-select').selectize();
		});
	} else {
		$('.js-select').selectize();
	}

	$(document).on('click', '.main-nav__item a', function (e) {
		var $t = $(this);
		// e.preventDefault();
		$t.parent().siblings().removeClass('current').end().parent().addClass('current');
	});

	$('.video__play-btn').click(function () {
		var $video = $(this).closest('.video').find('iframe');
		$video.attr('src', $video.attr('data-src'));
	});
	$('.video__close-btn').click(function () {
		var $video = $(this).closest('.video').find('iframe'),
		    src = $video.attr("data-src");
		$video.attr("src", "about:blank");
	});
	$(document).on('click', '.app__link a', function (e) {
		e.preventDefault();

		if ($(window).width() >= 768) {

			var $t = $(this),
			    $scrollTo = $($t.attr('href')),
			    offset = ($(window).height() - $('#appVideo').height()) / 2;
			$('html, body').animate({
				scrollTop: parseInt($scrollTo.offset().top - offset, 10)
			}, 200);

			$('#appVideo .video__play-btn').trigger('click');
		} else {
			window.location.href = $('#appVideo .video__link').attr('href');
		}
	});

	// cart steps panel
	$(document).on('click', '.order-steps__item', function (e) {
		if (!$(this).hasClass('visited')) {
			e.preventDefault();
		}
	});

	$('.scroll-to').scrollInView(30, 300);

	$.scrollUp({
		scrollName: 'scrollUp', // Element ID
		scrollDistance: 300, // Distance from top/bottom before showing element (px)
		scrollFrom: 'top', // 'top' or 'bottom'
		scrollSpeed: 300, // Speed back to top (ms)
		easingType: 'linear', // Scroll to top easing (see http://easings.net/)
		animation: 'fade', // Fade, slide, none
		animationSpeed: 200, // Animation speed (ms)
		scrollTrigger: false, // Set a custom triggering element. Can be an HTML string or jQuery object
		scrollTarget: false, // Set a custom target element for scrolling to. Can be element or number
		scrollText: false, // Text for element, can contain HTML
		scrollTitle: false, // Set a custom <a> title if required.
		scrollImg: false, // Set true to use image
		activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
		zIndex: 8 // Z-Index for the overlay
	});

	spoiler('.faq__question span', false);

	if (!$('#mapit').length == 0) {
		$('body').append('<script src="//maps.googleapis.com/maps/api/js?key='+mapData.apiKey+'&signed_in=true&callback=initContactsMap" async="" defer=""></script>');
	}

	// product tabs on mobile
	tabby();
});

$(window).load(function () {


	// scroll to product on index page
	showProduct('.rschip__img', 3000);
	// subscribe widget

	if(getCookie('subshowed') == null) {
		setTimeout(function () {
			$('.w-subscribe').addClass('show');
		}, 5000);
			$.cookie("subshowed", 'yes', { expires : 1 });
	}


});

function initContactsMap() {
	var mapOptions = {
		center: {
			lat: 34.757851,
			lng: -92.2554229
		},
		zoom: 13,
		scrollwheel: false,
		styles: mapData.mapStyles
	};
	var map = new google.maps.Map(document.getElementById('mapit'), mapOptions);

	var contentString = '' + '<div id="content">' + '<div>1201 East 5th Street North Little Rock, Arkansas USA, 72114</div>' + '</div>';

	var infowindow = new google.maps.InfoWindow({
		content: contentString
	});

	var marker = new google.maps.Marker({
		position: new google.maps.LatLng(34.757851, -92.2554229),
		map: map,
		title: "1201 East 5th Street North Little Rock, Arkansas USA, 72114"
	});
	marker.addListener('click', function () {
		infowindow.open(map, marker);
	});
}
//Ripple effect
function setRipples(el) {
	var $this = $(el),
	    ripple = '<div class="ripple"></div>';
	$this.prepend(ripple).addClass('has-ripple');

	var parent, ink, d, x, y, rippleColor;
	$(".ripple").click(function (e) {
		var $t = $(this);
		rippleColor = $t.parent().data('ripple-color');
		//create .ink element if it doesn't exist
		if ($t.find(".ink").length == 0) {
			$t.prepend('<span class="ink" style="background-color: ' + rippleColor + ';"></span>');
		}

		ink = $t.find(".ink");
		//incase of quick double clicks stop the previous animation
		ink.removeClass("animate");

		//set size of .ink
		if (!ink.height() && !ink.width()) {
			//use $t's width or height whichever is larger for the diameter to make a circle which can cover the entire element.
			d = Math.max($t.outerWidth(), $t.outerHeight());
			ink.css({ height: d, width: d });
		}

		//get click coordinates
		//logic = click coordinates relative to page - $t's position relative to page - half of self height/width to make it controllable from the center;
		x = e.pageX - $t.offset().left - ink.width() / 2;
		y = e.pageY - $t.offset().top - ink.height() / 2;

		//set the position and add class .animate
		ink.css({ top: y + 'px', left: x + 'px' }).addClass("animate");
	});
};

$.fn.scrollInView = function (offset, speed) {
	return $(this).click(function (e) {
		var $scrollTo = $($(this).attr('href'));
		var totalOffset = $('.header').outerHeight() + offset;
		e.preventDefault();
		$('html, body').animate({
			scrollTop: parseInt($scrollTo.offset().top - totalOffset, 10)
		}, speed);
	});
};

function fullWidthBlock() {
	var $elements = $('.full-width');
	$.each($elements, function (key, item) {
		var $el = $(this);
		if ($el.data('full-width-inited') !== "Y") {
			$el.after('<div class="full-width-calculate"></div>');
		}
		var $el_full = $el.next('.full-width-calculate');
		if ($el_full.length) {
			var el_margin_left = parseInt($el.css("margin-left"), 10),
			    el_margin_right = parseInt($el.css("margin-right"), 10),
			    offset = 0 - $el_full.offset().left - el_margin_left,
			    width = $(window).width();
			if ($el.css({
				position: "relative",
				left: offset,
				"box-sizing": "border-box",
				width: $(window).width()
			}), !$el.data("vcStretchContent")) {
				var padding = -1 * offset;
				0 > padding && (padding = 0);
				var paddingRight = width - padding - $el_full.width() + el_margin_left + el_margin_right;
				0 > paddingRight && (paddingRight = 0), $el.css({
					"padding-left": padding + "px",
					"padding-right": paddingRight + "px"
				});
			}
			$el.data("full-width-inited", "Y");
		}
	});
}

function spoiler(spoilerTitle, accordionTrue) {
	if ($(spoilerTitle).hasClass('active')) {
		$(spoilerTitle).parent().next().slideDown(0);
	};
	$(document).on('click', spoilerTitle, function (e) {
		var $t = $(this),
		    $parent = $t.parent(),
		    $parentClass = $parent.attr('class'),
		    $spoiler = $parent.next(),
		    $spoilerClass = $spoiler.attr('class');

		e.preventDefault();

		if (accordionTrue) {
			$('.' + $spoilerClass).slideUp(200);
		};

		if ($t.hasClass('active')) {
			$spoiler.slideUp(200);
			$parent.removeClass('active');
			$t.removeClass('active');
		} else {

			if (accordionTrue) {
				$(spoilerTitle).removeClass('active');
				$('.' + $parentClass).removeClass('active');
			} else {
				$parent.removeClass('active');
				$t.removeClass('active');
			}

			$parent.addClass('active');
			$t.addClass('active');
			$spoiler.slideDown(200);
		}
	});
}
function tabby() {
	var tabbyTimeout = null,
	    tabbyInit = false;

	$('.tabby-control *[data-tabby]').click(function () {
		var $t = $(this),
		    tabNum = $t.attr('data-tabby');
		if (!$t.hasClass('active') && tabbyInit) {
			$t.closest('.tabby-control').find('*[data-tabby]').removeClass('active');
			$t.addClass('active');

			$('.tabby-switcher').each(function () {
				$(this).find('*[data-tabby]').hide().end().find('*[data-tabby="' + tabNum + '"]').fadeIn(200);
			});
		}
	});
	if ($(window).width() < 768) {
		tabbyInit = true;
		$('.tabby-control *[data-tabby]').first().trigger('click');
	}

	$(window).resize(function () {
		clearTimeout(tabbyTimeout);
		tabbyTimeout = setTimeout(function () {
			if ($(window).width() < 768 && !tabbyInit) {
				tabbyInit = true;
				$('.tabby-control *[data-tabby]').first().trigger('click');
			}
		}, 100);
	});
}

function showProduct(selector, delay) {
	var $RSCHIP = $(selector);
	var offset = void 0;
	var offsetOnLoad = document.documentElement.scrollTop || document.body.scrollTop;
	var widgetHeigth = $('.w-subscribe').outerHeight();
	var $w = $(window);
	var $windowWidth = $w.width();
	if (!$RSCHIP.length || offsetOnLoad !== 0 || $windowWidth < 992) {
		return false;
	} else {
		offset = $RSCHIP.offset().top + $RSCHIP.outerHeight() + widgetHeigth - $w.height();
		setTimeout(function () {
			if (document.documentElement.scrollTop || document.body.scrollTop) {
				return false;
			}
			$('html, body').animate({
				scrollTop: parseInt(offset, 10)
			}, 800);
		}, delay);
	}
}

$(document).ready(function(){
      $('a[href^="#"]').bind("click", function(e){
          var anchor = $(this);
          // $('html, body').stop().animate({
          //     scrollTop: $(anchor.attr('href')).offset().top - +100
          // }, 800);
          e.preventDefault();
      });
      return false;
  });

/**
 * trade in section scripts
 */
(function () {
  var App = {
    init: function init() {
      // validate.validators.presence.message = ''
      this.initPolyfills();
      this.initFaqBlocks();
    },
    initFaqBlocks: function initFaqBlocks() {
      var selector = {
        ITEM: ".tradein-faq-item",
        ITEM_TRIGGER: ".tradein-faq-item__head",
        ITEM_BODY: ".tradein-faq-item__body",
        ITEM_CONTENT: ".tradein-faq-item__content"
      };
      var state = {
        ITEM_OPENED: "tradein-faq-item--opened"
      };
      var triggers = Array.prototype.slice.call(document.querySelectorAll(selector.ITEM_TRIGGER));

      var triggerClickHandler = function triggerClickHandler() {
        var accordion = this.closest(selector.ITEM);
        var accordionBody = accordion.querySelector(selector.ITEM_BODY);
        var height = accordion.querySelector(selector.ITEM_CONTENT).offsetHeight;

        if (accordion.hasClass(state.ITEM_OPENED)) {
          accordion.classList.remove(state.ITEM_OPENED);
          accordionBody.removeAttribute("style");
        } else {
          accordion.classList.add(state.ITEM_OPENED);
          accordionBody.style.height = "".concat(height, "px");
        }
      };

      triggers.forEach(function (trigger) {
        trigger.addEventListener("click", triggerClickHandler);
      });
    },

    /**
     * универсальная валидация для форм
     * @param {[type]} _ref [description]
     */
    WithValidation: function WithValidation(_ref) {
      var constraints = _ref.constraints,
          formSelector = _ref.formSelector,
          onSubmit = _ref.onSubmit;
      this.constraints = constraints; // Hook up the form so we can prevent it from being posted

      var form = document.querySelector(formSelector);

      if (!form) {
        console.log('WithValidation init failed, there is no such form element');
      }

      if (form.tagName.toUpperCase() !== 'FORM') {
      	form = form.closest('form')
      }

      this.form = form;

      var state = {
        ERROR: 'has-error',
        OK: 'is-ok'
      };
      form.addEventListener("submit", function (ev) {
        ev.preventDefault();
        handleFormSubmit(form);
      }); // Hook up the inputs to validate on the fly

      var inputs = Array.prototype.slice.call(form.querySelectorAll("input, textarea, select"));
      inputs.forEach(function (input) {
        input.addEventListener("change", inputListener);
      });

      function inputListener(ev) {
        var errors = validate(form, constraints) || {};
        showErrorsForInput(this, errors[this.name]);
      }

      function handleFormSubmit(form) {
        var errors = validate(form, constraints);
        showErrors(form, errors || {});

        if (!errors && typeof onSubmit === 'function') {
          onSubmit(form);
        }
      }

      function showErrors(form, errors) {
        // We loop through all the inputs and show the errors for that input
        var formControls = Array.prototype.slice.call(form.querySelectorAll("input[name], select[name]"));
        formControls.forEach(function (control) {
          showErrorsForInput(control, errors && errors[control.name]);
        });
      }

      function showErrorsForInput(input, errors) {
        var parent = input.parentNode;
        parent.classList.remove(state.ERROR);
        parent.classList.remove(state.OK);

        if (errors) {
          parent.classList.add(state.ERROR);
        } else {
          parent.classList.add(state.OK);
        }
      }
    },
    initPolyfills: function initPolyfills() {
      /**
       * closest polyfill
       */
      (function (ELEMENT) {
        ELEMENT.matches = ELEMENT.matches || ELEMENT.mozMatchesSelector || ELEMENT.msMatchesSelector || ELEMENT.oMatchesSelector || ELEMENT.webkitMatchesSelector;

        ELEMENT.closest = ELEMENT.closest || function closest(selector) {
          if (!this) return null;
          if (this.matches(selector)) return this;

          if (!this.parentElement) {
            return null;
          } else return this.parentElement.closest(selector);
        };
      })(Element.prototype);
      /**
       * polyfill for elem.hasClass
       */


      Element.prototype.hasClass = function (className) {
        return this.className && new RegExp("(^|\\s)" + className + "(\\s|$)").test(this.className);
      };
    }
  };
  window.WithValidation = App.WithValidation;
  document.addEventListener("DOMContentLoaded", function () {
    App.init();
  });
})();
/**
 * end of trade in section scripts
 */