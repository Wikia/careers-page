
var menu = {};
var stats = {};
(function($) {

	/**
	 * Mobile menu toggle show
	 */
	menu.initClickEvent = function() {
		$('.navigation .menu-button').click(
			function() {
				var menuHeight;
				menuHeight = $( window ).height() - $('.navigation').height();
				$('.navigation .nav-animation-wrapper').toggleClass('active').height( menuHeight );
				$(this).toggleClass('active');
			}
		);
	};


	/**
	 * Animate the element's value from 0 to number hold by element
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
	 * @param number
	 * @returns string
	 */
	stats.commaSeparateNumber = function(val){
		while (/(\d+)(\d{3})/.test(val.toString())){
			val = val.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
		}
		return val;
	};

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


	// Watch for appearance of .stats
	$(window).scroll(function(event) {

		$(".stats").each(function(i, el) {
			el = $(el);
			if (el.visible(true)) {

				$(window).unbind( "scroll" );

				// Run number animation
				$( ".stats .number" ).each(function() {
					stats.animateNumber( $( this ) );
				});

			}
		});

	});


})(jQuery); // Fully reference jQuery after this point.




