<?php // navigation section ?>
<section class="navigation-top-container container-fluid">
	<div class="row">
		<div class="navigation container-fluid spaced-container">
				<div class="nav-wrapper">
					<div class="nav-animation-wrapper">
						<nav class="collapse navbar-collapse" role="navigation">
							<?php
							if (has_nav_menu('primary_navigation')) :
								wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
							endif;
							?>
						</nav>
					</div>
				</div>
				<div class="menu-button menu-icon">
				</div>
				<!-- logo -->
				<a class="logo image-logo icon-wikia-logo" href="<?php echo home_url(); ?>/" rel='home'></a>
		</div>
	</div>
</section>

<?php if ( is_front_page() ) :
// main page banner ?>

<?php if ( get_header_image() ) :
	$background_style = "style=\"background-image:url('".get_header_image()."')\"";
endif; ?>

<div id="site-header" <?php echo $background_style; ?> class="container-fluid site-header post-header">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 col-sm-6 col-xs-4 col-xxs-4">
			<div class="middled">
			<?php if ( get_theme_mod( 'wikia_careers_header_desc' ) ) : ?>
				<!-- header background message -->
				<h1 class="site-header-message"><?php echo get_theme_mod( 'wikia_careers_header_desc' ); ?></h1>
			<?php endif; ?>
			<?php if ( get_theme_mod( 'wikia_careers_header_desc_sub' ) ) : ?>
				<!-- header background message -->
				<p class="site-header-sub-message"><?php echo get_theme_mod( 'wikia_careers_header_desc_sub' ); ?></p>
			<?php endif; ?>
			<?php if ( get_theme_mod( 'wikia_careers_header_button' ) ) : ?>
				<!-- header background message -->
			<?php endif; ?>
				<a href="<?php echo home_url(); ?>/kariera" class="btn-wikia-white btn-arrow"><?php echo get_theme_mod( 'wikia_careers_header_button' ); ?></a>
				<button class="scroll-down icon-chevron-double-white"></button>
			</div>
		</div>
	</div>
</div>


<?php else:

	// Default banner
	$post_header_subtitle = '';
	$background_style = '';

	// Classes for header
	$header_class = array();

	// Default data for header
	if( is_404() ) { // 404 page
		$post_header_title = translate('Sorry, but the page you were trying to view does not exist.', 'roots');
		$posts_page_id = 0;
	} elseif( is_home() ) { // News list page
		$posts_page_id = get_option( 'page_for_posts' );
		$post = get_post( $posts_page_id ); // Set global post
		$post_header_title = get_the_title();
	} else { // Other
		$posts_page_id = get_the_ID();
		$post_header_title = get_the_title();
	}

	// Set custom fields
	if($posts_page_id) {
		$custom_fields = get_post_custom( $posts_page_id );
		$post_header_title = isset($custom_fields['post_title']) ? $custom_fields['post_title'][0] : $post_header_title;
		$post_header_subtitle = isset($custom_fields['post_subtitle']) ? $custom_fields['post_subtitle'][0] : '';
	}

	// Get link to post featured image if one exists
	$post_thumb_id = get_post_thumbnail_id( $posts_page_id, 'full' );

	// Post has featured image
	if ($post_thumb_id) {
		$post_thumb_link = wp_get_attachment_image_src( $post_thumb_id, 'container-md-thumb' );
		$post_thumb_link = $post_thumb_link[0];
		if (has_full_height_banner()) {
			$header_class[] = 'post-header';
		}
		$background_style = "style=\"background-image:url('$post_thumb_link')\"";

		// Career path template
		if (  get_post_meta( $wp_query->post->ID, '_wp_page_template', true ) == 'templates/career-path.php' ) {
			$post_thumb_id = get_post_thumbnail_id( $post->post_parent, 'full' );
			$post_thumb_link = wp_get_attachment_image_src( $post_thumb_id, 'container-md-thumb' );
			$post_thumb_link = $post_thumb_link[0];
			$header_class[] = 'career-path-header';
			$background_style = "style=\"background-image:url('$post_thumb_link')\"";
			$post_header_title = get_the_title( $post->post_parent );
		}

	} else {
		$header_class[] = 'job-offer-header';
	}

?>

<div id="site-header" class="container-fluid site-header <?php echo implode( ' ', $header_class ); ?>" <?php echo $background_style; ?>">
	<div class="row">
		<div class="col-xxs-4 col-xs-4 col-sm-6 col-md-8 col-md-offset-2">
			<div class="middled">
				<h1 class="site-header-message"><?php echo $post_header_title ?></h1>
				<p class="site-header-sub-message"><?php echo $post_header_subtitle ?></p>
				<button class="scroll-down icon-chevron-double-white"></button>
			</div>
		</div>
	</div>
</div>


<?php endif; ?>
