<?php while (have_posts()) : the_post(); ?>

	<?php

	// Prepare link to root parent page
	if ( $post->post_parent ) {
		$parent_title = get_the_title($post->post_parent);
		$parent = get_page_by_title($parent_title);
		$parent_link = get_page_link($parent->ID);
	}

	?>

	<div class="nav-bar-under-banner-post">
		<div class="container">
			<div class="row">
				<div class="col-xxs-2 col-xs-2 col-sm-3 col-md-6 col-lg-5 col-lg-offset-1">
					<?php if ($post->post_parent) : ?>
						<a href="<?php echo $parent_link; ?>" class="go-back icon-arrow-left-gray">Powrót do <?php echo $parent_title; ?></a>
					<?php endif; ?>
				</div>
				<div class="col-xxs-2 col-xs-2 col-sm-3 col-md-6 col-lg-5">
					<?php echo ShareButtons::get_share_buttons(); ?>
				</div>
			</div>
		</div>
	</div>

	<article class="container spaced-container regular-article">
		<div class="row">
			<div class="col-xxs-4 col-xs-4 col-sm-6 col-md-12 col-lg-10 col-lg-offset-1">
				<?php the_content(); ?>
			</div>
		</div>
	</article>

  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>
