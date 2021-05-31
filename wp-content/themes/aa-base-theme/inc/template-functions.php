<?php

/**
 * Functions which enhance the theme by hooking into WordPress
*/
function support_revisions_for_pages() {
	add_post_type_support( 'page', 'revisions' );
	add_post_type_support( 'post', 'revisions' );
}
add_action( 'init', 'support_revisions_for_pages' );


if (function_exists('acf_set_options_page_menu')){
	if( function_exists('acf_set_options_page_title') ) {
		acf_set_options_page_title( __('Website Options') );
	}
}

if( function_exists('acf_add_options_page') ) {
	
	/* acf_add_options_page(array(
		'page_title' 	=> 'Appartements',
		'menu_title'	=> 'Appartements',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'icon_url' => 'dashicons-building',
		'redirect'		=> false
	)); */
	
}


/* function redirect_page_from_the_field() {
	if(get_field('redirect_to')){
		wp_redirect(get_permalink(get_field('redirect_to')[0]->ID), 301);
	}
}
add_action('template_redirect', 'redirect_page_from_the_field'); */



function aa_add_async_defer_attribute($tag, $handle) {
	if ( 'googleapis' !== $handle )
	return $tag;
	return str_replace( ' src', ' async defer src', $tag );
}
add_filter('script_loader_tag', 'aa_add_async_defer_attribute', 10, 2);



