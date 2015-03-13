<?php get_template_part('templates/page', 'header'); ?>

<div class="life-in-wikia tab-content padding-section-vertical">
<section>
	<?php
	$posts_page_id = get_option( 'page_for_posts' );
	$post = get_post( $posts_page_id );
	$content = $post->post_content;
	$content = apply_filters('the_content', $content);
	$content = str_replace(']]>', ']]&gt;', $content);
	echo $content;
	?>
	<section class="tab-pane container  active">
	<?php if (!have_posts()) : ?>
	<div class="alert alert-warning">
		<?php _e('Sorry, no results were found.', 'roots'); ?>
	</div>
	<?php endif;

	while (have_posts()) : the_post();

	$sub_page_link = get_page_link( $post->ID );
	$sub_post_title = $post->post_title;
	$sub_post_excerpt = $post->post_excerpt;
	$sub_content = apply_filters('the_content', $post->post_content);

	$sub_thumb_link = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'container-md-thumb' );
	$sub_thumb_link = $sub_thumb_link[0];
	?>

		<div class="play-with-us-list-item">
			<div class="item-title" style="background-image: url('<?php echo $sub_thumb_link ?>')">
				<h3 class="h1"><?php echo $sub_post_title ?></h3>
			</div>
			<p class="item-description">
				<?php echo $sub_post_excerpt ?>
			</p>
			<a href="<?php echo $sub_page_link ?>" class="btn-wikia btn-arrow icon-chevron-brand_pri">
				<?php _e( 'Read more', 'wikia-careers' ); ?>
			</a>
		</div>

	<?php endwhile; ?>
</section>

<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav container spaced-container">
    <ul class="pager">
      <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
      <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
    </ul>
  </nav>
<?php endif; ?>

</section>
</div>
