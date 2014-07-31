<?php

/**
 * Callback function to insert 'styleselect' into the $buttons array
 * @param Array $buttons
 * @return Array
 */
function tcf_mce_buttons_2($buttons) {
	array_unshift($buttons, 'styleselect');
	return $buttons;
}
add_filter('mce_buttons_2', 'tcf_mce_buttons_2');

/**
 * Adds custom style formats to style_formats in TinyMCE configuration
 * @param Array $settings TinyMCE configuration parameters
 * @return Array
 */
function tcf_tiny_mce_before_init($settings) {

	$style_formats = array(
		array('title' => 'Process h2', 'block' => 'h2', 'classes' => 'process-title'),
		array('title' => 'Right float comment', 'block' => 'p', 'classes' => 'right-float-comment gutter-left'),
		array('title' => 'Right float comment last', 'block' => 'p', 'classes' => 'right-float-comment right-float-comment-last gutter-left'),
		array('title' => 'Process paragraph', 'block' => 'p', 'classes' => 'process-paragraph'),
		array('title' => 'Process last paragraph', 'block' => 'p', 'classes' => 'process-paragraph-last'),
	);
	$settings['style_formats'] = json_encode( $style_formats );

	return $settings;
}
add_filter('tiny_mce_before_init', 'tcf_tiny_mce_before_init');
