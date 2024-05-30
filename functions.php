<?php

/**
 *  Functions for Pulp 
 *  https://developer.wordpress.org/themes/basics/theme-functions/
 * @package Pulp
 */

//$theme_version = '1.0.0';

if ( ! function_exists( 'pulp_setup' ) ) {

	/**
	 * Initialize theme defaults and add support for WordPress features.
	 */
	function pulp_setup() {

		// Enqueue editor stylesheet.
		add_editor_style( get_template_directory_uri() . '/editor-style.css' );

		// Disable core block inline styles.
		add_filter( 'should_load_separate_core_block_assets', '__return_false' );

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );

		// Include admin notice.
		require_once get_template_directory() . '/inc/admin-notices.php';	

	}
}
add_action( 'after_setup_theme', 'pulp_setup' );

/**
 * Enqueue theme stylesheet and script.
 */
function pulp_enqueue_stylesheet_script() {

	// Enqueue theme stylesheet.
	wp_enqueue_style( 'pulp', get_template_directory_uri() . 'build/app.min.css', array(), wp_get_theme( 'pulp' )->get( 'Version' ) );

	// Enqueue theme script.
	wp_enqueue_script( 'pulp', get_template_directory_uri() . '/build/app.min.js', array('jquery'), '1.0', true );

}
add_action( 'wp_enqueue_scripts', 'pulp_enqueue_stylesheet_script' );



