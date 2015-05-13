<?php

class ShareButtons {

	static function get_share_buttons() {
    $permalink = add_query_arg ( array( 'gh_jid' => $_GET['gh_jid'] ), get_permalink() );
    $permalink = urlencode( $permalink );
    $title = urlencode ( get_post_field('post_title', get_the_ID(), 'raw') );
		$shareButtons = array();
		$shareButtons[] = self::get_facebook_share_button( $permalink );
		$shareButtons[] = self::get_linkedin_share_button( $permalink, $title );
		$shareButtons[] = self::get_twitter_share_button( $permalink, $title );

		return $shareButtons;
	}

	static function get_facebook_share_button( $url ) {
		return array(
			'url' => 'http://www.facebook.com/sharer.php?u=' . $url,
			'class' => 'icon-fb-icon-gray_light'
		);
	}

	static function get_linkedin_share_button( $url, $title ) {
		return array(
			'url' => 'https://www.linkedin.com/shareArticle?summary=&url=' . $url . '&title=' . $title,
			'class' => 'icon-linkedin-gray_light'
		);
	}

	static function get_twitter_share_button( $url, $text ) {
		return array(
			'url' => 'https://twitter.com/intent/tweet?url=' . $url . '&text=' . $text . '&hashtags=karierawikia',
			'class' => 'icon-twitter-gray_light'
		);
	}

}
