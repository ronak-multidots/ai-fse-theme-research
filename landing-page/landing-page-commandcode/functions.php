<?php
/**
 * LaslesVPN theme setup and assets.
 *
 * @package LaslesVPN
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register theme supports and enqueue assets.
 */
function laslesvpn_setup() {
	// Core block styles and editor styles.
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );

	// Remove default core block patterns to keep the editor clean.
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', 'laslesvpn_setup' );

/**
 * Register the LaslesVPN block pattern category.
 */
function laslesvpn_register_pattern_category() {
	register_block_pattern_category(
		'laslesvpn',
		array( 'label' => __( 'LaslesVPN', 'laslesvpn' ) )
	);
}
add_action( 'init', 'laslesvpn_register_pattern_category' );

/**
 * Enqueue the Rubik font family and front-end styles.
 */
function laslesvpn_enqueue_assets() {
	wp_enqueue_style(
		'laslesvpn-fonts',
		'https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap',
		array(),
		'1.0.0'
	);

	wp_enqueue_style(
		'laslesvpn-style',
		get_stylesheet_uri(),
		array( 'laslesvpn-fonts' ),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'laslesvpn_enqueue_assets' );

/**
 * Enqueue editor styles.
 */
function laslesvpn_enqueue_editor_assets() {
	wp_enqueue_style(
		'laslesvpn-editor',
		get_stylesheet_directory_uri() . '/assets/editor.css',
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'enqueue_block_editor_assets', 'laslesvpn_enqueue_editor_assets' );
