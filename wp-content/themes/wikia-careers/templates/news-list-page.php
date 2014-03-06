<?php
/*
Template Name: News list template
*/

wp_list_categories( $args );

?>


<section id="news-list">
<?php

$args = array (
	'numberposts' => 0,
	'orderby' => 'post_date',
	'order' => 'DESC',
	'post_type' => 'post',
	'post_status' => 'publish',
	'suppress_filters' => true
);

// get posts
$recent_posts = wp_get_recent_posts( $args, OBJECT );

foreach ($recent_posts as $post) {
?>
<div class="news-item">
	<?php
	if ( has_post_thumbnail( $post->ID ) ) {
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
		?>
		<img src="<?= $image[0] ?>" alt="<?= $post->post_title?>"/>
	<?php
	}
	?>
	<h2><a href="<?= get_permalink( $post->ID ) ?>"><?= $post->post_title ?></a></h2>
	<span class="date"><?= $post->post_date ?></span>
	<p class="excerpt"><?= get_excerpt_by_id($post->ID); ?></p>
</div>
<?php
}
?>

</section>