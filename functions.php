<?php
/**
 * Title: Main template functions
*
* @category Wordpress Theme
* @package  Things & Stuff
* @since    1.0
* @author   Ryan Leeson
* @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
* @link     http://www.ryanleeson.com/
*/

function tns_script_include() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style( 'tns-main', get_template_directory_uri() . '/css/main.css', array( 'bootstrap' ) );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ), '3.3.4', true );
	wp_enqueue_script( 'tns-main-js', get_template_directory_uri() . '/js/main.js', array( 'bootstrap-js', 'underscore' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'tns_script_include' );

function tns_init() {
	register_nav_menus(array(
		'tns-main'	=> 'Header Navigation'
	));
}

tns_init();