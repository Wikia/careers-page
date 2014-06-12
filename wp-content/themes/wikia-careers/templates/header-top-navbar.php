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
							<a href="http://wikia.com/" class="btn-wikia-light btn-arrow">Zobacz wikia.com</a>
						</nav>
					</div>
				</div>
				<div class="menu-button menu-icon">
				</div>
				<!-- logo -->
				<!--
					<?php if ( get_theme_mod( 'wikia_careers_logo' ) ) : ?>
						<a class="logo image-logo" href="<?php echo home_url(); ?>/" rel='home'><img src='<?php echo esc_url( get_theme_mod( 'wikia_careers_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
					<?php else : ?>
						<a class="logo" href="<?php echo home_url(); ?>/" title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a>
					<?php endif; ?>
					-->
				<a class="logo image-logo" href="<?php echo home_url(); ?>/" rel='home'></a>

		</div>
	</div>



</section>

<?php if ( is_front_page() ) : ?>

	<?php if ( get_header_image() ) : ?>
		<!-- header background image -->
		<div id="site-header" style="background-image:url('<?php header_image(); ?>')" class="container-fluid site-header">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
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
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>

<?php elseif ( isset( $wp_query->post ) && get_post_meta( $wp_query->post->ID, '_wp_page_template', true ) == 'templates/parent-page.php' ): ?>
		<!-- header background image -->
		<div id="site-header" style="background-image:url('<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/'); ?>recruitment-banner.jpg')" class="container-fluid site-header list-page-header">
			<div class="row">
				<div class="col-xs-4 col-sm-6 col-md-8 col-md-offset-2">
					<div class="middled">
					<!-- header background message -->
					<h1 class="site-header-message">Podejmij wyzwanie Wikia</h1>
					<p class="site-header-sub-message">Kariera w Wikia</p>
					</div>
				</div>
			</div>
		</div>

<?php elseif ( isset( $wp_query->post ) && get_post_meta( $wp_query->post->ID, '_wp_page_template', true ) == 'templates/parent-page-life-in-wikia.php' ): ?>
		<!-- header background image -->
		<div id="site-header" style="background-image:url('<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/'); ?>fandom-banner.jpg')" class="container-fluid site-header list-page-header">
			<div class="row">
				<div class="col-xs-4 col-sm-6 col-md-8 col-md-offset-2">
					<div class="middled">
					<!-- header background message -->
					<h1 class="site-header-message">Podejmij wyzwanie Wikia</h1>
					<p class="site-header-sub-message">Kariera w Wikia</p>
					</div>
				</div>
			</div>
		</div>

<?php else: ?>

	<?php

	// Default data for header
	if( is_404() ) { // 404 page
		$post_header_title = translate('Sorry, but the page you were trying to view does not exist.', 'roots');
		$posts_page_id = 0;
	} elseif( is_home() ) { // News list page
		$posts_page_id = get_option( 'page_for_posts' );
		$post = get_post( $posts_page_id );
		$post_header_title = $post->post_title;
	} else { // Other
		$post_header_title = get_the_title();
		$posts_page_id = get_the_ID();
	}
	$custom_fields = get_post_custom( $posts_page_id );
	$post_header_message = isset($custom_fields['post_subtitle']) ? $custom_fields['post_subtitle'][0] : '';

	// Get link to post featured image if one exists
	$post_thumb_id = get_post_thumbnail_id( $posts_page_id, 'full' );

	// Post has featured image
	if ($post_thumb_id) {
		$post_thumb_link = wp_get_attachment_image_src( $post_thumb_id, 'container-md-thumb' );
		$post_thumb_link = $post_thumb_link[0];
		$header_class = 'post-header';
		$background_style = "style=\"background-image:url('$post_thumb_link')\"";

		// Career path template
		if (  get_post_meta( $wp_query->post->ID, '_wp_page_template', true ) == 'templates/career-path.php' ) {
			$post_thumb_id = get_post_thumbnail_id( $post->post_parent, 'full' );
			$post_thumb_link = wp_get_attachment_image_src( $post_thumb_id, 'container-md-thumb' );
			$post_thumb_link = $post_thumb_link[0];
			$header_class = 'career-path-header';
			$background_style = "style=\"background-image:url('$post_thumb_link')\"";
			$post_header_title = "Ścieżki rozwoju";
			$post_header_message = '';
		}

	} else {
		$header_class = 'job-offer-header';
		$background_style = '';
	}

	?>

		<!-- header background image -->
		<div id="site-header" class="container-fluid site-header <?php echo $header_class; ?>" <?php echo $background_style; ?>">
			<div class="row">
				<div class="col-xs-4 col-sm-6 col-md-8 col-md-offset-2">
					<div class="middled">
					<!-- header background message -->
					<h1 class="site-header-message"><?php echo $post_header_title ?></h1>
					<p class="site-header-sub-message"><?php echo $post_header_message ?></p>
					</div>
				</div>
			</div>
		</div>


<?php endif; ?>
