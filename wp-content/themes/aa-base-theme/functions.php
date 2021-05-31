<?php
/**
 * aa-base functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package aa-base
 */

if ( ! function_exists( 'aa_base_setup' ) ) :
	function aa_base_setup() {
		load_theme_textdomain( 'default', get_template_directory() . '/languages' );
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'customize-selective-refresh-widgets' );
		add_theme_support( 'html5', array('search-form', 'gallery', 'caption', ));

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'header-menu' => esc_html__( 'Header', 'aa-base' ),
		));

	}
endif;

add_action( 'after_setup_theme', 'aa_base_setup' );


/**
 * Enqueue scripts and styles.
 */
function aa_base_scripts() {
	wp_enqueue_style( 'aa-base-wp-style', get_stylesheet_uri() );
	wp_deregister_script( 'wp-embed' );
	wp_deregister_script('cf7-grid-layout');
	wp_deregister_style('smart-grid');
	wp_deregister_style('contact-form-7');
	wp_deregister_style('cf7-grid-layout');
	wp_deregister_style('cf7-grid-post-css');
	wp_deregister_style('cf7-grid-public-css');
}
add_action( 'wp_enqueue_scripts', 'aa_base_scripts', 999 );


// Method 1: Filter.
function my_acf_google_map_api( $api ){
    $api['key'] = 'AIzaSyDHT0rtejpsRoaIfSoVTRM1r1DVxFmHwZU';
    return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

// Method 2: Setting.
function my_acf_init() {
    acf_update_setting('google_api_key', 'AIzaSyDHT0rtejpsRoaIfSoVTRM1r1DVxFmHwZU');
}
add_action('acf/init', 'my_acf_init');


//Include the additional PHP scripts

//require get_template_directory() . '/inc/register-polylang-strings.php'; //include for multilanguage polylang strings
require get_template_directory() . '/inc/header-functions.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/ajax-functions.php';


//Include custom post types here:

//require get_template_directory() . '/inc/cpt/cpt.php';


//Include image sizes here
add_image_size( 'hero-banner', 2600, 1095, true );
//add_image_size( 'email-banner', 600, 180, true );


