<?php
/*
Template Name: First child redirect
*/

$pages = get_pages( array(
	'child_of' =>  get_the_ID(),
	'parent' =>  get_the_ID(),
	'sort_column' => 'post_date',
	'sort_order' => 'ASC',
	'number' => 1
) );

if ( !empty($pages) ) {
	$page_link = get_page_link( $pages[0]->ID );
	header("Location: $page_link");
	exit;
}
?>
