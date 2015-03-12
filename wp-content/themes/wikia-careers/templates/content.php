<?php
/**
 * Template for single post excerpt used to show list of latest news
 */
?>
<article <?php post_class(); ?>>
	<div class="play-with-us-list-item">
		<header class="item-title" style="background-image: url('<?php echo $sub_thumb_link ?>')">
			<h3><?php the_title(); ?></h3>
		</header>
		<p class="item-description">
			<?php the_excerpt(); ?>
		</p>
		<a href="<?php the_permalink(); ?>" class="btn-wikia btn-arrow icon-chevron-brand_pri">
			<?php _e( 'Read more', 'wikia-careers' ); ?>
		</a>
	</div>
</article>
