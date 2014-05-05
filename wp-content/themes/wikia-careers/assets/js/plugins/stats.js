/**
 * Watches for stats section appearance and runs numbers animations
 * @module statsAnimation
 */
var statsAnimation = (function($) {
	'use strict';

	// Init stats watcher
	var initWatcher = function() {
		var throttledWatch = $.throttle(50, watchStatsAppearance);
		$(window).bind("scroll.watchStatsAppearance", throttledWatch);
	};


	// Watch for appearance of stats section
	var watchStatsAppearance = function(event) {

		$(".stats").each(function(i, el) {
			el = $(el);
			if (visible(el, true)) {

				$(window).unbind( ".watchStatsAppearance" );

				// Run number animation
				$( ".stats .number" ).each(function() {
					animateNumber( $( this ) );
				});

			}
		});
	};


	/**
	 * Animate the element's value from 0 to number hold by element
	 * @param {number} numberEl - End value of number.
	 */
	var animateNumber = function( numberEl ) {
		var number = numberEl.text();
		number = number.replace(/,/g, ""); // remove all occurrences of comma
		$({someValue: 0}).animate({someValue: number}, {
			duration: Math.floor((Math.random()*1000)+2000),
			easing:'swing', // can be anything
			step: function() { // called on every step
				// Update the element's text with rounded-up value:
				numberEl.text(commaSeparateNumber(Math.round(this.someValue)));
			}
		});
	};


	/**
	 * Format a number - separate thousands with commas
	 * @param {number} val
	 * @returns {string}
	 */
	var commaSeparateNumber = function(val) {
		// Test if has more than 3 digits together
		var pattTest = new RegExp("(\\d+)(\\d{3})"),
			// Match every thousand digit eg. 12345678900 will match 8, 5 and 2
			pattReplace = new RegExp("(\\d)(?=(\\d\\d\\d)+(?!\\d))", "g");
		val = val.toString();
		if (pattTest.test(val)) {
			val = val.replace(pattReplace, "$1,");
		}
		return val;
	};


	/**
	 * Check if element is visible on the screen
	 * @param {object} jQuery object that visibility is being checked
	 * @param {boolean} partial Make functions to check if element is partially visible on the screen
	 * @returns {boolean}
	 */
	var visible = function($el, partial) {

		var $w            = $(window),
			viewTop       = $w.scrollTop(),
			viewBottom    = viewTop + $w.height(),
			_top          = $el.offset().top,
			_bottom       = _top + $el.height(),
			compareTop    = partial === true ? _bottom : _top,
			compareBottom = partial === true ? _top : _bottom;

		return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

	};


	return {
		initWatcher : initWatcher
	};


})(jQuery);
