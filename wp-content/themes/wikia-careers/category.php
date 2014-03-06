
<?php
wp_list_categories( $args );

get_template_part('templates/page', 'header');

?>

<?php if ( have_posts() ) : ?>

			<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the post format-specific template for the content. If you want to
				 * use this in a child theme, then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */

				get_template_part('templates/content', get_post_format());


			endwhile;

			// Previous/next page navigation.
			show_paging_nav();

		else :
			// If no content, include the "No posts found" template.
			get_template_part( 'templates/content', 'none' );

endif;
?>