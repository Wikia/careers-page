<?php get_template_part('templates/page', 'header'); ?>

	<div class="alert alert-warning">
		<?php _e('Sorry, no results to show.', 'wikia-careers'); ?>
	</div>

	<p><?php _e('Look into list of caregories:', 'wikia-careers'); ?></p>

<?php wp_list_categories( $args ); ?>
