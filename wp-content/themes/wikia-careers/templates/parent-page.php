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
				$pages = get_pages( array(
					'child_of' =>  get_the_ID(),
					'parent' =>  get_the_ID(),
//					'sort_column' => 'post_date',
//					'sort_order' => 'ASC'
				) );
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


<?php include new Roots_Wrapping('templates/career-paths-section.php'); ?>

<?php include new Roots_Wrapping('templates/contact-section.php'); ?>