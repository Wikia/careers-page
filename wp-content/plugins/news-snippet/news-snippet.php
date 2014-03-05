<?php
/*
Plugin Name: News Snippet in Menu
Description: Plugin that automatically adds snippet to primary menu with latest news when enabled
Version: 0.1 beta
Author: Kamil Koterba
License: GPL
*/

if( !class_exists('NewsSnippet') ):

class NewsSnippet
{

	/*
	*  Constructor
	*
	*  This function will construct all the neccessary actions, filters and functions for the NewsSnippet plugin to work
	*
	*/
	
	function __construct()
	{
		// helpers
		add_filter( 'wp_nav_menu_items', array($this, 'add_news_snippet'), 'test', 10, 2 );

	}


	/*
	*  Menu items filter function
	*
	*  This function adds news snippet to primary navigation menu
	*
	*  @param	String $menu
	*  @param	Array $args
	*  @return	String
	*/
	function add_news_snippet( $menu, $args ) {

		if( $args->theme_location == 'primary_navigation' ) {
			$snippetHTML = $this->prepareSnippetHTML();
			$menu .= $snippetHTML;
		}

		return $menu;
	}


	function prepareSnippetHTML() {

		$htmlToReturn = '<ul class="news-snippet dropdown">';

		$args = array (
			'numberposts' => 3,
			'orderby' => 'post_date',
			'order' => 'DESC',
			'post_type' => 'post',
			'post_status' => 'publish',
			'suppress_filters' => true
		);

		// get posts
		$recent_posts = wp_get_recent_posts( $args, OBJECT );

		foreach($recent_posts as $post){

			$htmlToReturn .= '<li>';
			d(has_post_thumbnail( $post->ID ));
			if ( has_post_thumbnail( $post->ID ) ) {
				$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
				$htmlToReturn .= '<img src="'.$image[0].'" alt="'.$post->post_title.'"/>';
			}
			$htmlToReturn .= '<a href="'.get_permalink( $post->ID ).'">'.$post->post_title.'</a>';
			$htmlToReturn .= '<span class="date">'.$post->post_date.'</a>';
			$htmlToReturn .= '</li>';

		}
		$htmlToReturn .= '</ul>';

		return $htmlToReturn;
	}


}


function NewsSnippet() {
	global $newsSnippet;

	if( !isset($newsSnippet) )
	{
		$newsSnippet = new NewsSnippet();
	}

	return $newsSnippet;
}


// initialize
NewsSnippet();


endif; // class_exists check

?>
