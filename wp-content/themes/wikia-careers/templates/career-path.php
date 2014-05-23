<?php
/*
Template Name: Career Path
*/

?>

<?php include new Roots_Wrapping('templates/career-paths-parent-menu.php'); ?>
<?php //include new Roots_Wrapping('templates/career-paths-items-menu.php'); ?>


<?php

$thumb = get_the_post_thumbnail( get_the_ID(), 'full' );

?>

<article class="career-path-content">
	<div class="container spaced-container">
		<div class="row">
			<div class="col-xxs-4 col-xs-4 col-sm-4 col-md-8 col-lg-offset-1 col-lg-6 excerpt-col">
				<div class="featured-image">
					<?php
					echo $thumb;
					?>
				</div>

				<h2><?php echo $post->post_title ?></h2>
				<?php echo $post->post_content ?>
			</div>
		</div>
	</div>
</article>

<?php include new Roots_Wrapping('templates/contact-section.php'); ?>
