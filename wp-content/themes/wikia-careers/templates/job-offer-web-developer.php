<?php
/*
Template Name: Job offer JavaScript Engineer
*/

?>

<?php include new Roots_Wrapping('templates/job-offers/job-offer-single-head.php'); ?>


<article class="container spaced-container job-offer-content">
	<div class="row">
		<div class="col-xxs-4 col-xs-4 col-sm-4 col-md-8 col-lg-offset-1 col-lg-6 excerpt-col">
			<h2>Wikia jest bardzo zróżnicowana</h2>
			<p>to miejsce, gdzie społeczności i indywidualiści tworzą, współpracują ze sobą w tworzeniu wyjątkowego contentu. Dołącz do nas i pomóż fanom na całym świecie dzielić się wiedzą i pasją.</p>

			<div class="featured-statement">Szukamy pełnoetatowego geeka do naszego Development Centre w Poznaniu!</div>

		</div>
		<div class="col-xxs-4 col-xs-4 col-sm-2 col-md-4 col-lg-4 rail-col">
			<div class="recruiter-info">
				<img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/'); ?>mateusz-avatar.jpg" alt="Mateusz"/>
				<span class="name">Mateusz Szumała</span>
				<span class="function">Rekruter</span>
			</div>
			<h2>Few benefits:</h2>
			<ul class="">
				<li>Salary of <strong>11&nbsp;000 – 14&nbsp;000 zł</strong>
			(per month, gross)</li>
				<li>One visit to San Francisco
			office per year</li>
				<li>2+ paid conferences per year</li>
				</ul>

			<ul class="tags">
				<?php foreach (get_the_tags($post->ID) as $tag) : ?>
					<li>
						<a href="<?php  echo get_tag_link($tag->term_id) ?>"><?php echo $tag->name ?></a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col-xxs-4 col-xs-4 col-sm-6 col-md-12 col-lg-10 col-lg-offset-1 job-offer-details">

			<h2>Czego oczekujemy od Ciebie?</h2>
			<ul>
				<li>Umiejętności w programowaniu obiektowym (object-oriented design and programming)</li>
				<li>Podejścia analitycznego, krytycznego myślenia w rozwiązywaniu problemów</li>
				<li>Podstawowej wiedzy w zakresie Linuxa, Apache, MySQL oraz PHP, a także wiedzy o tym, jak te technologie ze sobą łączyć</li>
				<li>Znajomości języka angielskiego przynajmniej na komunikatywnym poziomie (językiem “urzędowym” jest angielski - a dawanie i otrzymywanie feedbacku w zespołach jest dla nas jednym z kluczowych aspektów pracy)</li>
			</ul>

			<p class="text-center">Wikia rozwija się szybko - ciągle pojawiają się możliwości poszerzania swoich kompetencji i specjalizowania się w określonych dziedzinach.</p>


			<section class="featured-3-columns">
				<div class="featured-block">
					<h3>Back End</h3>
					<p>tworzy skalowalną infrastrukturę, wykorzystując między innymi statystyki i metryki aplikacji.</p>
				</div>
				<ul>
					<li>znasz MySQL, architekturę baz danych,</li>
					<li>potrafisz pisać skalowalny kod w PHP lub perl’u,</li>
					<li>rozumiesz co znaczy i jak stosować LAMP stack</li>
				</ul>
				<p>...to ścieżka dla Ciebie!</p>

				<div class="featured-block">
					<h3>Zespół Ad Engineering</h3>
					<p>tworzy innowacyjne technologie i strategie maksymalizowania przychodu przy minimalnej ingerencji w User Experience.</p>
				</div>
				<ul>
					<li>jesteś dobry w znajdowaniu i rozwiązywaniu problemów,</li>
					<li>potrafisz debuggować,</li>
					<li>doskonale znasz JavaScript,</li>
					<li>masz doświadczenie w programowaniu aplikacji webowych</li>
				</ul>
				<p>...doskonale odnajdziesz się w tym teamie!</p>

				<div class="featured-block">
					<h3>Zespół Platform</h3>
					<p>zajmuje się rozwojem nowych feature’ów w ramach platformy MediaWiki.</p>
				</div>
				<ul>
					<li>znasz AJAX, HTML, CSS,</li>
					<li>doskonale znasz Javascript i OO, PHP,</li>
					<li>masz podstawową wiedzę na temat zabezpieczeń webowych i skalowania</li>
				</ul>
				<p>...to jest team dla Ciebie!</p>
			</section>

			<h2>Niezależnie od wyboru ścieżki, otrzymujesz punkty bonusowe za</h2>
			<ul>
				<li>doświadczenie w pracy ze stronami o dużym trafficu</li>
				<li>doświadczenie w pracy w Agile’u</li>
				<li>doświadczenie z MediaWiki</li>
				<li>chcesz i potrafisz uczyć się nowych technologii, czasem specyficznych dla danej domeny</li>
				<li>bycie uzytkownikiem Wikia, Wikipedii albo innej wikistrony (dołącz swój login w CV!)</li>
			</ul>

			<section class="featured-block">
				<h2>Co zyskujesz, będąc Wikianinem?</h2>
				<div class="columns">
					<ul>
						<li>Wikia dba o Twój rozwój - wybierz dwie konferencje w ciągu roku, a firma sfinansuje Twoje w niej uczestnictwo, przejazd i zakwaterowanie</li>
						<li>Raz w roku wybierzesz się z nami do San Francisco - w odwiedziny do naszego biura macierzystego</li>
						<li>Wikia organizuje wiele eventów rodzinnych - pikniki, imprezy, "wikilie" - jesteśmy family friendly</li>
						<li>W trakcie pracy dbamy o Twoje sampoczucie - w naszej zawsze pełnej spiżarni znajdziesz owoce, przekąski, słodycze, napoje.</li>
					</ul>
				</div>
			</section>
		</div>
	</div>
</article>


<?php include new Roots_Wrapping('templates/job-offers/job-offer-single-foot.php'); ?>
