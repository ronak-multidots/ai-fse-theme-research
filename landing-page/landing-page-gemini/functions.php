<?php
/**
 * LaslesVPN Theme Functions
 */

if ( ! function_exists( 'laslesvpn_setup' ) ) :
	function laslesvpn_setup() {
		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );
	}
endif;
add_action( 'after_setup_theme', 'laslesvpn_setup' );

function laslesvpn_enqueue_scripts() {
	// Enqueue Google Fonts (Rubik)
	wp_enqueue_style( 'laslesvpn-fonts', 'https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap', array(), null );
	
	// Enqueue Main Stylesheet
	wp_enqueue_style( 'laslesvpn-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

	// Enqueue Custom Scripts
	wp_enqueue_script( 'laslesvpn-slider', get_template_directory_uri() . '/assets/js/slider.js', array(), wp_get_theme()->get( 'Version' ), true );
}
add_action( 'wp_enqueue_scripts', 'laslesvpn_enqueue_scripts' );

/**
 * Register Custom Block Styles
 */
function laslesvpn_register_block_styles() {
	register_block_style(
		'core/list',
		array(
			'name'         => 'lasles-check-list',
			'label'        => __( 'Lasles Checkmark List', 'laslesvpn' ),
			'is_default'   => false,
		)
	);

	register_block_style(
		'core/list',
		array(
			'name'         => 'pricing-list',
			'label'        => __( 'Pricing Checkmark List', 'laslesvpn' ),
			'is_default'   => false,
		)
	);
}
add_action( 'init', 'laslesvpn_register_block_styles' );
