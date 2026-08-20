<?php
/**
 * MEGAvoters child theme (Hello Elementor).
 *
 * Landing templates live here. RSVP / device / encounter logic belongs in a plugin.
 *
 * @package MEGAvoters
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'MEGAVOTERS_THEME_VERSION', '1.3.2' );

require_once get_stylesheet_directory() . '/inc/helpers.php';
require_once get_stylesheet_directory() . '/inc/setup-pages.php';
require_once get_stylesheet_directory() . '/inc/coach-tom-welcome.php';

/**
 * Load portal CSS on MEGAvoters templates only.
 *
 * @return void
 */
function megavoters_enqueue_styles() {
	if ( ! megavoters_is_portal() ) {
		wp_enqueue_style(
			'megavoters-style',
			get_stylesheet_uri(),
			array( 'hello-elementor-theme-style' ),
			MEGAVOTERS_THEME_VERSION
		);
		return;
	}

	wp_dequeue_style( 'hello-elementor' );
	wp_dequeue_style( 'hello-elementor-theme-style' );
	wp_dequeue_style( 'hello-elementor-header-footer' );

	wp_enqueue_style(
		'megavoters-portal',
		megavoters_asset_url( 'css/portal.css' ),
		array(),
		MEGAVOTERS_THEME_VERSION
	);

	if ( is_page( 'guidelines' ) ) {
		$path = get_stylesheet_directory() . '/assets/css/guidelines.css';
		wp_enqueue_style(
			'megavoters-guidelines',
			megavoters_asset_url( 'css/guidelines.css' ),
			array( 'megavoters-portal' ),
			file_exists( $path ) ? (string) filemtime( $path ) : MEGAVOTERS_THEME_VERSION
		);
	}
}
add_action( 'wp_enqueue_scripts', 'megavoters_enqueue_styles', 30 );

/**
 * Document title for the discovery landing.
 *
 * @param string $title Title.
 * @return string
 */
function megavoters_document_title( $title ) {
	if ( is_front_page() ) {
		return __( 'MEGAvoters Limited Pilot | Discover United Citizens', 'megavoters' );
	}

	if ( is_page( 'guidelines' ) ) {
		return __( 'Guidelines | Oligopoly & United Citizens', 'megavoters' );
	}

	if ( is_page( 'terms' ) ) {
		return __( 'Terms of Service | United Citizens Community Checkers', 'megavoters' );
	}

	return $title;
}
add_filter( 'pre_get_document_title', 'megavoters_document_title' );

/**
 * Use child templates for theme-owned page slugs.
 *
 * @param string $template Template path.
 * @return string
 */
function megavoters_template_include( $template ) {
	if ( is_admin() || ! is_singular( 'page' ) ) {
		return $template;
	}

	$slug = get_post_field( 'post_name', get_queried_object_id() );
	$map  = megavoters_page_templates();

	if ( ! isset( $map[ $slug ] ) ) {
		return $template;
	}

	$file = get_stylesheet_directory() . '/' . $map[ $slug ];

	return file_exists( $file ) ? $file : $template;
}
add_filter( 'template_include', 'megavoters_template_include', 99 );

/**
 * Hide Hello Elementor page titles on portal pages.
 *
 * @param bool $show Whether to show.
 * @return bool
 */
function megavoters_hide_hello_title( $show ) {
	return megavoters_is_portal() ? false : $show;
}
add_filter( 'hello_elementor_page_title', 'megavoters_hide_hello_title' );
