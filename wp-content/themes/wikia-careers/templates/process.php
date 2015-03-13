<?php
/**
 * Template Name: Process
 */
?>

<?php include new Roots_Wrapping('templates/career-paths-parent-menu.php');?>

<div class="tab-content">

<?php while (have_posts()) : the_post(); ?>

	<article class="container spaced-container padding-section-vertical process">
		<div class="row">
			<div class="col-xxs-4 col-xs-4 col-sm-6 col-md-12 col-lg-10 col-lg-offset-1">
				<?php the_content(); ?>
			</div>
		</div>
	</article>

	<?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>

<?php endwhile; ?>

</div>

