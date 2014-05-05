'use strict';

/**
 * Holder for stats functions
 * @type {object}
 */
var stats = {};

(function($) {

	/** Init stats watcher */
	stats.initWatcher = function() {
		$(window).bind("scroll.stats.watchStatsAppearance",stats.watchStatsAppearance);
	};

	/** Watch for appearance of .stats */
	stats.watchStatsAppearance = function(event) {
		$(".stats").each(function(i, el) {
			el = $(el);
			if (el.visible(true)) {

				$(window).unbind( ".stats.watchStatsAppearance" );

				// Run number animation
				$( ".stats .number" ).each(function() {
					stats.animateNumber( $( this ) );
				});

			}
		});
	};


	/**
	 * Animate the element's value from 0 to number hold by element
	 * @param {number} numberEl - End value of number.
	 */
	stats.animateNumber = function( numberEl ) {
		var number = numberEl.text();
		number = number.replace(/,/g, ""); // remove all occurrences of comma
		$({someValue: 0}).animate({someValue: number}, {
			duration: Math.floor((Math.random()*1000)+2000),
			easing:'swing', // can be anything
			step: function() { // called on every step
				// Update the element's text with rounded-up value:
				numberEl.text(stats.commaSeparateNumber(Math.round(this.someValue)));
			}
		});
	};


	/**
	 * Format a number - separate thousands with commas
	 * @param {number} val
	 * @returns {string}
	 */
	stats.commaSeparateNumber = function(val) {
		var
			/** @desc test if has more than 3 digits together */
			pattTest = new RegExp("(\\d+)(\\d{3})"),
			/** @desc match every thousand digit eg. 12345678900 will match 8, 5 and 2 */
			pattReplace = new RegExp("(\\d)(?=(\\d\\d\\d)+(?!\\d))", "g");
		val = val.toString();
		if (pattTest.test(val)) {
			val = val.replace(pattReplace, "$1,");
		}
		return val;
	};


	/**
	 * Check if element is visible on the screen
	 * @param {boolean} partial Make functions to check if element is partially visible on the screen
	 * @returns {boolean}
	 */
	$.fn.visible = function(partial) {

		var $t            = $(this),
			$w            = $(window),
			viewTop       = $w.scrollTop(),
			viewBottom    = viewTop + $w.height(),
			_top          = $t.offset().top,
			_bottom       = _top + $t.height(),
			compareTop    = partial === true ? _bottom : _top,
			compareBottom = partial === true ? _top : _bottom;

		return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

	};


})(jQuery);
