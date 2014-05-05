'use strict';
/**
 * @module mainMenu
 */

/**
 * Holder for menu functions
 * @type {object}
 */
var menu = {};

(function($) {

	/** Initiates click event on mobile menu button */
	menu.initClickEvent = function() {
		$('.navigation .menu-button').click(
			function() {
				var $navWrapper = $('.navigation .nav-animation-wrapper'),
					windowHeight = $( window ).height();
				$navWrapper.toggleClass('active').height(windowHeight);
			}
		);
	};

})(jQuery);
