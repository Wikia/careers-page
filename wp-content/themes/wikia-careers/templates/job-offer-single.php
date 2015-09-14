<?php
/*
Template Name: Job offer template
*/
?>

<?php include new Roots_Wrapping('templates/job-offers/job-offer-single-head.php'); ?>


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
				<img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/'); ?>magda-avatar.jpg" alt="Magdalena"/>
				<span class="name">Magdalena Cellary</span>
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

			<?php
			while (have_posts()) : the_post();
				the_content();
			endwhile;
			?>

		</div>
	</div>
</article>


<?php include new Roots_Wrapping('templates/job-offers/job-offer-single-foot.php'); ?>
