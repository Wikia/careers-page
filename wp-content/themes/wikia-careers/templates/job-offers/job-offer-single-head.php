<?php

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
				<button class="btn-wikia" data-target="#jobApplyModal" data-toggle="modal">Aplikuj</button>
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


<!-- Modal -->
<div class="modal fade job-offer-modal" id="jobApplyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<button type="button" class="go-back" data-dismiss="modal" aria-hidden="true">Powrót</button>
			<div class="modal-header">
				<h2 class="modal-title" id="myModalLabel"><?php echo $post->post_title ?></h2>
<!--				<p class="short-descr">Lokalizacja lub nazwa zespołu</p>-->
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-xxs-4 col-xs-4 col-sm-2 col-md-4 col-lg-4">
						<h2>Wypełnij formularz i wyślij CV</h2>
<!--						<p>Aplikuj przez</p>-->
<!--						<a class="btn-wikia-regular btn-arrow"><strong>LinkedIn</strong></a>-->
					</div>
					<div class="col-xxs-4 col-xs-4 col-sm-4 col-md-8 col-lg-8">

						<?php if ( dynamic_sidebar('quick_contact_form') )  : endif; ?>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>