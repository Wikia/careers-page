
var menu = {};
(function($) {

	menu.initClickEvent = function() {
		$('.navigation .menu-button').click(
			function() {
				$('.navigation .nav-animation-wrapper').toggleClass('active').height($( document ).height());
			}
		);
//		$( window ).resize(function() {
//			$('.navigation .nav-animation-wrapper').height($( document ).height());
//		});
	};

})(jQuery); // Fully reference jQuery after this point.
