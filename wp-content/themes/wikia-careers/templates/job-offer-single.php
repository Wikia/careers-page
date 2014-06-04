<?php
/*
Template Name: Job offer template
*/
?>

<?php include new Roots_Wrapping('templates/job-offers/job-offer-single-head.php'); ?>


<!--<div class="container prev-next-nav">-->
<!--	<div class="prev-next-buttons" id="stickyHandNav">-->
<!--		<button class="prev"></button>-->
<!--		<button class="next"><span></span></button>-->
<!--		<button class="back"></button>-->
<!--	</div>-->
<!--</div>-->

<article class="container spaced-container job-offer-content">
	<div class="row">
		<div class="col-xxs-4 col-xs-4 col-sm-4 col-md-8 col-lg-offset-1 col-lg-6 excerpt-col">

			<?php
			$custom_fields = get_post_custom();
			if (isset($custom_fields['offer_head_note'])) {
				echo $custom_fields['offer_head_note'][0];
			}
			?>

		</div>
		<div class="col-xxs-4 col-xs-4 col-sm-2 col-md-4 col-lg-4 rail-col">
			<div class="recruiter-info">
				<img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/'); ?>mateusz-avatar.jpg" alt="Mateusz"/>
				<span class="name">Mateusz Szumała</span>
				<span class="function">Rekruter</span>
			</div>
			<?php
			if (isset($custom_fields['offer_right_rail'])) {
				echo $custom_fields['offer_right_rail'][0];
			}
			?>

			<ul class="tags">
				<?php foreach (get_the_tags($post->ID) as $tag) : ?>
					<li>
						<span><?php echo $tag->name ?><span>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col-xxs-4 col-xs-4 col-sm-6 col-md-12 col-lg-10 col-lg-offset-1 job-offer-details">

			<?php while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>



		</div>
	</div>
</article>


<?php include new Roots_Wrapping('templates/job-offers/job-offer-single-foot.php'); ?>
