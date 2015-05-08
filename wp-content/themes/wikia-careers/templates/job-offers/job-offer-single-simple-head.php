<?php
$parent = get_page_by_title($post->post_title);
$parent_link = get_page_link($parent->ID);
?>

<div class="job-offer-apply-bar nav-bar-under-banner">
	<div class="container">
		<div class="row">
			<div class="col-xxs-1 col-xs-1 col-sm-2 col-md-4 col-lg-3 col-lg-offset-1">
				<a href="<?php echo $parent_link?>" class="go-back icon-arrow-left-gray">
					<?php _e( 'Back to job offers', 'wikia-careers' ); ?>
				</a>
			</div>
			<div class="col-xxs-2 col-xs-2 col-sm-2 col-md-4 col-lg-4">
			</div>
			<div class="col-xxs-1 col-xs-1 col-sm-2 col-md-4 col-lg-3">
				<?php include new Roots_Wrapping('templates/sections/share-buttons.php'); ?>
			</div>
		</div>
	</div>
</div>
