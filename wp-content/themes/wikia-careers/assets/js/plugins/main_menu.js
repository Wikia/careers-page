/**
 * Toggle show and hide main menu for smaller resolutions
 * @module mainMenu
 */
var mainMenu = (function($) {
	'use strict';

	// Initiates click event on mobile menu button
	var initClickEvent = function() {
		$('.navigation .menu-button').click(showMenuToggle);
	};


	var showMenuToggle = function() {
		var $navWrapper = $('.navigation .nav-animation-wrapper'),
			windowHeight = $( window ).height();
		$navWrapper.toggleClass('active').height(windowHeight);
	};

	return {
		initClickEvent : initClickEvent
	}

})(jQuery);
