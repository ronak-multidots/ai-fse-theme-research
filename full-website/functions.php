<?php
/**
 * Flowbase Cooking theme functions and definitions.
 *
 * @package flowbase-cooking
 */

namespace FlowbaseCooking;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Set up theme defaults and register various WordPress features.
 */
function setup() {
	// Add support for block styles.
	add_theme_support( 'wp-block-styles' );

	// Enqueue editor styles.
	add_theme_support( 'editor-styles' );
	add_editor_style( 'style.css' );

	// Remove core block patterns to declutter the inserter experience.
	remove_theme_support( 'core-block-patterns' );

	// Add support for custom logo.
	add_theme_support(
		'custom-logo',
		array(
			'height'               => 100,
			'width'                => 300,
			'flex-width'           => true,
			'flex-height'          => true,
			'unlink-homepage-logo' => true,
		)
	);
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\setup' );

/**
 * Enqueue styles.
 */
function enqueue_style_sheet() {
	wp_enqueue_style( 'flowbase-cooking-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_style_sheet' );

/**
 * Register block pattern category.
 */
function register_pattern_category() {
	register_block_pattern_category(
		'flowbase-cooking',
		array( 'label' => __( 'Flowbase Cooking', 'flowbase-cooking' ) )
	);
}
add_action( 'init', __NAMESPACE__ . '\register_pattern_category' );
