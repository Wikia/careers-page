<?php
/**
 * Roots includes
 */
require_once locate_template('/lib/utils.php');                            // Utility functions
require_once locate_template('/lib/init.php');                             // Initial theme setup and constants
require_once locate_template('/lib/wrapper.php');                          // Theme wrapper class
require_once locate_template('/lib/sidebar.php');                          // Sidebar class
require_once locate_template('/lib/config.php');                           // Configuration
require_once locate_template('/lib/activation.php');                       // Theme activation
require_once locate_template('/lib/titles.php');                           // Page titles
require_once locate_template('/lib/cleanup.php');                          // Cleanup
require_once locate_template('/lib/nav.php');                              // Custom nav modifications
require_once locate_template('/lib/gallery.php');                          // Custom [gallery] modifications
require_once locate_template('/lib/comments.php');                         // Custom comments modifications
require_once locate_template('/lib/relative-urls.php');                    // Root relative URLs
require_once locate_template('/lib/widgets.php');                          // Sidebars and widgets
require_once locate_template('/lib/scripts.php');                          // Scripts and stylesheets
require_once locate_template('/lib/custom.php');                           // Custom functions
require_once locate_template('/lib/share-buttons.php');                    // Share buttons
require_once locate_template('/lib/tinymce-custom-features.php');          // TinyMCE editor custom features


$defaults = array(
	'default-image'          => '',
	'random-default'         => false,
	'width'                  => 0,
	'height'                 => 0,
	'flex-height'            => false,
	'flex-width'             => false,
	'default-text-color'     => '',
	'header-text'            => false,
	'uploads'                => true,
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $defaults );


function wikia_careers_theme_customizer( $wp_customize ) {
	$wp_customize->add_section( 'wikia_careers_logo_section' , array(
		'title'       => __( 'Logo', 'wikia_careers' ),
		'priority'    => 30,
		'description' => 'Upload a logo to replace the default site name and description in the header',
	) );
	$wp_customize->add_setting( 'wikia_careers_logo' );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wikia_careers_logo', array(
		'label'    => __( 'Logo', 'wikia_careers' ),
		'section'  => 'wikia_careers_logo_section',
		'settings' => 'wikia_careers_logo',
	) ) );

	//header description
	$wp_customize->add_section( 'wikia_careers_header_desc_section' , array(
		'title'       => __( 'Header message', 'wikia_careers' ),
		'priority'    => 31,
		'description' => 'Upload a logo to replace the default site name and description in the header',
	) );
	$wp_customize->add_setting( 'wikia_careers_header_desc' );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'wikia_careers_header_desc', array(
		'label'    => __( 'Header message', 'wikia_careers' ),
		'section'  => 'wikia_careers_header_desc_section',
		'settings' => 'wikia_careers_header_desc',
	) ) );
	$wp_customize->add_setting( 'wikia_careers_header_desc_sub' );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'wikia_careers_header_desc_sub', array(
		'label'    => __( 'Header sub message', 'wikia_careers' ),
		'section'  => 'wikia_careers_header_desc_section',
		'settings' => 'wikia_careers_header_desc_sub',
	) ) );
	$wp_customize->add_setting( 'wikia_careers_header_button' );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'wikia_careers_header_button', array(
		'label'    => __( 'Header button text', 'wikia_careers' ),
		'section'  => 'wikia_careers_header_desc_section',
		'settings' => 'wikia_careers_header_button',
	) ) );
}
add_action('customize_register', 'wikia_careers_theme_customizer');


/**
 * Register widgets areas.
 *
 */
function arphabet_widgets_init() {
	/* Register main widgetized area */
	register_sidebar( array(
		'name' => 'Home main area in Polish',
		'id' => 'home_main_widget',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );

        register_sidebar( array(
                'name' => 'Home main area in English',
                'id' => 'home_main_widget_en_US',
                'before_widget' => '<div>',
                'after_widget' => '</div>',
                'before_title' => '<h2 class="rounded">',
                'after_title' => '</h2>',
        ) );

	/* Register Second secion on mainpage - area */
	register_sidebar( array(
		'name' => 'Second section - mainpage in Polish',
		'id' => 'second_section_mainpage',
		'before_widget' => '',
		'after_widget' => "\n",
		'before_title' => '<h2 class="text-center">',
		'after_title' => '</h2>',
	) );

	register_sidebar( array(
                'name' => 'Second section - mainpage in English',
                'id' => 'second_section_mainpage_en_US',
                'before_widget' => '',
                'after_widget' => "\n",
                'before_title' => '<h2 class="text-center">',
                'after_title' => '</h2>',
	) );


	/* Register quick contact form area */
	register_sidebar( array(
		'name' => 'Quick contact form in Polish',
		'id' => 'quick_contact_form',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );

	register_sidebar( array(
                'name' => 'Quick contact form in English',
                'id' => 'quick_contact_form_en_US',
                'before_widget' => '<div>',
                'after_widget' => '</div>',
                'before_title' => '<h2 class="rounded">',
                'after_title' => '</h2>',
        ) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );


/**
 * Add excerpts to pages
 */
add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
	add_post_type_support( 'page', 'excerpt' );
}


/**
 * Custom excerpt function
 * Gets post excerpt by post ID.
 * If post doesn't have excerpt, prepares own excerpt using 35 first words
 *
 * @param Int $post_id Post ID
 * @return String
 */
function get_excerpt_by_id( $post_id ) {

	$the_post = get_post($post_id); //Gets post ID

	// Try to get excerpt defined for post
	$the_excerpt = $the_post->post_excerpt;
	if ( !empty( $the_excerpt ) ) {
		return $the_excerpt;
	}

	// Prepare auto excerpt
	$the_excerpt = $the_post->post_content; // Gets post_content to be used as a basis for the excerpt
	$excerpt_length = 35; // Sets excerpt length by word count
	$the_excerpt = strip_tags(strip_shortcodes($the_excerpt)); // Strips tags and images
	$words = explode(' ', $the_excerpt, $excerpt_length + 1);
	if(count($words) > $excerpt_length) {
		array_pop($words);
		array_push($words, '…');
		$the_excerpt = implode(' ', $words);
	}

	return $the_excerpt;

}


/**
 * Display navigation to next/previous set of posts when applicable.
 *
 *
 * @return void
 */
function show_paging_nav() {
	// Don't print empty markup if there's only one page.
	if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
		return;
	}

	$paged        = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
	$pagenum_link = html_entity_decode( get_pagenum_link() );
	$query_args   = array();
	$url_parts    = explode( '?', $pagenum_link );

	if ( isset( $url_parts[1] ) ) {
		wp_parse_str( $url_parts[1], $query_args );
	}

	$pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
	$pagenum_link = trailingslashit( $pagenum_link ) . '%_%';

	$format  = $GLOBALS['wp_rewrite']->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
	$format .= $GLOBALS['wp_rewrite']->using_permalinks() ? user_trailingslashit( 'page/%#%', 'paged' ) : '?paged=%#%';

	// Set up paginated links.
	$links = paginate_links( array(
		'base'     => $pagenum_link,
		'format'   => $format,
		'total'    => $GLOBALS['wp_query']->max_num_pages,
		'current'  => $paged,
		'mid_size' => 1,
		'add_args' => array_map( 'urlencode', $query_args ),
		'prev_text' => __( '&larr; Previous', 'twentyfourteen' ),
		'next_text' => __( 'Next &rarr;', 'twentyfourteen' ),
	) );

	if ( $links ) :

		?>
		<nav class="navigation paging-navigation" role="navigation">
			<h3 class="screen-reader-text"><?php _e( 'Posts navigation', 'wikia-careers' ); ?></h3>
			<div class="pagination loop-pagination">
				<?php echo $links; ?>
			</div><!-- .pagination -->
		</nav><!-- .navigation -->
	<?php
	endif;
}

// Allow uploads of svg files
function cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );


// Disable roots sidebar for all pages
function disable_sidebar_for_theme () {
	return false;
}
add_action( 'roots_display_sidebar', 'disable_sidebar_for_theme' );


// Define thumbnails
add_image_size( 'container-md-thumb', 924, 300, 'soft' );
add_image_size( 'news-section-thumb', 578, 321, 'soft' );


// Remove auto adding width and height attributes to img tags
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
	$html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
	return $html;
}

/**
 * Determine whether current post child of provided root post
 * Looks through whole tree
 * @param int $pid Post ID - The ID of the page we're looking for pages underneath
 * @return boolean
 */
function is_tree($pid) {
	global $post;         // load details about this page
	if( is_page() && ( $post->post_parent == $pid || is_page($pid) )
		|| ( $pid==$post->ID )
	) {
		return true;
	} else {
		return false;
	}
};

/**
 * Determine whether page should use full height banner of fixed height
 * Following pages should have full height banner
 * - posts
 * - child pages of pages using play-with-us.php template
 * @return bool
 */
function has_full_height_banner() {
	global $post;

	if (is_single()) {
		return true;
	}

	$pages = get_posts(
		array(
			'meta_key' => '_wp_page_template',
			'meta_value' => 'templates/play-with-us.php',
			'post_type' => 'page'
		)
	);

	foreach($pages as $pageParent){
		if( $post->post_parent == $pageParent->ID ) {
			return true;
		}
	}

	return false;
}


/**
 * Buffer the output except headers to send as a whole at the end
 * It allows late redirect to a different page
 */
function app_output_buffer() {
	ob_start();
}
add_action('init', 'app_output_buffer');
