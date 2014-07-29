<?php
/*
Template Name: Wide Images Narrow Paragraphs
*/
?>

<?php include new Roots_Wrapping('templates/career-paths-parent-menu.php');?>


<div class="tab-content">
	<section class="wide-img-narrow-p regular-article">

		<?php echo apply_filters('the_content', $post->post_content); ?>

	</section>
</div>


<?php include new Roots_Wrapping('templates/career-paths-section.php'); ?>
