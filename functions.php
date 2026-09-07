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

define( 'MEGAVOTERS_THEME_VERSION', '1.3.7' );

require_once get_stylesheet_directory() . '/inc/helpers.php';
require_once get_stylesheet_directory() . '/inc/setup-pages.php';
require_once get_stylesheet_directory() . '/inc/start-handoff.php';
require_once get_stylesheet_directory() . '/inc/doorway-counts.php';
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

	if ( is_page( 'start' ) ) {
		$path = get_stylesheet_directory() . '/assets/css/start.css';
		wp_enqueue_style(
			'megavoters-start',
			megavoters_asset_url( 'css/start.css' ),
			array(),
			file_exists( $path ) ? (string) filemtime( $path ) : MEGAVOTERS_THEME_VERSION
		);

		$script = get_stylesheet_directory() . '/assets/js/start.js';
		wp_enqueue_script(
			'megavoters-start',
			megavoters_asset_url( 'js/start.js' ),
			array(),
			file_exists( $script ) ? (string) filemtime( $script ) : MEGAVOTERS_THEME_VERSION,
			true
		);
		wp_localize_script(
			'megavoters-start',
			'MEGAVOTER_START_CONFIG',
			array(
				'observeUrl'         => megavoters_discover_url(),
				'startEndpoint'      => megavoters_start_endpoint(),
				'doorwayEndpoint'    => rest_url( 'megavoters/v1/doorway' ),
				'allowedHandoffHost' => megavoters_handoff_host(),
				'nonce'              => wp_create_nonce( 'wp_rest' ),
			)
		);
		return;
	}

	if ( is_page( 'discover' ) ) {
		$path = get_stylesheet_directory() . '/assets/css/discover.css';
		wp_enqueue_style(
			'megavoters-discover',
			megavoters_asset_url( 'css/discover.css' ),
			array(),
			file_exists( $path ) ? (string) filemtime( $path ) : MEGAVOTERS_THEME_VERSION
		);
		return;
	}

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

	if ( is_page( 'oligopoly' ) ) {
		$path = get_stylesheet_directory() . '/assets/css/go-live-moment.css';
		wp_enqueue_style(
			'megavoters-go-live-moment',
			megavoters_asset_url( 'css/go-live-moment.css' ),
			array( 'megavoters-portal' ),
			file_exists( $path ) ? (string) filemtime( $path ) : MEGAVOTERS_THEME_VERSION
		);
	}

	if ( is_page( 'treasured-penny' ) ) {
		$path = get_stylesheet_directory() . '/assets/css/treasured-penny.css';
		wp_enqueue_style(
			'megavoters-treasured-penny',
			megavoters_asset_url( 'css/treasured-penny.css' ),
			array( 'megavoters-portal' ),
			file_exists( $path ) ? (string) filemtime( $path ) : MEGAVOTERS_THEME_VERSION
		);
	}

	if ( is_page( 'the-pilot' ) ) {
		$path = get_stylesheet_directory() . '/assets/css/the-pilot.css';
		wp_enqueue_style(
			'megavoters-the-pilot',
			megavoters_asset_url( 'css/the-pilot.css' ),
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

	if ( is_page( 'treasured-penny' ) ) {
		return __( 'The Treasured Penny | MEGAvoters', 'megavoters' );
	}

	if ( is_page( 'the-pilot' ) ) {
		return __( 'The Pilot | $30 Trade Value + $4 Social Impact | MEGAvoters', 'megavoters' );
	}

	if ( is_page( 'start' ) ) {
		return __( 'Begin | MEGAvoters', 'megavoters' );
	}

	if ( is_page( 'discover' ) ) {
		return __( 'Discover the Pilot | MEGAvoters', 'megavoters' );
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
