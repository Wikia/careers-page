<?php
/*
Template Name: Career Path
*/

?>

<?php include new Roots_Wrapping('templates/career-paths-parent-menu.php'); ?>


<?php

$thumb = get_the_post_thumbnail( get_the_ID(), 'full' );

?>

<article class="career-path-content">
	<div class="container spaced-container">
		<div class="row">

			<div class="col-xxs-4 col-xs-4 col-sm-4 col-md-8 col-lg-6 col-lg-offset-1">
				<div class="featured-image">
					<?php
					echo $thumb;
					?>
				</div>

				<h2><?php echo $post->post_title ?></h2>
				<?php echo $post->post_content ?>
			</div>

			<div class="col-xxs-4 col-xs-4 col-sm-4 col-md-3 col-lg-4 col-md-offset-1 rail-col">
				<h2>Zobacz inne osoby:</h2>
				<?php include new Roots_Wrapping('templates/career-paths-items-menu.php'); ?>
			</div>

		</div>
	</div>
</article>
