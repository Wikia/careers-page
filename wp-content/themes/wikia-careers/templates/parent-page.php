<?php
/*
Template Name: Parent page template
*/

//show list of all subpages
$pages = get_pages("child_of=".get_the_ID()."&sort_column={$sort_column}&sort_order={$sort_order}" );
foreach ( $pages as $page ) {

	$page_link = get_page_link( $page->ID );
	$post_title = $page->post_title;

	$HTML =<<<HTML
	<h2><a href="$page_link">$post_title</a></h2>
HTML;

	echo $HTML;

}
