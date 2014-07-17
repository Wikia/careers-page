<?php //if ( dynamic_sidebar('home_main_widget') ) : else : endif; ?>

<section class="container job-offers">
	<div class="offers-paper">

		<?php if ( dynamic_sidebar('second_section_mainpage') ) : endif; ?>

	</div>
</section>


<section class="container-fluid stats">
	<div class="row">
		<div class="container">
			<div class="row">
				<h2 class="h1">Od Fanów. Dla Fanów.</h2>
				<div class="col-md-3 col-lg-3 number-col">
					<span class="number h2">108,718,176</span>
					<h3>miesięcznych odwiedzin</h3>
				</div>
				<div class="col-md-3 col-lg-3 number-col">
					<span class="number h2">33,052,302</span>
					<h3>wszystkich stron</h3>
				</div>
				<div class="col-md-3 col-lg-3 number-col">
					<span class="number h2">411,620</span>
					<h3>wszystkich społeczności </h3>
				</div>
				<div class="col-md-3 col-lg-3 number-col">
					<span class="number h2">371,351</span>
					<h3>edycji dzisiaj</h3>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="container career-paths">
	<div class="row">

		<h2 class="h1">Poznaj naszą załogę</h2>
		<div class="flexslider">
			<ul class="slides">
				<li data-thumb="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/'); ?>jakubo.jpg">
					<div class="col-lg-6 col-md-6 col-sm-3 col-xs-4 col-xxs-4 avatar"><img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/'); ?>jakubo.jpg" alt="jakubo" class="person-picture" /></div>
					<div class="col-lg-6 col-md-6 col-sm-3 col-xs-4 col-xxs-4 description">
						<h3 class="h1">Jakub</h3>
						<p>Wcześniej - stażysta w Wikia. Dzisiaj - nasz spec od mobilnych rozwiązań.</p>
						<a href="kariera/sciezki-rozwoju/jakub/" class="btn-wikia-gray-blue btn-arrow icon-chevron-gray">Poznaj</a>
					</div>
				</li>
				<li data-thumb="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/'); ?>federico.jpg">
					<div class="col-lg-6 col-md-6 col-sm-3 col-xs-4 col-xxs-4 avatar"><img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/'); ?>federico.jpg" alt="federico" class="person-picture" /></div>
					<div class="col-lg-6 col-md-6 col-sm-3 col-xs-4 col-xxs-4 description">
						<h3 class="h1">Federico</h3>
						<p>Architekt aplikacji, budowniczy zespołów programistów.</p>
						<a href="kariera/sciezki-rozwoju/federico/" class="btn-wikia-gray-blue btn-arrow icon-chevron-gray">Poznaj</a>
					</div>
				</li>
				<li data-thumb="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/'); ?>jakubk.jpg">
					<div class="col-lg-6 col-md-6 col-sm-3 col-xs-4 col-xxs-4 avatar"><img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/'); ?>jakubk.jpg" alt="jakubk" class="person-picture" /></div>
					<div class="col-lg-6 col-md-6 col-sm-3 col-xs-4 col-xxs-4 description">
						<h3 class="h1">Jakub</h3>
						<p>Inżynier z zacięciem biznesowym.</p>
						<a href="kariera/sciezki-rozwoju/jakub-szeryf/" class="btn-wikia-gray-blue btn-arrow icon-chevron-gray">Poznaj</a>
					</div>
				</li>
			</ul>
		</div>

	</div>
</section>


<section class="benefits-description">
	<div class="container">
		<div class="row">
			<h2>Praca w Wikia to nie tylko praca</h2>
			<div class="col-lg-offset-1 col-md-offset-1 col-lg-5 col-md-5 col-sm-3 col-xs-4 col-xxs-4 benefit-item">
				<img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/'); ?>benefits1.jpg" alt="Rozwój" />
				<h3>Rozwój w Wikia</h3>
				<p>	Wikia dba o Twój rozwój - wybierz dwie konferencje w ciągu roku, a firma sfinansuje Twoje uczestnictwo, przejazd i zakwaterowanie.</p>
			</div>
			<div class="col-lg-5 col-md-5 col-sm-3 col-xs-4 col-xxs-4 benefit-item">
				<img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/'); ?>benefits2.jpg" alt="Rozwój" />
				<h3>Wyjazd do San Francisco</h3>
				<p>Raz w roku wybierzesz się z nami do San Francisco w odwiedziny do naszej siedziby głównej.</p>
			</div>
			<div class="col-lg-offset-1 col-md-offset-1 col-lg-5 col-md-5 col-sm-3 col-xs-4 col-xxs-4 benefit-item">
				<img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/'); ?>benefits3.jpg" alt="Rozwój" />
				<h3>Rodzina</h3>
				<p>Wikia organizuje wiele eventów rodzinnych - pikniki, imprezy, "wikilie" - jesteśmy family friendly.</p>
			</div>
			<div class="col-lg-5 col-md-5 col-sm-3 col-xs-4 col-xxs-4 benefit-item">
				<img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/'); ?>benefits4.jpg" alt="Rozwój" />
				<h3>Dbamy o Ciebie</h3>
				<p>W trakcie pracy dbamy o Twoje samopoczucie - w naszej zawsze pełnej spiżarni znajdziesz owoce, przekąski, słodycze, napoje, by się pożywić i orzeźwić.</p>
			</div>
		</div>
	</div>
</section>

<section class="container-fluid join-us">
	<div class="row">
		<div class="col-xxs-4 col-xs-4 col-sm-6 col-md-12 col-lg-12">
			<h2 class="site-header-message h1">Jesteś gotów, by dołączyć do zespołu?</h2>
			<a href="<?php echo home_url(); ?>/kariera" class="btn-wikia-white btn-arrow">Zobacz, kogo szukamy</a>
		</div>
	</div>
</section>

<section class="container-fluid spaced-container quick-contact">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-xxs-4 col-xs-4 col-sm-2 col-md-4 col-lg-4">
					<h2>Wypełnij formularz i wyślij CV</h2>
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
