<?php
/* Get list of direct subpages */


$sub_pages = get_pages( array(
	'child_of' => $post->post_parent,
	'parent' => $post->post_parent,
	'sort_column' => 'post_date',
	'sort_order' => 'ASC'
) );

?>

<ul class="side-nav">

	<?php

	foreach ( $sub_pages as $sub_page ) :
		$activeAttrText = ( is_tree($sub_page->ID) ) ? ' class="active"' : '';
		$sub_page_link = get_page_link( $sub_page->ID );
		$sub_post_title = $sub_page->post_title;

		?>

		<li<?php echo $activeAttrText ?>><a href="<?php echo $sub_page_link ?>"><?php echo $sub_post_title ?></a></li>

	<?php
	endforeach;
	?>

</ul>

