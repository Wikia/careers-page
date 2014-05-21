<?php
/*
Template Name: Job offer JavaScript Engineer
*/

?>

<?php include new Roots_Wrapping('templates/job-offers/job-offer-single-head.php'); ?>


<article class="container spaced-container job-offer-content">
	<div class="row">
		<div class="col-xxs-4 col-xs-4 col-sm-4 col-md-8 col-lg-offset-1 col-lg-6 excerpt-col">
			<h2>Mobilizacja nadchodzi!</h2>
			<p>Świat urządzeń mobilnych się rozwija. Wikia rozwija się razem z nim. Liczba użytkowników urządzeń mobilnych rośnie, a my dajemy z siebie wszystko, żeby dostarczać im rozwiązania najlepsze z możliwych.</p>

			<div class="featured-statement">Twoje zadania będą dotyczyły ulepszania stron Wikia na urządzeniach mobilnych</div>

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
						<a href="<?php  //echo get_tag_link($tag->term_id) ?>"><?php echo $tag->name ?></a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col-xxs-4 col-xs-4 col-sm-6 col-md-12 col-lg-10 col-lg-offset-1 job-offer-details">

			<h2>Twoje codzienne wyzwania będą dotyczyć</h2>
			<ul>
				<li>Implementowania i testowania rozwiązań software’owych na najnowszych urządzeniach mobilnych (dostajesz high-endowe urządzenia do ręki!)</li>
				<li>Szukania sposobów na ulepszanie User Interface i User Experience (doceniamy kreatywność!)</li>
				<li>Migracji naszej platformy w stronę System Oriented Architecture</li>
				<li>Pisania testów jednostkowych, integracyjnych i systemowych dla Twojego kodu</li>
				<li>Code review Twoich koleżanek i kolegów</li>
			</ul>

			<h2 class="text-center">W Wikii będziesz miał szansę pracować nad różnymi ciekawymi projektami</h2>
			<p class="text-center">Tutaj wymieniliśmy kilka z tych, z którymi spotkasz się w ciągu pierwszych 6 miesięcy pracy</p>

			<h3 class="text-center">Interaktywne Mapy</h3>
			<p class="text-center">Zbuduj narzędzia, które pozwolą społecznościom Wikii na tworzenie interaktywnych map z dowolnych plików graficznych. Stwórz serwis i klienta API na przeglądarki/urzadzenia mobilne. Technologie, jakie stosujemy: Javascript, node.js, MySQL, Redis, HTML5, PHP, CSS.</p>

			<h3 class="text-center">Wyścig z czasem </h3>
			<p class="text-center">ko część małego zespołu, stwórz nowy skin na urządzenia mobilne, ze zwróceniem szczególnej uwagi na szybkość ładowania strony - naszym celem jest ładowanie stron w czasie poniżej 1 sekundy. Chcemy też, by nasze rozwiązania były w 100% testowalne. Co Ci się przyda? HTML5, CSS, JavaScript i dokładny stoper.</p>

			<h3 class="text-center">Nawigacja strony</h3>
			<p class="text-center">Przebuduj nawigację User Interface, żeby bardziej odpowiadał potrzebom użytkowników oraz strukturze i treści stron Wikii. Tutaj używamy Javascript i PHP.</p>

			<h2>Czego potrzebujesz, żeby być członkiem Teamu Mobile w Wikia?</h2>
			<ul>
				<li>umiejętności pisania zwięzłego, czystego, testowalnego kodu w obiektowym javascript</li>
				<li>umiejętności projektowania i kodowania aplikacji przeglądarkowych/mobilnych</li>
				<li>bycia ukierunkowanym na wydajność aplikacji</li>
				<li>znajomości różnic i podobieństw w zakresie różnych przeglądarek</li>
				<li>umiejętności dawania i otrzymywania konstruktywnej krytyki</li>
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
