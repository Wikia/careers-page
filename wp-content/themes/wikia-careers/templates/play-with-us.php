<?php
/*
Template Name: Play with us
*/

?>

<?php include new Roots_Wrapping('templates/career-paths-parent-menu.php');?>


<div class="tab-content">
	<section class="container life-in-wikia padding-section-vertical">

	<?php
	/* Show content of parent page at the top */
	echo apply_filters('the_content', $post->post_content);

	/* Show list of subpages */
	$sub_pages = get_pages( array(
		'child_of' =>  $post->ID,
		'parent' =>  $post->ID,
		'sort_column' => 'post_date',
		'sort_order' => 'ASC'
	) );

	foreach ( $sub_pages as $sub_page ) :

		$sub_page_link = get_page_link( $sub_page->ID );
		$sub_post_title = $sub_page->post_title;
		$sub_post_excerpt = $sub_page->post_excerpt;
		$sub_content = apply_filters('the_content', $sub_page->post_content);

		$sub_thumb_link = wp_get_attachment_image_src( get_post_thumbnail_id( $sub_page->ID ), 'container-md-thumb' );
		$sub_thumb_link = $sub_thumb_link[0];
		?>

		<div class="play-with-us-list-item">
			<div class="item-title" style="background-image: url('<?php echo $sub_thumb_link ?>')">
				<h3><?php echo $sub_post_title ?></h3>
			</div>
			<p class="item-description">
				<?php echo $sub_post_excerpt ?>
			</p>
			<a href="<?php echo $sub_page_link ?>" class="btn-wikia btn-arrow icon-chevron-brand_pri">Przeczytaj artykuł</a>
		</div>
	<?php
	endforeach;
	?>

	</section>
</div>


<?php include new Roots_Wrapping('templates/career-paths-section.php'); ?>
