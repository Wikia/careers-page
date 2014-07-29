<?php

$featured_page = get_page_by_path('kariera/sciezki-rozwoju/jakub/');

$img_link = wp_get_attachment_image_src( get_post_thumbnail_id( $featured_page->ID ), 'full' );
$img_link = isset($img_link[0]) ? $img_link[0] : '';

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
