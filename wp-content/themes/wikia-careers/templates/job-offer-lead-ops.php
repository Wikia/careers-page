<?php
/*
Template Name: Job offer Lead Ops
*/

?>

<?php include new Roots_Wrapping('templates/job-offers/job-offer-single-head.php'); ?>


<article class="container spaced-container job-offer-content">
	<div class="row">
		<div class="col-xxs-4 col-xs-4 col-sm-4 col-md-8 col-lg-offset-1 col-lg-6 excerpt-col">
			<h2>Wikia</h2>
			<p>Wikia to jedna z 30 największych stron na świecie. Jej największa siła tkwi w dawaniu pasjonatom miejsca dla twórczej ekspresji, jakiej nie znajdą w innych, tradycyjnych mediach. Na całym świecie szukamy bystrych, kreatywnych profesjonalistów, by pomogli nam jeszcze bardziej rozwinąć skrzydła.</p>

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
						<a href="<?php //echo get_tag_link($tag->term_id) ?>"><?php echo $tag->name ?></a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col-xxs-4 col-xs-4 col-sm-6 col-md-12 col-lg-10 col-lg-offset-1 job-offer-details">

			<section class="featured-block">
				<h2>Jeżeli chcesz uczestniczyć w</h2>
				<div class="columns">
					<ul>
						<li>szukaniu pomysłów na jeszcze lepsze wykorzystanie naszego backup data center</li>
						<li>podnoszeniu efektywności naszego CDN</li>
						<li>szukaniu nowych rozwiązań w zakresie monitoringu systemów</li>
						<li>testowaniu pojemności serwisu</li>
					</ul>
				</div>
				<p class="text-center">...to praca dla Ciebie!</p>
			</section>


			<h2>Czego potrzebujesz, aby dołączyć do Ops-Teamu w Wikia?</h2>
			<ul>
				<li>znajomości arkanów Linuxa</li>
				<li>znajomości baz danych, takich jak: MySQL, Hadoop</li>
				<li>znajomości takich języków jak Ruby, Python, Perl, Bash (lub poddobnych)</li>
				<li>doświadczenia w korzystaniu z frameworków typu Chef lub Puppet</li>
			</ul>

			<h2>Przyznajemy dodatkowe punkty za</h2>
			<ul>
				<li>doświadczenie w pracy z dużymi, skalowalnymi systemami</li>
				<li>doświadczenie w pracy z technologiami open source</li>
				<li>szeroką wiedzę na temat najnowszych technologii administracji bazami danych</li>
			</ul>

			<section class="featured-block">
				<h2>Co zyskujesz, będąc Wikianinem?</h2>
				<div class="columns">
					<ul>
						<li>Wikia dba o Twój rozwój - wybierz dwie konferencje w ciągu roku, a firma sfinansuje Twoje uczestnictwo, przejazd i zakwaterowanie</li>
						<li>Raz w roku wybierzesz się z nami do San Francisco w odwiedziny do naszego biura macierzystego</li>
						<li>Wikia organizuje wiele eventów rodzinnych - pikniki, imprezy, "wikilie" - jesteśmy family friendly</li>
						<li>W trakcie pracy dbamy o Twoje sampoczucie - w naszej zawsze pełnej spiżarni znajdziesz owoce, przekąski, słodycze i napoje.</li>
					</ul>
				</div>
			</section>
		</div>
	</div>
</article>


<?php include new Roots_Wrapping('templates/job-offers/job-offer-single-foot.php'); ?>
