<?php
/*
Template Name: Parent page template
*/

?>

<ul class="nav nav-tabs container spaced-container">
	<li class="active"><a href="#job-offers" data-toggle="tab">Oferty pracy</a></li>
<!--	<li><a href="#recruitment-process" data-toggle="tab">Proces rekrutacji</a></li>-->
</ul>



<div class="tab-content">


	<section class="tab-pane active container job-offers-list" id="job-offers">

				<h1>Otwarte stanowiska</h1>

				<?php
				//show list of all subpages
				$pages = get_pages("child_of=".get_the_ID()."&sort_column={$sort_column}&sort_order={$sort_order}" );
				foreach ( $pages as $page ) {

					$page_link = get_page_link( $page->ID );
					$post_title = $page->post_title;
					$content = apply_filters('the_content', $page->post_content);

					$HTML =<<<HTML
					<div class="offer-item">
						<a href="$page_link" class="container spaced-container">
							<h2>$post_title</h2>
							<p class="short-descr">Poznań, Polska</p>
						</a>
					</div>
HTML;

					echo $HTML;
				}
				?>

	</section>


	<div class="tab-pane container spaced-container" id="recruitment-process">off2</div>


</div>


<section class="career-paths-short container spaced-container">
	<div class="row">
		<div class="col-xxs-4 col-xs-4 col-sm-6 col-md-5 col-lg-4 avatar">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/'); ?>jakubo.jpg" alt="jakubo" class="person-picture" />
		</div>
		<div class="col-xxs-4 col-xs-4 col-sm-6 col-md-7 col-lg-7 description">
			<h2><strong>Jakub</strong> - pierwszoligowy gracz</h2>
			<p>Dzisiaj jest naszym najlepszym ekspertem w dziedzinie technologii mobilnych.</p>
			<a href="" class="btn-wikia-regular btn-arrow">Zobacz jego ścieżkę</a>
		</div>
	</div>
</section>

<?php include new Roots_Wrapping('templates/contact-section.php'); ?>