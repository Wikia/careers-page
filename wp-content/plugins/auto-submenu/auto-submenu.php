<?php

/*
Plugin Name: Auto Submenu
Plugin URI: http://jamocreations.com/en/artikelen/auto-submenu
Description: By default, WordPress can only automatically add new top-level pages to your custom menu. With this plugin, new child pages will also be automatically added to your custom menu.
Version: 0.2
Author: Jamo Web Creations
Author URI: http://jamocreations.com/
License: GPL2
*/

/*  Copyright 2012  Jamo Web Creations  (email : hello@jamocreations.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

class AutoSubmenu {

	/**
	 * Constructor
	 */
	function __construct() {
		add_action( 'save_post', array( &$this, 'on_publish_page' ) );
	}

	/**
	 * When publishing a new child page, add it to the appropriate custom menu.
	 */
	function on_publish_page( $post_id ) {
		$options = get_option('auto_submenu_options');

		$menus_auto_enabled = array();
		if( isset( $options['menus_auto_enabled'] ) ) {
			$menus_auto_enabled = $options['menus_auto_enabled'];
		}

		// Theme supports custom menus?
		if ( ! current_theme_supports( 'menus' ) ) {
			return;
		}

		// Published page has parent?
		$post = get_post( $post_id );
		if ( $post->post_type != 'page' ) {
			return;
		}
		if ( ! $post->post_parent ) {
			return;
		}
		if ( $post->post_status != 'publish' ) {
			return;
		}

		// Loop through the menus to find page parent
		foreach ( $menus_auto_enabled as $menu_id ) {
			$menu_parent = NULL;
			$menu_items = wp_get_nav_menu_items( $menu_id, array( 'post_status' => 'publish' ) );
			if ( is_array( $menu_items ) ) {
				$postFound = false;
				$parentFound = false;
				foreach ( $menu_items as $menu_item ) {

					if ( $menu_item->object_id == $post->ID ) {
						//already on list
						$postFound = true;
					}
					if ( $menu_item->object_id == $post->post_parent ) {
						//parent found
						$parentFound = true;
						$parentID = $menu_item->ID;
					}
				}

				// Add new item
				if ( !$postFound && $parentFound ) {
					wp_update_nav_menu_item( $menu_id, 0, array(
						'menu-item-object-id' => $post->ID,
						'menu-item-object' => $post->post_type,
						'menu-item-parent-id' => $parentID,
						'menu-item-type' => 'post_type',
						'menu-item-status' => $post->post_status
					) );
				}

			}
		}
	}

}

$auto_submenu = new AutoSubmenu();

/* Plugin settings */
function auto_submenu_admin_init() {
	include __DIR__ . "/basic-settings.php";
}

function auto_submenu_create_settings_menu() {
	add_options_page(
		'Auto submenu',
		'Auto submenu',
		'manage_options',
		'auto-submenu',
		'auto_submenu_plugin_options'
	);
}

function auto_submenu_plugin_options() {

	?>
	<div class="wrap">
		<h2><?php _e( 'Auto submenu', 'auto_submenu' ); ?></h2>
		<div class="wrap-left">
			<form method="post" action="options.php">
				<?php settings_fields( 'auto_submenu_options' ); ?>
				<?php do_settings_sections( 'auto_submenu_options' ); ?>
				<br />
				<input name="Submit" type="submit" class="button-primary" value="<?php esc_attr_e( 'Save Options', 'auto_submenu' ); ?>" />
			</form>
		</div>
	</div>

<?php
}

if ( is_admin() ) {
	add_action('admin_menu', 'auto_submenu_create_settings_menu');
	add_action('admin_init', 'auto_submenu_admin_init');
}

