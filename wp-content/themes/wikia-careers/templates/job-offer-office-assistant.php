<?php
/*
Template Name: Job offer Office Assistant
*/

?>

<?php include new Roots_Wrapping('templates/job-offers/job-offer-single-head.php'); ?>


<article class="container spaced-container job-offer-content">
	<div class="row">
		<div class="col-xxs-4 col-xs-4 col-sm-4 col-md-8 col-lg-offset-1 col-lg-6 excerpt-col">
			<h2>Nasze biuro tętni życiem</h2>
			<p>W poznańskim biurze Wikii pracuje ponad 50 inyżnierów, testerów, designerów i product managerów. Ta ekipa potrzebuje Twojej pomocy i opieki, by móc się rozwijać jeszcze szybciej.</p>

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
				<li><strong>2&nbsp;000 – 4&nbsp;000 zł</strong> (brutto, na miesiąc)</li>
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

				<h2>Twoje obowiązki</h2>
					<p>Twoją pracą będzie pomoc w bieżącym i efektywnym utrzymywaniu biura. W biurze zwykle dzieje się wiele: spotkania, pilne projekty, ważne zadania. Pewnie to znasz. Jednak praca w biurze Wikii to nie tylko układanie kalendarza spotkań i witanie gości.</p>
						<p><strong>Aby pracować na tym stanowisku, musisz znać biegle język angielski</strong> - wymagamy od Ciebie sprawnej komunikacji wewnątrz firmy, jak i między biurami Wikii na całym świecie.</p>


			<h2>Wyzwania czekające na Ciebie w roku 2014</h2>

			<section class="featured-3-columns">
				<div class="featured-block">
					<h3>WikiaOffice 4.0</h3>
					<p> W sierpniu Wikia przenosi swoje biuro. Będzie… niesamowite! Także dzięki Twojej pomocy w aranżacji i planowaniu przeprowadzki.</p>
				</div>
				<p>&nbsp;</p>
				<p>&nbsp;</p>

				<div class="featured-block">
					<h3>Wikia się powiększa!</h3>
					<p>Cały czas zatrudniamy nowych specjalistów, czasami spoza Polski. W związku z intensywnym procesem poszukiwania i zatrudniania nowych pracowników pojawia się wiele nietypowych zadań - załatwianie wiz, przelotów, ale też wyjazdy na konferencje i pomoc w zadaniach employer brandingowych.</p>
				</div>

				<div class="featured-block">
					<h3>Czerwony Dywan</h3>
					<p>Jesteśmy międzynarodową firmą z siedzibą w San Francisco i w związku z tym często odwiedzają nas goście ze Stanów, z Niemiec i innych państw. Chcemy wszystkim naszym Gościom zapewnić wygodną podróż i pobyt - liczymy na Ciebie!</p>
				</div>
			</section>


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
