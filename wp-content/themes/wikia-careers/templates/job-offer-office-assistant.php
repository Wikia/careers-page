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
			<p>W poznańskim biurze Wikii pracuje ponad 50 geeków. Ta ekipa potrzebuje Twojej opieki, by móc się rozwijać i "robić internety".</p>

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
				<li><strong>2&nbsp;500 – 4&nbsp;000 zł</strong> (brutto, na miesiąc)</li>
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

			<h2>Znajomość j. obcych</h2>
			<p>Aby dla nas pracować <strong>MUSISZ</strong> sprawnie komunikować się w j. angielskim. Tylko w samym  biurze w Poznaniu zatrudniamy Inżynierów z Ukrainy, Bułgarii, Hiszpanii, Włoch i Wielkiej Brytanii. Oprócz tego, musisz  pozostawać w stałym kontakcie z oddziałami Wikia na całym świecie.</p>

			<h2>Twoje obowiązki</h2>
			<p>W biurze zwykle dzieje się wiele: wizyty, telefony, spotkania, pilne projekty, ważne zadania i to Ty nad wszystkim czuwasz. Pewnie już to znasz. Jednak praca we Wikii to nie tylko śledzenie  kalendarzy i witanie gości.</p>


			<h2>Wyzwania czekające na Ciebie w roku 2014</h2>

			<section class="featured-3-columns">
				<div class="featured-block">
					<h3>WikiaOffice 4.0</h3>
					<p> W sierpniu czeka nas rewolucja - przenosimy siedzibę do nowego biura, zbudowanego specjalnie dla nas. Ty będziesz odpowiadać za jego ostateczny szlif i przeprowadzkę.</p>
				</div>
				<p>&nbsp;</p>
				<p>&nbsp;</p>

				<div class="featured-block">
					<h3>Wikia się powiększa!</h3>
					<p>W związku z intensywnym procesem poszukiwania i zatrudniania nowych pracowników, również za granicą, pojawia się wiele nietypowych zadań. Aplikowanie o wizy, planowanie podróży, konferencji i pomoc w zadaniach employer brandingowych to tylko niektóre z  zadań na tym stanowisku.</p>
				</div>

				<div class="featured-block">
					<h3>Czerwony Dywan</h3>
					<p>Jesteśmy międzynarodową firmą z siedzibą w San Francisco i w związku z tym często odwiedzają nas goście ze Stanów, z Niemiec i innych państw. Chcemy wszystkim kolegom zapewnić wygodną podróż i pobyt - liczymy na Ciebie!</p>
				</div>
			</section>

			<h3 class="text-center">Codzienna opieka / Tworzenie dobrej atmosfery</h3>


			<section class="featured-block">
				<h2>Co zyskujesz, będąc Wikianinem?</h2>
				<div class="columns">
					<ul>
						<li>Wikia dba o Twój rozwój - wybierz dwie konferencje w ciągu roku, a firma sfinansuje Twoje uczestnictwo, przejazd i zakwaterowanie</li>
						<li>Raz w roku wybierzesz się z nami do San Francisco w odwiedziny do naszej siedziby głównej</li>
						<li>Wikia organizuje wiele eventów rodzinnych - pikniki, imprezy, "wikilie" - jesteśmy family friendly</li>
						<li>W trakcie pracy dbamy o Twoje samopoczucie - w naszej zawsze pełnej spiżarni znajdziesz owoce, przekąski, słodycze i napoje.</li>
					</ul>
				</div>
			</section>
		</div>
	</div>
</article>


<?php include new Roots_Wrapping('templates/job-offers/job-offer-single-foot.php'); ?>
