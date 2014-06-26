<?php
/*
Template Name: Parent page template
*/

?>

<?php include new Roots_Wrapping('templates/career-paths-parent-menu.php'); ?>



<div class="tab-content">


	<section class="tab-pane active container job-offers-list" id="job-offers">

				<?php echo $post->post_content ?>

				<?php
				//show list of all subpages
				$pages = get_pages( array(
					'child_of' =>  get_the_ID(),
					'parent' =>  get_the_ID(),
//					'sort_column' => 'post_date',
//					'sort_order' => 'ASC'
				) );
				foreach ( $pages as $page ) :
					$page_link = get_page_link( $page->ID );
					$post_title = $page->post_title;
					$content = apply_filters('the_content', $page->post_content);
					$custom_fields = get_post_custom($page->ID);
					$post_header_message = isset($custom_fields['post_subtitle']) ? $custom_fields['post_subtitle'][0] : '';
					?>
					<div class="offer-item">
						<a href="<?php echo $page_link ?>" class="container spaced-container">
							<h2><?php echo $post_title ?></h2>
							<p class="short-descr"><?php echo $post_header_message ?></p>
						</a>
					</div>
				<?php
				endforeach;
				?>

	</section>


	<div class="tab-pane container spaced-container" id="recruitment-process">off2</div>


</div>


<?php include new Roots_Wrapping('templates/career-paths-section.php'); ?>
