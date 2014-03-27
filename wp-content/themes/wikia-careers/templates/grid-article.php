<?php
/*
Template Name: Grid article
*/
?>
<div class="container-fluid spaced-container">
	<div class="row">
		<div class="col-xs-4 col-sm-3 col-md-7 col-lg-6 col-lg-offset-2 ">
			<?php
			$title = apply_filters('the_title', get_post()->post_title);
			echo '<h1>'.$title.'</h1>';
			$content = apply_filters('the_content', get_post()->post_content);
			echo $content;
			?>
		</div>
		<div class="col-xs-4 col-sm-3 col-md-5 col-lg-4">right rail</div>
	</div>
</div>