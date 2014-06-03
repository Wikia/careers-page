<?php
/*
Template Name: Job offer Software Test Engineer
*/

?>

<?php include new Roots_Wrapping('templates/job-offers/job-offer-single-head.php'); ?>


<article class="container spaced-container job-offer-content">
	<div class="row">
		<div class="col-xxs-4 col-xs-4 col-sm-4 col-md-8 col-lg-offset-1 col-lg-6 excerpt-col">
			<h2>W Wikia możesz zawsze liczyć na swój Team</h2>
			<p>Pracując z fantastycznymi ludźmi, bierzesz udział w wyjątkowych projektach. Gramy zespołowo - zarówno w pracy, jaki po godzinach - na boisku. Wikia jest tworzona przez pasjonatów i geeków (czasami zwanych “współpracownikami”) dla milionów użytkowników z całego śiwata.</p>

			<div class="featured-statement">Potrzebujemy Twojej pomocy, by rozwijać nasz niezwykły produkt!</div>

		</div>
		<div class="col-xxs-4 col-xs-4 col-sm-2 col-md-4 col-lg-4 rail-col">
			<div class="recruiter-info">
				<img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/'); ?>mateusz-avatar.jpg" alt="Mateusz"/>
				<span class="name">Mateusz Szumała</span>
				<span class="function">Rekruter</span>
			</div>
			<h2>Wikia proponuje:</h2>
			<ul>
				<li><strong>5&nbsp;000 – 9&nbsp;000 zł</strong> (brutto, na miesiąc)</li>
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
				<h2>Twoje codzienne wyzwania będą dotyczyć</h2>
				<div class="columns">
					<ul>
						<li>planowania testów i tworzenie case’ów (manualnych i automatycznych)</li>
						<li>przeprowadzania case’ów i diagnozowania wyników</li>
						<li>identyfikowania, śledzenia i raportowania błędów</li>
						<li>pomocy innym zespołom w testowaniu ich projektów</li>
						<li>pomocy inzynierom w tworzeniu i utrzymywaniu zautomatyzowanych unit testów</li>
						<li>identyfikowania problemów w kodzie lub procesach SQA, pomocy w dostarczaniu rozwiązań</li>
						<li>współpracy z developerami i product managerami</li>
					</ul>
				</div>
			</section>


			<h2>Czego potrzebujesz, aby dołączyć do QA Teamu?</h2>
			<ul>
				<li>umiejętności pracy zespołowej</li>
				<li>doświadczenia w metodologii Agile/Scrum</li>
				<li>doświadczenia w open-source’owych frameworkach testów automatycznych (Selenium, Robotium, Frank, Calabash, itp.)</li>
				<li>znajomości Jenkinsa (lub jego odpowiednika)</li>
				<li>znajomości GitHuba</li>
				<li>znajomości Linuxa (bash, konfiguracja ssh, itp.)</li>
				<li>podstawowej znajomości Javy, HTMLa, CSSa</li>
				<li>płynnej znajomości języka angielskiego (our QA Head is a British gentleman, so to communicate effectively within a team English is a must)</li>
			</ul>

			<h2>Otrzymujesz bonusowe punkty za</h2>
			<ul>
				<li>doświadczenie w testowaniu serwisów internetowych</li>
				<li>doświadczenie z programami ITS, np. JIRA, RedMine, itp.</li>
				<li>wykształcenie techniczne</li>
				<li>certyfikat ISTQB</li>
			</ul>


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
