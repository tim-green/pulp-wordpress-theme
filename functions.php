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

	}
}
add_action( 'after_setup_theme', 'pulp_setup' );

/**
 * Enqueue theme stylesheet and script.
 */
function pulp_enqueue_stylesheet_script() {

	// Enqueue theme stylesheet.
	wp_enqueue_style( 'pulp', get_template_directory_uri() . 'assets/css/app.min.css', array(), wp_get_theme( 'pulp' )->get( 'Version' ) );

	// Enqueue theme script.
	wp_enqueue_script( 'pulp', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), '1.0', true );

}
add_action( 'wp_enqueue_scripts', 'pulp_enqueue_stylesheet_script' );

/**
 * Register block styles.
 */
function pulp_register_block_styles() {

	$block_styles = array(
		'core/columns' => array(
			'column-reverse' => __( 'Reverse', 'pulp' ),
		),
		'core/cover' => array(
			'gradient' => __( 'Gradient', 'pulp' )
		),
		'core/group' => array(
			'shadow-faint' => __( 'Shadow (Faint)', 'pulp' ),
			'shadow-light' => __( 'Shadow (Light)', 'pulp' ),
			'shadow-solid' => __( 'Shadow (Solid)', 'pulp' ),
		),
		'core/list' => array(
			'no-style' => __( 'No Style', 'pulp' ),
		),
		'core/navigation-link' => array(
			'underline' => __( 'Underline', 'pulp' )
		),
		'core/social-links' => array(
			'outline' => __( 'Outline', 'pulp' ),
		),
	);

	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style_name => $style_label ) {
			register_block_style(
				$block,
				array(
					'name'  => $style_name,
					'label' => $style_label,
				)
			);
		}
	}

}
add_action( 'init', 'pulp_register_block_styles' );

/**
 * Register pattern category.
 */
function pulp_register_pattern_category( $slug, $label, $description ) {
	register_block_pattern_category(
		'pulp-' . $slug,
		array(
			'label'       => __( $label, 'pulp' ),
			'description' => __( $description, 'pulp' ),
		)
	);
}

/**
 * Register pattern categories.
 */
function pulp_register_pattern_categories() {
	$categories = array(
		'call-to-action' => array( __( 'Call to Action', 'pulp' ), __( 'A collection of call to action patterns for Pulp.', 'pulp' ) ),
		'content'        => array( __( 'Content', 'pulp' ), __( 'A collection of content patterns for Pulp.', 'pulp' ) ),
		'gallery'        => array( __( 'Gallery', 'pulp' ), __( 'A collection of gallery patterns for Pulp.', 'pulp' ) ),
		'hero'           => array( __( 'Hero', 'pulp' ), __( 'A collection of hero patterns for Pulp.', 'pulp' ) ),
		'pricing'        => array( __( 'Pricing', 'pulp' ), __( 'A collection of pricing patterns for Pulp.', 'pulp' ) ),
		'team'           => array( __( 'Team', 'pulp' ), __( 'A collection of team patterns for Pulp.', 'pulp' ) ),
		'template'       => array( __( 'Template', 'pulp' ), __( 'A collection of template patterns for Pulp.', 'pulp' ) ),
		'testimonials'   => array( __( 'Testimonials', 'pulp' ), __( 'A collection of testimonials patterns for Pulp.', 'pulp' ) ),
		'theme'          => array( __( 'Theme', 'pulp' ), __( 'A collection of theme patterns for Pulp.', 'pulp' ) ),
	);

	foreach ( $categories as $slug => $details ) {
		pulp_register_pattern_category( $slug, $details[0], $details[1] );
	}
}
add_action( 'init', 'pulp_register_pattern_categories' );

