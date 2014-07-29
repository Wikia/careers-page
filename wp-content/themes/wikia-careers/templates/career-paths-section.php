<?php

$featured_page = get_page_by_path('kariera/sciezki-rozwoju/jakub/');


//$pagees = get_pages(array(
//	'meta_key' => '_wp_page_template',
//	'meta_value' => 'templates/career-path.php',
////	'sort_column' => 'post_date',
////	'sort_order' => 'ASC',
////	'number' => 1
//));

//$job_offers_parent = get_pages( array(
//	'meta_key' => '_wp_page_template',
//	'meta_value' => 'templates/parent-page.php',
//	'sort_column' => 'post_date',
//	'sort_order' => 'ASC'
//) );
//d($job_offers_parent);
//// Query looks fine right?
//$query = new WP_Query(array(
//	'meta_key' => '_wp_page_template',
//	'meta_value' => 'templates/career-path.php'
//));
//// Dump the id (also tried just getting the object with get_queried_object(), still get null)
//echo '<pre>'; var_dump($query->get_queried_object_id()); die();

//	d($pagees);
//exit;
//if ( !empty($pages)) {
//	$path_page = $pages[0];
	$img_link = wp_get_attachment_image_src( get_post_thumbnail_id( $featured_page->ID ), 'full' );
	$img_link = isset($img_link[0]) ? $img_link[0] : '';
//	$sub_page_link = get_page_link( $path_page->ID );
//}
//foreach($pages as $page){
//echo $page->post_title.'<br />';
//}
//d($featured_page);
?>
<section class="career-paths-short container spaced-container">
	<div class="row">
		<div class="col-xxs-4 col-xs-4 col-sm-6 col-md-5 col-lg-4 avatar">
			<img src="<?php echo $img_link ?>" alt="<?php echo $featured_page->post_title ?> Avatar" class="person-picture" />
		</div>
		<div class="col-xxs-4 col-xs-4 col-sm-6 col-md-7 col-lg-7 description">
			<h2><?php echo $featured_page->post_title ?></h2>
			<p><?php echo $featured_page->post_excerpt ?></p>
			<a href="<?php echo  get_page_link($featured_page->ID) ?>" class="btn-wikia-regular btn-arrow icon-chevron-gray">Zobacz jego ścieżkę</a>
		</div>
	</div>
</section>
