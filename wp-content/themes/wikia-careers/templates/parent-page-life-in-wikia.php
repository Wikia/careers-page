<?php
/*
Template Name: Parent page Life in Wikia
*/

?>


<?php

/* Get list of direct subpages */

$pages = get_pages( array(
	'child_of' => get_the_ID(),
	'parent' => get_the_ID()
//	'sort_column' => $sort_column,
//	'sort_order' => $sort_order
) );


/* Show tabnav based on list of direct subpages */

$tab_nav_items = array();
$i = 0;

foreach ( $pages as $page ) {

	$activeAttr = ( $i == 0 ) ? ' class="active"' : '';
	$page_link = get_page_link( $page->ID );
	$post_title = $page->post_title;
	$post_name = $page->post_name;
	$content = apply_filters('the_content', $page->post_content);
	$tab_nav_items[] = '<li' . $activeAttr .'><a href="#' . $post_name . '" data-toggle="tab">' . $post_title . '</a></li>';
	$i++;

}

$HTML_ITEMS = implode( "\n", $tab_nav_items );

$HTML_TAB_BAR =<<<HTML
	<ul class="nav nav-tabs container spaced-container">
		$HTML_ITEMS
	</ul>
HTML;

echo $HTML_TAB_BAR;

?>



<?php

/* Show tabs based on list of direct subpages */


$tab_content_items = array();
$i = 0;

foreach ( $pages as $page ) {

	$activeAttrText = ( $i == 0 ) ? 'active' : '';
	$page_link = get_page_link( $page->ID );
	$post_title = $page->post_title;
	$post_name = $page->post_name;
	$content = apply_filters('the_content', $page->post_content);

				//show list of all subpages
	$sub_pages = get_pages( array(
		'child_of' =>  $page->ID,
		'parent' =>  $page->ID,
		'sort_column' => 'post_date',
		'sort_order' => 'ASC'
	) );
				$sub_pages_items = array();
				foreach ( $sub_pages as $sub_page ) {

					$sub_page_link = get_page_link( $sub_page->ID );
					$sub_post_title = $sub_page->post_title;
					$sub_post_excerpt = $sub_page->post_excerpt;
					$sub_content = apply_filters('the_content', $sub_page->post_content);

					$sub_thumb_link = wp_get_attachment_image_src( get_post_thumbnail_id( $sub_page->ID ), 'container-md-thumb' );
					$sub_thumb_link = $sub_thumb_link[0];

					$sub_pages_items[] = <<<HTML
					<div class="play-with-us-list-item">
						<div class="item-title" style="background-image: url('$sub_thumb_link')">
							<h3>$sub_post_title</h3>
						</div>
						<p class="item-description">
								$sub_post_excerpt
						</p>
						<a href="$sub_page_link" class="btn-wikia btn-arrow">Przeczytaj artykuł</a>
					</div>
HTML;

				}

	$HTML_SUB_PAGES_ITEMS = implode( "\n", $sub_pages_items );


	if ( get_post_meta( $page->ID, '_wp_page_template', true ) == 'templates/wide-img-narrow-p.php' ) {

		$tab_content_items[] = <<<HTML
	<section class="tab-pane wide-img-narrow-p regular-article $activeAttrText" id="$post_name">
		$content
		$HTML_SUB_PAGES_ITEMS
	</section>
HTML;

	} else {

		$tab_content_items[] = <<<HTML
	<section class="tab-pane container $activeAttrText" id="$post_name">
		$content
		$HTML_SUB_PAGES_ITEMS
	</section>
HTML;

	}


	$i++;

}

$HTML_ITEMS = implode( "\n", $tab_content_items );

$HTML_TABS =<<<HTML
	<div class="tab-content life-in-wikia">
		$HTML_ITEMS
	</div>
HTML;

echo $HTML_TABS;

?>





<?php include new Roots_Wrapping('templates/career-paths-section.php'); ?>

<?php include new Roots_Wrapping('templates/contact-section.php'); ?>