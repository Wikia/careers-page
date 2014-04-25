<?php
/*
Template Name: Parent page template
*/

?>

<ul class="nav nav-tabs container-fluid spaced-container">
	<li class="active"><a href="#job-offers" data-toggle="tab">Job offers</a></li>
	<li><a href="#recruitment-process" data-toggle="tab">Recruitment process</a></li>
</ul>



<div class="tab-content">


	<section class="tab-pane active job-offers-list container-fluid spaced-container" id="job-offers">
		<div class="row">
			<div class="col-lg-12">

				<h1>Open positions</h1>

				<?php
				//show list of all subpages
				$pages = get_pages("child_of=".get_the_ID()."&sort_column={$sort_column}&sort_order={$sort_order}" );
				foreach ( $pages as $page ) {

					$page_link = get_page_link( $page->ID );
					$post_title = $page->post_title;
					$content = apply_filters('the_content', $page->post_content);

					$HTML =<<<HTML
					<div class="offer-item" data-target="#jobModal{$page->ID}" data-toggle="modal">
						<h2>$post_title</h2>
						<p class="short-descr">Lokalizacja lub nazwa zespołu</p>
					</div>

					<!-- Modal -->
					<div class="modal job-offer-modal" id="jobModal{$page->ID}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
															<button type="button" class="go-back" data-dismiss="modal" aria-hidden="true">Powrót</button>
								<div class="modal-header">
									<button class="btn-wikia btn-arrow alignright"><span>Aplikuj</span></button>
									<h2 class="modal-title" id="myModalLabel">$post_title</h2>
									<p class="short-descr">Lokalizacja lub nazwa zespołu</p>
								</div>
								<div class="modal-body">
									$content
								</div>
							</div>
						</div>
					</div>
HTML;

					echo $HTML;
				}
				?>


			</div>
		</div>
	</section>


	<div class="tab-pane" id="recruitment-process">off2</div>


</div>


<section class="career-paths-short container spaced-container">
	<div class="row">
		<div class="col-xs-4 col-sm-6 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">
			<div class="avatar">
				<img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/'); ?>nandy-avatar.jpg" alt="" class="img-circle " />
			</div>
			<div class="description">
				<h2><strong>nAndy</strong> - pierwszoligowy gracz</h2>
				<p>Lus aspedi volo qui cullanis dolo tenim rest liquodicia nonsernam veleseque
					soluptaque volupta dus doluptas debit, autescientur asitisq uatibus dandelit.</p>
				<a href="" class="btn-wikia-regular btn-arrow"><span>Zobacz jego ścieżkę</span></a>
			</div>
		</div>
	</div>
</section>
