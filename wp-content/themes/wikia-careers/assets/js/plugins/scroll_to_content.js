/**
 * Handles scroll to content part of page
 * @module scrollToContent
 */
var scrollToContent = (function($) {
	'use strict';

	// Initiates click events
	var initClickEvent = function() {
		// Click on active tab
		$('.nav-tabs .active').click(doTheScroll);
		// Click on skip banner button
		$('#site-header .scroll-down').click(skipBannerScroll);
	};

	var doTheScroll = function(e) {
		e.preventDefault();
		var elementClicked =$(this);
		var navHeight = ($(".navigation-top-container").height());
		var destination = $(elementClicked).offset().top;
		$("html:not(:animated),body:not(:animated)").animate({ scrollTop: destination - navHeight}, 500);
	};

	var skipBannerScroll = function(e) {
		var bottom = $('#site-header').position().top+$('#site-header').outerHeight(true);
		var navHeight = ($(".navigation-top-container").height());
		$("html:not(:animated),body:not(:animated)").animate({ scrollTop: bottom - navHeight}, 500);
	};

	return {
		initClickEvent : initClickEvent
	};

})(jQuery);
