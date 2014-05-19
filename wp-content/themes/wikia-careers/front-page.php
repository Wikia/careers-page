<?php //if ( dynamic_sidebar('home_main_widget') ) : else : endif; ?>

<section class="container job-offers">
	<div class="row">
		<div class="col-xs-4 col-sm-6 col-md-4 col-lg-4 page-item-47">
			<h2>Advertising Software Engineer</h2>
			<p>We're striving to understand not only this world, but also every fictional world, game setting and movie universe. That's a lot of data to handle. </p>
			<div class="btn-container"><a href="advertising-software-engineer" class="btn-wikia btn-arrow">Poczytaj więcej</a></div>
		</div>
		<div class="col-xs-4 col-sm-6 col-md-4 col-lg-4 page-item-19">
			<h2>Technical Operations Team Leader</h2>
			<p>Wikia is running one of the most visited websites in the US, the go-to destination for information about anything you're passionate about.</p>
			<div class="btn-container"><a href="technical-operations-team-leader" class="btn-wikia btn-arrow">Poczytaj więcej</a></div>
		</div>
		<div class="col-xs-4 col-sm-6 col-md-4 col-lg-4 page-item-13">
			<h2>Mobile Web Developer</h2>
			<p>As the mobile web grows, Wikia grows with it, and with an ever-growing portion of our users going mobile we push.</p>
			<div class="btn-container"><a href="" class="btn-wikia btn-arrow">Poczytaj więcej</a></div>
		</div>
	</div>
</section>


<section class="container-fluid stats">
	<div class="row">
		<div class="container">
			<div class="row">
				<h2>For Fans, by Fans</h2>
				<div class="col-md-3 col-lg-3 number-col">
					<span class="number">108,718,176</span>
					<h3>Monthly visitors</h3>
				</div>
				<div class="col-md-3 col-lg-3 number-col">
					<span class="number">33,052,302</span>
					<h3>Total pages</h3>
				</div>
				<div class="col-md-3 col-lg-3 number-col">
					<span class="number">411,620</span>
					<h3>Total communities</h3>
				</div>
				<div class="col-md-3 col-lg-3 number-col">
					<span class="number">371,351</span>
					<h3>Changes today</h3>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="container career-paths">
	<div class="row">

		<h2>Meet our coworkers</h2>
		<div class="flexslider">
			<ul class="slides">
				<li data-thumb="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/'); ?>jakubo.jpg">
					<div class="col-lg-6 col-md-6 col-sm-3 col-xs-4 col-xxs-4"><img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/'); ?>jakubo.jpg" alt="jakubo" class="person-picture" /></div>
					<div class="col-lg-6 col-md-6 col-sm-3 col-xs-4 col-xxs-4">
						<h3>Jakub</h3>
						<p>Knows how to get along with people. Lorem ipsum dolor sit amet, conse ctetur adipisicing elit, sed do dolores eos qui ratione voluptatem.</p>
						<a href="" class="btn-wikia-gray-blue btn-arrow">See his path</a>
					</div>
				</li>
				<li data-thumb="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/'); ?>federico.jpg">
					<div class="col-lg-6 col-md-6 col-sm-3 col-xs-4 col-xxs-4"><img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/'); ?>federico.jpg" alt="federico" class="person-picture" /></div>
					<div class="col-lg-6 col-md-6 col-sm-3 col-xs-4 col-xxs-4">
						<h3>Federico</h3>
						<p>Knows how to get along with people. Lorem ipsum dolor sit amet, conse ctetur adipisicing elit, sed do dolores eos qui  sed do dolores eos qui ratione voluptatem.</p>
						<a href="" class="btn-wikia-gray-blue btn-arrow">See his path</a>
					</div>
				</li>
				<li data-thumb="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/'); ?>jakubk.jpg">
					<div class="col-lg-6 col-md-6 col-sm-3 col-xs-4 col-xxs-4"><img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/'); ?>jakubk.jpg" alt="jakubk" class="person-picture" /></div>
					<div class="col-lg-6 col-md-6 col-sm-3 col-xs-4 col-xxs-4">
						<h3>Jakub</h3>
						<p>Knows how to get along with people. Conse ctetur adipisicing elit, sed do dolores eos qui ratione voluptatem.</p>
						<a href="" class="btn-wikia-gray-blue btn-arrow">See his path</a>
					</div>
				</li>
			</ul>
		</div>

		<script>
			$(document).ready(function(){
				$('.flexslider').flexslider({
					animation: "slide",
					controlNav: "thumbnails",
					nextText: '',
					prevText: '',
					slideshow: false,
					start: function(slider){
						$('body').removeClass('loading');
					}
				});
			});
		</script>



	</div>
</section>


<section class="benefits-description">
	<div class="container">
		<div class="row">
			<h2>Korzyści z pracy w Wikia</h2>
			<div class="col-lg-offset-1 col-md-offset-1 col-lg-5 col-md-5 col-sm-3 col-xs-4 col-xxs-4 benefit-item">
				<img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/'); ?>benefits1.jpg" alt="Rozwój" />
				<h3>Rozwój w Wikia</h3>
				<p>	Wikia dba o Twój rozwój - wybierz dwie konferencje w ciągu roku, a firma sfinansuje Twoje w niej uczestnictwo, przejazd i zakwaterowanie.</p>
			</div>
			<div class="col-lg-5 col-md-5 col-sm-3 col-xs-4 col-xxs-4 benefit-item">
				<img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/'); ?>benefits2.jpg" alt="Rozwój" />
				<h3>Wyjazd do San Francisco</h3>
				<p>Raz w roku wybierzesz się z nami do San Francisco - w odwiedziny do naszego biura macierzystego.</p>
			</div>
			<div class="col-lg-offset-1 col-md-offset-1 col-lg-5 col-md-5 col-sm-3 col-xs-4 col-xxs-4 benefit-item">
				<img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/'); ?>benefits3.jpg" alt="Rozwój" />
				<h3>Rodzina</h3>
				<p>Wikia organizuje wiele eventów rodzinnych - pikniki, imprezy, "wikilie" - jesteśmy family friendly.</p>
			</div>
			<div class="col-lg-5 col-md-5 col-sm-3 col-xs-4 col-xxs-4 benefit-item">
				<img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/'); ?>benefits4.jpg" alt="Rozwój" />
				<h3>Dbamy o Ciebie</h3>
				<p>W trakcie pracy dbamy o Twoje sampoczucie - w naszej zawsze pełnej spiżarni znajdziesz owoce, przekąski, słodycze, napoje, by się pożywić i orzeźwić.</p>
			</div>
		</div>
	</div>
</section>

<section class="container-fluid join-us">
	<div class="row">
		<div class="col-sm-6 col-lg-12">
		<div class="middled">
			<h2 class="site-header-message">Are you ready to join?</h2>
			<div class="btn-wikia-white btn-arrow">View our current openings</div>
		</div>
		</div>
	</div>
</section>

<section class="container-fluid spaced-container quick-contact">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-xxs-4 col-xs-4 col-sm-2 col-md-4 col-lg-4">
					<h2>Quick form for sending your CV</h2>
					<p>Apply using your</p>
					<div class="btn-wikia-regular btn-arrow"><strong>LinkedIn</strong> account</div>
				</div>
				<div class="col-xxs-4 col-xs-4 col-sm-4 col-md-8 col-lg-8">

					<?php if ( dynamic_sidebar('quick_contact_form') )  : endif; ?>

				</div>
			</div>
		</div>
	</div>
</section>
