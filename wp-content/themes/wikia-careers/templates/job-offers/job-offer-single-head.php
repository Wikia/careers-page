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
