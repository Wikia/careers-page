<?php

/* Get root page id */
$ancestors = get_post_ancestors( $post->ID );
$root = count( $ancestors ) - 1;
$parent = $ancestors[$root];


/* Get direct children of root */
$root_sub_pages = get_pages( array(
	'child_of' =>  $parent,
	'parent' =>  $parent,
	'sort_column' => 'post_date',
	'sort_order' => 'ASC'
) );

?>

<ul class="nav nav-tabs container spaced-container subtext-font-size">

<?php

foreach ( $root_sub_pages as $sub_page ) :
	$activeAttrText = ( is_tree($sub_page->ID) ) ? ' class="active"' : '';
	$sub_page_link = get_page_link( $sub_page->ID );
	$sub_post_title = $sub_page->post_title;

?>

	<li<?php echo $activeAttrText ?>><a href="<?php echo $sub_page_link ?>"><?php echo $sub_post_title ?></a></li>

<?php
endforeach;
?>

</ul>
