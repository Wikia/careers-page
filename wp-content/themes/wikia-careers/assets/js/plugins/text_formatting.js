/**
 * Removes paragraphs and links from images in articles
 * @module wikiaCareersTextFormatting
 */
var wikiaCareersTextFormatting = (function($) {
	'use strict';

	// public function to start formatting
	var formatArticle = function() {

		// for images wraped in a tags
		$('.regular-article a img').unwrap('p');

		//for images wraped in just p tags
		$('.regular-article img').unwrap('p');

	};

	return {
		formatArticle : formatArticle
	};

})(jQuery);
