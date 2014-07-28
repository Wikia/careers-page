<?php
if( is_front_page() ):
	include new Roots_Wrapping('templates/news-feed-section.php');
endif;
?>

<?php include new Roots_Wrapping('templates/contact-section.php'); ?>

<footer class="container-fluid footer spaced-container">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-xxs-4 col-xs-4 col-sm-6 col-md-3 col-lg-3">
					<a class="logo image-logo icon-wikia-logo-white" href="<?php echo home_url(); ?>/" rel='home'>

					</a>
				</div>
				<div class="col-xxs-4 col-xs-4 col-sm-6 col-md-9 col-lg-9">
					<div class="footer-nav">
						<ul class="social-icons">
							<li><a href="https://www.facebook.com/wikiapl" class="icon-fb-icon-white"></a></li>
							<li><a href="https://github.com/Wikia/" class="icon-github-icon-white"></a></li>
						</ul>
						<?php
						if (has_nav_menu('primary_navigation')) :
							wp_nav_menu(array('theme_location' => 'footer_navigation', 'menu_class' => 'text-links'));
						endif;
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
