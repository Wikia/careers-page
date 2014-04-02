<footer class="content-info container" role="contentinfo">
  <div class="row">
    <div class="col-lg-12">
		<?php
		$pages = get_pages(array(
		'meta_key' => '_wp_page_template',
		'meta_value' => 'templates/footer-data.php',
		'number' => 1
		));
		foreach( $pages as $page ) {
			echo $page->post_title.'<br />';
			the_field('email_address', $page->ID);
			the_field('post_address', $page->ID);
			the_field('telephone_number', $page->ID);
			the_field('facebook_link', $page->ID);
			the_field('github_link', $page->ID);
		}
		?>
      <?php dynamic_sidebar('sidebar-footer'); ?>
      <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
    </div>
  </div>
</footer>
<div id="preloadedImages"></div>
<?php wp_footer(); ?>
