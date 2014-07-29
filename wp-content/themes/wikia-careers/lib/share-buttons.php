<?php

class ShareButtons {

	static function get_share_buttons() {
		$permalink =  urlencode( get_permalink() );
		$title = urlencode ( get_post_field('post_title', get_the_ID(), 'raw') );
		$shareButtonsHtml = '';
		$shareButtonsHtml .= self::get_facebook_share_button( $permalink );
		$shareButtonsHtml .= self::get_linkedin_share_button( $permalink, $title );
		$shareButtonsHtml .= self::get_twitter_share_button( $permalink, $title );

		$shareButtonsHtml = <<<HTML
<div class="share-wrapper">
	<div class="share-icons-row">
		$shareButtonsHtml
	</div>
</div>
HTML;

		return $shareButtonsHtml;
	}


	static function get_facebook_share_button( $url ) {
		return '<a href="http://www.facebook.com/sharer.php?u=' . $url . '" class="icon-fb-icon-gray_light" target="_blank">&nbsp;</a>';
	}

	static function get_linkedin_share_button( $url, $title ) {
		return '<a href="https://www.linkedin.com/shareArticle?summary=&url=' . $url . '&title=' . $title . '" class="icon-linkedin-gray_light" target="_blank">&nbsp;</a>';
	}

	static function get_twitter_share_button( $url, $text ) {
		return '<a href="https://twitter.com/intent/tweet?url=' . $url . '&text=' . $text . '&hashtags=karierawikia" class="icon-twitter-gray_light" target="_blank">&nbsp;</a>';
	}

}
