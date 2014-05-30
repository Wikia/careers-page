<?php
/*
Template Name: Job offer Front End Dev
*/

?>

<?php include new Roots_Wrapping('templates/job-offers/job-offer-single-head.php'); ?>


<article class="container spaced-container job-offer-content">
	<div class="row">
		<div class="col-xxs-4 col-xs-4 col-sm-4 col-md-8 col-lg-offset-1 col-lg-6 excerpt-col">
			<p><strong>To nie przypadek, że Wikia jest wyjątkowa</strong>. Wikię tworzą wyjątkowi ludzie – userzy na całym świecie dzielący się pasją i unikalną wiedzą. Chcemy, by dzielenie się było jeszcze prostsze, fajniejsze i szybsze.</p>

			<div class="featured-statement">Szukamy Front Endowca, który pomoże nam dawać nowe możliwości userom Wikii!</div>

		</div>
		<div class="col-xxs-4 col-xs-4 col-sm-2 col-md-4 col-lg-4 rail-col">
			<div class="recruiter-info">
				<img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/'); ?>mateusz-avatar.jpg" alt="Mateusz"/>
				<span class="name">Mateusz Szumała</span>
				<span class="function">Rekruter</span>
			</div>
			<h2>Wikia proponuje:</h2>
			<ul>
				<li><strong>7&nbsp;000 – 12&nbsp;000 zł</strong> (brutto, na miesiąc)</li>
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

			<h2>Twoje codzienne wyzwania będą dotyczyć</h2>
			<ul>
				<li>implementowania i testowania rozwiązań software’owych na najnowszych przeglądarkach</li>
				<li>szukania sposobów na ulepszanie User Interface i User Experience (doceniamy kreatywność!)</li>
				<li>pisania testów jednostkowych, integracyjnych i systemowych dla Twojego kodu</li>
				<li>code review Twoich koleżanek i kolegów</li>
			</ul>

			<h2 class="text-center">W Wikii będziesz miał szansę pracować nad różnymi ciekawymi projektami</h2>
			<p class="text-center">Tutaj wymieniliśmy kilka z tych, z którymi spotkasz się w ciągu pierwszych 6 miesięcy pracy</p>

			<h3 class="text-center">Nawigacja na stronie</h3>
			<p class="text-center">Szukamy sposobu, by korzystanie z naszych wikistron było łatwiejsze i jeszcze bardziej intuicyjne.</p>

			<h3 class="text-center">Przyspieszenie ładowania strony</h3>
			<p class="text-center">Czas ma dla nas znaczenie. Czas, w jakim ładuje się strona nie jest już opcją, ale standardem. W Wikia dbamy o najwyższe standardy.</p>

			<h3 class="text-center">Redesign</h3>
			<p class="text-center">Nie spoczywamy na laurach. Wierzymy, że nasz produkt może być jeszcze lepszy i ładniejszy, dlatego szukamy nowatorskich rozwiązań i pomysłów.</p>

			<h2>Czego potrzebujesz, żeby być członkiem Teamu Consumer w Wikia?</h2>
			<ul>
				<li>umiejętności pisania zwięzłego, czystego, testowalnego kodu w obiektowym JavaScript</li>
				<li>umiejętności projektowania i kodowania stron webowych</li>
				<li>znajomości CSS</li>
				<li>znajomości PHP</li>
				<li>bycia ukierunkowanym na wydajność</li>
				<li>znajomości różnic i podobieństw w zakresie różnych przeglądarek</li>
				<li>umiejętności dawania i otrzymywania konstruktywnej krytyki</li>
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
