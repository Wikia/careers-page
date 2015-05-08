/**
 * Loads greenhouse jobs board into #grnhse_app div
 * @module greenhouseJobs
 */
var greenhouseJobs = (function($) {
	'use strict';

	var init = function() {
		$.ajax({
			url: 'https://boards.greenhouse.io/embed/job_board/js?for=wikia',
			dataType: "script",
			success: function(){
				Grnhse.Settings.scrollOnLoad = false;
				Grnhse.Iframe.load();
				$('.tab-content .ajax-loader').slideUp();
			}
		});
	};

	return {
		init : init
	};

})(jQuery);
