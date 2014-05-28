<?php
/*
Template Name: Job offer IT Support
*/

?>

<?php include new Roots_Wrapping('templates/job-offers/job-offer-single-head.php'); ?>


<article class="container spaced-container job-offer-content">
	<div class="row">
		<div class="col-xxs-4 col-xs-4 col-sm-4 col-md-8 col-lg-offset-1 col-lg-6 excerpt-col">
			<p><strong>W Wikia pracujemy na wysokich obrotach.</strong> Kodowanie mamy we krwi. Czasami krew w żyłach mrozi nam Czarny Ekran. Czasami napada na nas klątwa “Nie Znaleziono Sieci Bezprzewodowych ”. Czasem z niewyjaśnionych przyczyn nie mamy dostępu do internala. Albo mysz nie działa. W tych trudnych chwilach jest tylko jeden człowiek, który może nam pomóc. Tym człowiekiem jest nasz IT Support.</p>

			<div class="featured-statement">Bądź superbohaterem w naszym biurze!</div>

		</div>
		<div class="col-xxs-4 col-xs-4 col-sm-2 col-md-4 col-lg-4 rail-col">
			<div class="recruiter-info">
				<img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/'); ?>mateusz-avatar.jpg" alt="Mateusz"/>
				<span class="name">Mateusz Szumała</span>
				<span class="function">Rekruter</span>
			</div>
			<h2>Wikia proponuje:</h2>
			<ul>
				<li><strong>3&nbsp;000 – 5&nbsp;000 zł</strong> (brutto, na miesiąc)</li>
				<li>w pełni opłacony wyjazd na 2 konferencje rocznie</li>
				<li>raz w roku wizyta w San Francisco</li>
				<li>benefit plan</li>
			</ul>

			<ul class="tags">
				<?php foreach (get_the_tags($post->ID) as $tag) : ?>
					<li>
						<span><?php echo $tag->name ?></span>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col-xxs-4 col-xs-4 col-sm-6 col-md-12 col-lg-10 col-lg-offset-1 job-offer-details">

			<section class="featured-block">
				<h2>Twoją odpowiedzialnością byłoby</h2>
				<div class="columns">
					<ul>
						<li>onboarding nowych pracowników (zakładanie kont, VPNów, itd.)</li>
						<li>wybieranie, zamawianie i konfiguracja sprzętu</li>
						<li>wprowadzenie programu do inwentury</li>
						<li>przygotowywanie zapytań ofertowych</li>
						<li>obsługa sieci przewodowych i bezprzewodowych w biurze</li>
						<li>wszystko to, co przerasta naszych developerów ;)</li>
					</ul>
				</div>
			</section>


			<h2>Czego potrzebujesz, aby dołączyć do Wikia?</h2>
			<ul>
				<li>niezłej orientacji w nowościach technologicznych - zarówno komputerów osobistych, jak i stacji dokujących, laptopów, Mac’ów, przedłużek, drukarek, złączek, routerów… itd.</li>
				<li>dużej samodzielności</li>
				<li>umiejętności ogarniania dużej ilości sprzętu na raz</li>
				<li>znajomości języka angielskiego (we are a part of international company based in San Francisco, so English is a must here)</li>
			</ul>

			<h2>Otrzymasz bonusowe punkty, jeżeli</h2>
			<ul>
				<li>pracowałeś już kiedyś na podobnym stanowisku</li>
				<li>masz konto na Wikii i jesteś aktywnym użytkownikiem</li>
				<li>grasz w piłkarzyki i/lub bilard</li>
				<li>wiesz, jak postawić Linuxa na Mac’u ;)</li>
				</li>
			</ul>

			<section class="featured-block">
				<h2>Co zyskujesz, będąc Wikianinem?</h2>
				<div class="columns">
					<ul>
						<li>Wikia dba o Twój rozwój - wybierz dwie konferencje w ciągu roku, a firma sfinansuje Twoje uczestnictwo, przejazd i zakwaterowanie</li>
						<li>Raz w roku wybierzesz się z nami do San Francisco w odwiedziny do naszej siedziby głównej</li>
						<li>Wikia organizuje wiele eventów rodzinnych - pikniki, imprezy, "wikilie" - jesteśmy family friendly</li>
						<li>W trakcie pracy dbamy o Twoje sampoczucie - w naszej zawsze pełnej spiżarni znajdziesz owoce, przekąski, słodycze i napoje.</li>
					</ul>
				</div>
			</section>
		</div>
	</div>
</article>


<?php include new Roots_Wrapping('templates/job-offers/job-offer-single-foot.php'); ?>
