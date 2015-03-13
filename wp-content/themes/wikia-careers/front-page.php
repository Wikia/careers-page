<?php //if ( dynamic_sidebar('home_main_widget') ) : else : endif; ?>

<section class="container job-offers padding-section-vertical">
	<div class="offers-paper">

		<?php if ( dynamic_sidebar('second_section_mainpage') ) : endif; ?>

	</div>
</section>


<section class="container-fluid stats padding-section-vertical">
	<div class="row">
		<div class="container">
			<div class="row">
				<h2 class="h1"><?php _e( 'By fans. For fans.' ); ?></h2>
				<div class="col-md-3 col-lg-3 number-col">
					<span class="number h2">108,718,176</span>
					<h3><?php _e( 'monthly visits', 'wikia-careers' ); ?></h3>
				</div>
				<div class="col-md-3 col-lg-3 number-col">
					<span class="number h2">33,052,302</span>
					<h3><?php _e( 'pages', 'wikia-careers' ); ?></h3>
				</div>
				<div class="col-md-3 col-lg-3 number-col">
					<span class="number h2">411,620</span>
					<h3><?php _e( 'communities', 'wikia-careers' ); ?></h3>
				</div>
				<div class="col-md-3 col-lg-3 number-col">
					<span class="number h2">371,351</span>
					<h3><?php _e( 'edits today', 'wikia-careers' ); ?></h3>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="container career-paths">
	<div class="row">

		<h2 class="h1">Meet our staff</h2>
		<div class="flexslider">
			<ul class="slides">
				<li data-thumb="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/'); ?>jakubo.jpg">
					<div class="col-lg-6 col-md-6 col-sm-3 col-xs-4 col-xxs-4 avatar"><img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/'); ?>jakubo.jpg" alt="jakubo" class="person-picture" /></div>
					<div class="col-lg-6 col-md-6 col-sm-3 col-xs-4 col-xxs-4 description">
						<h3 class="h1">Jakub</h3>
						<p><?php _e( 'Initially – a Wikia intern. Currently – our mobile solutions expert.', 'wikia-careers' ); ?></p>
						<a href="kariera/sciezki-rozwoju/jakub/" class="btn-wikia-gray-blue btn-arrow icon-chevron-gray">Poznaj</a>
					</div>
				</li>
				<li data-thumb="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/'); ?>federico.jpg">
					<div class="col-lg-6 col-md-6 col-sm-3 col-xs-4 col-xxs-4 avatar"><img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/'); ?>federico.jpg" alt="federico" class="person-picture" /></div>
					<div class="col-lg-6 col-md-6 col-sm-3 col-xs-4 col-xxs-4 description">
						<h3 class="h1">Federico</h3>
						<p><?php _e( 'Application architect and team builder', 'wikia-careers' ); ?></p>
						<a href="kariera/sciezki-rozwoju/federico/" class="btn-wikia-gray-blue btn-arrow icon-chevron-gray">Poznaj</a>
					</div>
				</li>
				<li data-thumb="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/'); ?>jakubk.jpg">
					<div class="col-lg-6 col-md-6 col-sm-3 col-xs-4 col-xxs-4 avatar"><img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/'); ?>jakubk.jpg" alt="jakubk" class="person-picture" /></div>
					<div class="col-lg-6 col-md-6 col-sm-3 col-xs-4 col-xxs-4 description">
						<h3 class="h1">Jakub</h3>
						<p><?php _e( 'An engineer with a business touch', 'wikia-careers' ); ?></p>
						<a href="kariera/sciezki-rozwoju/jakub-szeryf/" class="btn-wikia-gray-blue btn-arrow icon-chevron-gray">Poznaj</a>
					</div>
				</li>
			</ul>
		</div>

	</div>
</section>


<section class="benefits-description padding-section-vertical">
	<div class="container">
		<div class="row">
			<h2><?php _e( 'Working at Wikia is more than just work', 'wikia-careers' ); ?></h2>
			<div class="col-lg-offset-1 col-md-offset-1 col-lg-5 col-md-5 col-sm-3 col-xs-4 col-xxs-4 benefit-item">
				<img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/'); ?>benefits1.jpg" alt="Rozwój" />
				<h3><?php _e( 'Development at Wikia', 'wikia-careers' ); ?></h3>
				<p><?php _e( 'Wikia cares about your development – choose to attend two conferences a year and the company will cover your registration fees, as well as travel and accommodation costs.', 'wikia-careers' ); ?></p>
			</div>
			<div class="col-lg-5 col-md-5 col-sm-3 col-xs-4 col-xxs-4 benefit-item">
				<img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/'); ?>benefits2.jpg" alt="Rozwój" />
				<h3><?php _e( 'Travel to San Francisco', 'wikia-careers' ); ?></h3>
				<p><?php _e( 'Once a year you will get an opportunity to visit our headquarters in San Francisco.', 'wikia-careers' ); ?></p>
			</div>
			<div class="col-lg-offset-1 col-md-offset-1 col-lg-5 col-md-5 col-sm-3 col-xs-4 col-xxs-4 benefit-item">
				<img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/'); ?>benefits3.jpg" alt="Rozwój" />
				<h3><?php _e( 'Family', 'wikia-careers' ); ?></h3>
				<p><?php _e( 'Wikia organizes many social family events – picnics, parties, “Wikilias” (our Wikia Christmas parties) – we are family friendly.', 'wikia-careers' ); ?></p>
			</div>
			<div class="col-lg-5 col-md-5 col-sm-3 col-xs-4 col-xxs-4 benefit-item">
				<img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/'); ?>benefits4.jpg" alt="Rozwój" />
				<h3><?php _e( 'We care about you', 'wikia-careers' ); ?></h3>
				<p><?php _e( 'We care about your well-being at work – our pantry is always filled with nourishing and refreshing fruits, snacks, sweets and drinks.' , 'wikia-careers' ); ?></p>
			</div>
		</div>
	</div>
</section>

<section class="container-fluid join-us">
	<div class="row">
		<div class="col-xxs-4 col-xs-4 col-sm-6 col-md-12 col-lg-12">
			<h2 class="site-header-message h1"><?php _e( 'Ready to join us?', 'wikia-careers' ); ?></h2>
			<a href="<?php echo home_url(); ?>/kariera" class="btn-wikia-white btn-arrow">
				<?php _e( 'Check out who we\'re looking for', 'wikia-careers' ); ?></a>
		</div>
	</div>
</section>

<section class="container-fluid spaced-container quick-contact">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-xxs-4 col-xs-4 col-sm-2 col-md-4 col-lg-4">
					<h2><?php _e( 'Fill in the form and send your CV', 'wikia-careers' ); ?></h2>
<!--					<p>Aplikuj przez</p>-->
<!--					<a class="btn-wikia-regular btn-arrow icon-chevron-gray"><strong>LinkedIn</strong></a>-->
				</div>
				<div class="col-xxs-4 col-xs-4 col-sm-4 col-md-8 col-lg-8">

					<?php if ( dynamic_sidebar('quick_contact_form') )  : endif; ?>

				</div>
			</div>
		</div>
	</div>
</section>
