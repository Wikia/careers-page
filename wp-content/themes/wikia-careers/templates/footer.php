
<section class="container-fluid spaced-container news-feed">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-xxs-4 col-xs-4 col-sm-6 col-md-12 col-lg-12">
					<h2>Wikia news</h2>
				</div>
			</div>

			<div class="row">
				<div class="col-xxs-4 col-xs-4 col-sm-3 col-md-6 col-lg-6">
					<div class="news-item" style="background-image: url('<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/'); ?>news1.jpg')">
						<div class="dim-xs-min">
							<div class="col-xxs-4 col-xs-4 col-sm-6 col-md-12 col-lg-12">
								<h3>I'm a good eye catchy title for news and artiles</h3>
								<span class="post-date">Posted: <span class="date">9 March 2014</span></span>
								<span class="post-author">Written by: <img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/'); ?>nandy-avatar.jpg" alt="" class="img-circle" /></span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xxs-4 col-xs-4 col-sm-3 col-md-6 col-lg-6">
					<div class="news-item" style="background-image: url('<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/'); ?>news2.jpg')">
						<div class="dim-xs-min">
							<div class="col-xxs-4 col-xs-4 col-sm-6 col-md-12 col-lg-12">
								<h3>I'm a good eye catchy title for news and artiles</h3>
								<span class="post-date">Posted: <span class="date">9 March 2014</span></span>
								<span class="post-author">Written by: <img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/'); ?>andrzej-avatar.jpg" alt="" class="img-circle" /></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="container-fluid stats contact-for-help spaced-container">
	<div class="row">
		<h2>Got question or need help?</h2>
		<button class="btn-wikia-white btn-envelope"><span>Send e-mail</span></button>
	</div>
</section>
<!--<footer class="content-info container" role="contentinfo">-->
<!--  <div class="row">-->
<!--    <div class="col-lg-12">-->
<!--		--><?php
//		$pages = get_pages(array(
//		'meta_key' => '_wp_page_template',
//		'meta_value' => 'templates/footer-data.php',
//		'number' => 1
//		));
//		foreach( $pages as $page ) {
//			echo $page->post_title.'<br />';
//			the_field('email_address', $page->ID);
//			the_field('post_address', $page->ID);
//			the_field('telephone_number', $page->ID);
//			the_field('facebook_link', $page->ID);
//			the_field('github_link', $page->ID);
//		}
//		?>
<!--      --><?php //dynamic_sidebar('sidebar-footer'); ?>
<!--      <p>&copy; --><?php //echo date('Y'); ?><!-- --><?php //bloginfo('name'); ?><!--</p>-->
<!--    </div>-->
<!--  </div>-->
<!--</footer>-->

<footer class="container-fluid footer spaced-container">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-xxs-4 col-xs-4 col-sm-6 col-md-3 col-lg-3">
					<a class="logo image-logo" href="<?php echo home_url(); ?>/" rel='home'>

					</a>
				</div>
				<div class="col-xxs-4 col-xs-4 col-sm-6 col-md-9 col-lg-9">
					<div class="footer-nav">
						<ul class="social-icons">
							<li><a href="https://www.facebook.com/wikiapl" class="icon-fb-icon"></a></li>
							<li><a href="https://github.com/Wikia/" class="icon-github-icon"></a></li>
						</ul>
						<ul class="text-links">
							<li><a href="">Welcome</a></li>
							<li><a href="">Life in Wikia</a></li>
							<li><a href="">Recruitment</a></li>
						</ul>

					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<div id="preloadedImages"></div>
<?php wp_footer(); ?>
