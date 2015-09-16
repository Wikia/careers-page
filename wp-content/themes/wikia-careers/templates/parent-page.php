<?php
/*
Template Name: Parent page template
*/

?>

<?php
if (!empty($_GET['gh_jid'])) {
  include new Roots_Wrapping('templates/job-offers/job-offer-single-simple-head.php');
} else {
  include new Roots_Wrapping('templates/career-paths-parent-menu.php');
}
?>


<div class="tab-content">

		<?php echo $post->post_content ?>
		<div class="ajax-loader">Give us a sec, loading content...</div>
		<div id="grnhse_app"></div>

</div>


<?php include new Roots_Wrapping('templates/career-paths-section.php'); ?>
