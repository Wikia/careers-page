<?php
/*
Template Name: Job offer template
*/

$parent_title = get_the_title($post->post_parent);
$parent = get_page_by_title($parent_title);
$parent_link = get_page_link($parent->ID);
?>


<div class="job-offer-apply-bar">
	<div class="container">
		<div class="row">
			<div class="col-xxs-1 col-xs-1 col-sm-2 col-md-4 col-lg-3 col-lg-offset-1">
				<a href="<?php echo $parent_link?>" class="go-back">Powrót do ofert</a>
			</div>
			<div class="col-xxs-2 col-xs-2 col-sm-2 col-md-4 col-lg-4">
				<button class="btn-wikia">Aplikuj</button>
			</div>
		</div>
	</div>
</div>
<!--<div class="container prev-next-nav">-->
<!--	<div class="prev-next-buttons" id="stickyHandNav">-->
<!--		<button class="prev"></button>-->
<!--		<button class="next"><span></span></button>-->
<!--		<button class="back"></button>-->
<!--	</div>-->
<!--</div>-->

<article class="container spaced-container job-offer-content">
	<div class="row">
		<div class="col-xxs-4 col-xs-4 col-sm-4 col-md-8 col-lg-offset-1 col-lg-6 excerpt-col">
			<h2>Mobilizacja nadchodzi!</h2>
			<p>Świat urządzeń mobilnych się rozwija. Wikia rozwija się razem z nim. Liczba użytkowników urządzeń mobilnych rośnie, a my dajemy z siebie wszystko, żeby dostarczać im rozwiązania najlepsze z możliwych.</p>

			<div class="featured-statement">Twoje zadania będą dotyczyły ulepszania stron Wikia na urządzeniach mobilnych.</div>

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
				<?php foreach (get_the_tags(108) as $tag) : ?>
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

			<h2>W Wikii będziesz miał szansę pracować nad różnymi ciekawymi projektami.</h2>
			<p>Tutaj wymieniliśmy kilka z tych, z którymi spotkasz się w ciągu pierwszych 6 miesięcy pracy</p>

			<h3 class="text-center">Interaktywne Mapy</h3>
			<p class="text-center">Zbuduj narzędzia, które pozwolą społecznościom Wikii na tworzenie interaktywnych map z dowolnych plików graficznych. Stwórz serwis i klienta API na przeglądarki/urzadzenia mobilne. Technologie, jakie stosujemy: Javascript, node.js, MySQL, Redis, HTML5, PHP, CSS.</p>

			<h3>Wyścig z czasem</h3>
			<p>Jako część małego zespołu, stwórz nowy skin na urządzenia mobilne, ze zwróceniem szczególnej uwagi na szybkość ładowania strony - naszym celem jest ładowanie stron w czasie poniżej 1 sekundy. Chcemy też, by nasze rozwiązania były w 100% testowalne. Co Ci się przyda? HTML5, CSS, JavaScript i dokładny stoper</p>

			<h3>Nawigacja strony</h3>

			<p>Przebuduj nawigację User Interface, żeby bardziej odpowiadał potrzebom użytkowników oraz strukturze i treści stron Wikii. Tutaj używamy Javascript i PHP.</p>

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
					<h3>Back End</h3>
					<p>tworzy skalowalną infrastrukturę, wykorzystując między innymi statystyki i metryki aplikacji.</p>
				</div>
				<ul>
					<li>znasz MySQL, architekturę baz danych,</li>
					<li>potrafisz pisać skalowalny kod w PHP lub perl’u,</li>
					<li>rozumiesz co znaczy i jak stosować LAMP stack</li>
				</ul>
				<p>...to ścieżka dla Ciebie!</p>
			</section>

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
<!--<div class="container spaced-container">-->
<?php //while (have_posts()) : the_post(); ?>
<!---->
<!--	<article --><?php //post_class(); ?>
<!--		<div class="entry-content">-->
<!--			--><?php //the_content(); ?>
<!--		</div>-->
<!--	</article>-->
<?php //endwhile; ?>
<!--</div>-->


<!--<script>-->
<!--	$(document).ready(function(){-->
<!---->
<!--		var bottomOffset = $(document).height() - ($('.news-feed').offset().top - $('#stickyHandNav').outerHeight()),-->
<!--			topOffset = $('#stickyHandNav').offset().top - $('.navigation').outerHeight();-->
<!--		$('#stickyHandNav').affix({-->
<!--			offset: {-->
<!--				top: topOffset,-->
<!--				bottom: bottomOffset-->
<!--			}-->
<!--		});-->
<!---->
<!--	});-->
<!--</script>-->



<section class="container-fluid stats contact-for-help job-offer-apply-bar spaced-container">
			<div class="container">
		<h2>Aplikuj teraz</h2>
				<div class="row">
					<div class="col-xxs-1 col-xs-1 col-sm-2 col-md-4 col-lg-3 col-lg-offset-1">
						<a href="<?php echo $parent_link?>" class="go-back">Powrót do ofert</a>
					</div>
					<div class="col-xxs-2 col-xs-2 col-sm-2 col-md-4 col-lg-4">
						<button class="btn-wikia-white-white">Aplikuj</button>
					</div>
				</div>
			</div>

</section>
