<section class="navigation-top-container container-fluid">
	<div class="row">
		<div class="navigation">
				<div class="nav-wrapper">
					<div class="nav-animation-wrapper">
						<nav class="collapse navbar-collapse" role="navigation">
							<ul id="menu-primary-navigation" class="nav navbar-nav">
								<li>
									<a href="#home">Witaj</a>
								</li>
								<li>
									<a href="#zycie-w-wikia">Życie w Wikia</a>
								</li>
								<li>
									<a href="http://kariera.wikia.com/?p=6">Kariera</a>
								</li>
							</ul>
							<?php
							//if (has_nav_menu('primary_navigation')) :
							//endif;
							//wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
							?>
							<a href="http://wikia.com/" class="btn-wikia-light btn-arrow"><span>Zobacz wikia.com</span></a>
						</nav>
					</div>
				</div>
				<div class="menu-button menu-icon">
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 width="30px" height="24px" viewBox="0 0 30 24" enable-background="new 0 0 30 24" xml:space="preserve">
						<path d="M29.948,4H-0.076V0h30.024V4z"/>
						<path d="M29.948,14H-0.076v-4h30.024V14z"/>
						<path d="M29.948,24H-0.076v-4h30.024V24z"/>
					</svg>
				</div>
				<!-- logo -->
				<!--
					<?php if ( get_theme_mod( 'wikia_careers_logo' ) ) : ?>
						<a class="logo image-logo" href="<?php echo home_url(); ?>/" rel='home'><img src='<?php echo esc_url( get_theme_mod( 'wikia_careers_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
					<?php else : ?>
						<a class="logo" href="<?php echo home_url(); ?>/" title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a>
					<?php endif; ?>
					-->
				<a class="logo image-logo" href="<?php echo home_url(); ?>/" rel='home'><img src='<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/wikia-logo.svg'></a>

		</div>
	</div>





</section>
<?php if ( get_header_image() ) : ?>
	<!-- header background image -->
	<div id="site-header" style="background-image:url('<?php header_image(); ?>')" class="container-fluid site-header">
<!--	<div id="site-header" style="background-image:url('http://kariera.wikia.com/wp-content/uploads/2014/04/wikia-team1.jpg')" class="container-fluid site-header">-->
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
				<div class="btn-wikia-white btn-arrow"><span><?php echo get_theme_mod( 'wikia_careers_header_button' ); ?></span></div>
				</div>
			</div>
		</div>
	</div>
	<a href="" class="btn-wikia">Test button</a>
<?php endif; ?>