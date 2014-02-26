<?php
/* Sections and fields */
register_setting(
	'auto_submenu_options',
	'auto_submenu_options'
);

add_settings_section(
	'auto_submenu_section_pages',
	__( 'Basic Settings', 'auto_submenu' ),
	'auto_submenu_section_menus_desc',
	'auto_submenu_options'
);

function auto_submenu_section_menus_desc() {
	echo '<p>' . __( 'Use these options to enhance your pages.', 'auto_submenu' ) . '</p>';
}

add_settings_field(
	'auto_submenu_menus_auto_enabled',
	__( 'Menus to auto add subpages', 'auto_submenu' ),
	'auto_submenu_menus_auto_enabled',
	'auto_submenu_options',
	'auto_submenu_section_pages'
);
function auto_submenu_menus_auto_enabled() {
	$options = get_option('auto_submenu_options');
	if( isset( $options['menus_auto_enabled'] ) ) {
		$menus_auto_enabled = $options['menus_auto_enabled'];
	} else {
		$menus_auto_enabled = '';
	}

	$menus = get_terms( 'nav_menu', array( 'hide_empty' => false ) );

	?>

	<fieldset>
		<select id="auto_submenu_menus_auto_enabled" name="auto_submenu_options[menus_auto_enabled][]" multiple="multiple" size="4">
			<?php
			foreach ( $menus as $menu ) {
				if (in_array($menu->term_id,$menus_auto_enabled)) {
					$selected = 'selected="selected"';
				} else {
					$selected = '';
				}
			?>
				<option value="<?= $menu->term_id ?>" <?= $selected ?>><?= $menu->name ?></option>
			<?php
			}
			?>
		</select>
		<label><?php _e( 'Select menus to enable auto adding subpages on publish.', 'auto_submenu' ); ?></label><br />
	</fieldset>
<?php }

function auto_submenu_options_validate($input) {
	$valid = array();
	if( isset( $input['menus_auto_enabled'] ) ) {
		$valid['menus_auto_enabled'] = 1;
	}
	return $input;
}
