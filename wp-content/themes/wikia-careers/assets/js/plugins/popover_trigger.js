/**
 * Manual trigger for Bootstrap popover.
 * Shows up on hover and freezes on click
 * @module popoverTrigger
 */
var popoverTrigger = (function($) {
	'use strict';

	var popoverOptions = {
		html:true,
		trigger: 'manual'
		},
		$popoverElement = $("[data-toggle=popover]");

	// Init popover
	var setupPopover = function() {
		$popoverElement
			.data('state', 'hover')
			.popover(popoverOptions)
			.on('mouseenter', enterShow)
			.on('mouseleave', exitHide)
			.on('click', clickToggle);
	};

	/**
	 * Show popover if it's in hover state
	 */
	var enterShow = function () {
		if ($(this).data('state') === 'hover') {
			var _this = this;
			$(_this).popover("show");
			// Setup hide on popover leave
			$(this).siblings(".popover").on("mouseleave", function () {
				if ($(_this).data('state') === 'hover') {
					$(_this).popover('hide');
				}
			});
		}
	};

	/**
	 * Hide popover if it's in hover state
	 */
	var exitHide = function () {
		if ($(this).data('state') === 'hover') {
			var _this = this;
			setTimeout(function () {
				if (!$(".popover:hover").length) {
					$(_this).popover("hide");
				}
			}, 100);
		}
	};

	/**
	 * Change state on click
	 * hover state allows to show and hide
	 * pinned state blocks hiding until clicked again
	 */
	var clickToggle = function () {
		if ($(this).data('state') === 'hover') {
			var _this = this;
			// Force show on click
			$(_this).popover("show");
			// Block hover actions
			$(this).data('state', 'pinned');
		} else {
			// Allow hover actions
			$(this).data('state', 'hover');
		}
	};

	return {
		setupPopover : setupPopover
	};


})(jQuery);
