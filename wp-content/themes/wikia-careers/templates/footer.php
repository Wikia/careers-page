<section class="container-fluid spaced-container news-feed">
	<div class="row">
		<div class="container">
			<h2>Wikia news</h2>

			<div class="row">
				<div class="col-xxs-4 col-xs-4 col-sm-3 col-md-6 col-lg-6 news-item-container">
					<img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/'); ?>news1.jpg" alt="News 1" />
					<h3>I’m a good eye catchy title for news and articles and other interesting stuff.</h3>
					<span class="post-date">Posted: <span class="date">9 March 2014</span></span>
				</div>
				<div class="col-xxs-4 col-xs-4 col-sm-3 col-md-6 col-lg-6 news-item-container">
					<img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/'); ?>news2.jpg" alt="News 2" />
					<h3>I’m a good eye catchy title for news and articles and other interesting stuff.</h3>
					<span class="post-date">Posted: <span class="date">9 March 2014</span></span>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="container-fluid stats contact-for-help spaced-container">
	<div class="row">
		<h2>Got question or need help?</h2>
		<a href="mailto:hr-pl@wikia-inc.com" class="btn-wikia-white btn-envelope">Send e-mail</a>
	</div>
</section>

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

<?php wp_footer(); ?>
