<?php
/**
 * Template for single post
 */
?>
<div class="nav-bar-under-banner-post">
	<div class="container">
		<div class="row">
			<div class="col-xxs-2 col-xs-2 col-sm-3 col-md-6 col-lg-5 col-lg-offset-1">
				<?php if ( get_option('page_for_posts' ) ) : ?>
					<a href="<?php  echo get_permalink( get_option('page_for_posts' ) ); ?>" class="go-back">Powrót do listy aktualności</a>
				<?php endif; ?>
			</div>
			<div class="col-xxs-2 col-xs-2 col-sm-3 col-md-6 col-lg-5">
				<!-- placeholder for share icon -->
			</div>
		</div>
	</div>
</div>

<?php while (have_posts()) : the_post(); ?>


	<article class="container spaced-container regular-article">
		<div class="row">
			<div class="col-xxs-4 col-xs-4 col-sm-6 col-md-12 col-lg-10 col-lg-offset-1">
				<?php the_content(); ?>
			</div>
		</div>
	</article>

	<?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>

<?php endwhile; ?>