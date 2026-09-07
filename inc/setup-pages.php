<?php
/**
 * Create the supporting WordPress pages this theme expects.
 *
 * @package MEGAvoters
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Insert missing pages and enable pretty permalinks once.
 *
 * @return void
 */
function megavoters_ensure_pages() {
	if ( get_option( 'megavoters_pages_created' ) === MEGAVOTERS_THEME_VERSION ) {
		return;
	}

	$pages = array(
		'oligopoly'          => __( 'Oligopoly', 'megavoters' ),
		'community-checkers' => __( 'Community Checkers', 'megavoters' ),
		'guidelines'         => __( 'Guidelines', 'megavoters' ),
		'privacy'            => __( 'Privacy', 'megavoters' ),
		'terms'              => __( 'Terms', 'megavoters' ),
		'independence'       => __( 'Independence', 'megavoters' ),
		'rsvp'               => __( 'RSVP', 'megavoters' ),
		'treasured-penny'    => __( 'Treasured Penny', 'megavoters' ),
		'the-pilot'          => __( 'The Pilot', 'megavoters' ),
		'start'              => __( 'Start', 'megavoters' ),
		'discover'           => __( 'Discover the Pilot', 'megavoters' ),
	);

	$created = false;

	foreach ( $pages as $slug => $title ) {
		$existing = get_page_by_path( $slug );
		if ( $existing instanceof WP_Post ) {
			continue;
		}

		wp_insert_post(
			array(
				'post_title'     => $title,
				'post_name'      => $slug,
				'post_status'    => 'publish',
				'post_type'      => 'page',
				'post_content'   => '',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			)
		);
		$created = true;
	}

	if ( ! get_option( 'permalink_structure' ) ) {
		update_option( 'permalink_structure', '/%postname%/' );
		$created = true;
	}

	if ( $created ) {
		flush_rewrite_rules( false );
	}

	update_option( 'megavoters_pages_created', MEGAVOTERS_THEME_VERSION );
}
add_action( 'init', 'megavoters_ensure_pages', 20 );
add_action( 'after_switch_theme', 'megavoters_ensure_pages' );

/**
 * Publish the Guidelines page once.
 *
 * @return void
 */
function megavoters_ensure_guidelines_page() {
	if ( get_option( 'megavoters_guidelines_page' ) === '1' ) {
		return;
	}

	$page = get_page_by_path( 'guidelines' );
	if ( ! ( $page instanceof WP_Post ) ) {
		wp_insert_post(
			array(
				'post_title'     => __( 'Guidelines', 'megavoters' ),
				'post_name'      => 'guidelines',
				'post_status'    => 'publish',
				'post_type'      => 'page',
				'post_content'   => '',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			)
		);
	}

	update_option( 'megavoters_guidelines_page', '1' );
}
add_action( 'init', 'megavoters_ensure_guidelines_page', 21 );

/**
 * Publish Treasured Penny once.
 *
 * @return void
 */
function megavoters_ensure_treasured_penny_page() {
	if ( get_option( 'megavoters_treasured_penny_page' ) === '1' ) {
		$page = get_page_by_path( 'treasured-penny' );
		if ( $page instanceof WP_Post ) {
			return;
		}
	}

	$page = get_page_by_path( 'treasured-penny' );
	if ( ! ( $page instanceof WP_Post ) ) {
		wp_insert_post(
			array(
				'post_title'     => __( 'Treasured Penny', 'megavoters' ),
				'post_name'      => 'treasured-penny',
				'post_status'    => 'publish',
				'post_type'      => 'page',
				'post_content'   => '',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			)
		);
	}

	update_option( 'megavoters_treasured_penny_page', '1' );
}
add_action( 'init', 'megavoters_ensure_treasured_penny_page', 22 );

/**
 * Publish The Pilot page once.
 *
 * @return void
 */
function megavoters_ensure_the_pilot_page() {
	if ( get_option( 'megavoters_the_pilot_page' ) === '1' ) {
		$page = get_page_by_path( 'the-pilot' );
		if ( $page instanceof WP_Post ) {
			return;
		}
	}

	$page = get_page_by_path( 'the-pilot' );
	if ( ! ( $page instanceof WP_Post ) ) {
		wp_insert_post(
			array(
				'post_title'     => __( 'The Pilot', 'megavoters' ),
				'post_name'      => 'the-pilot',
				'post_status'    => 'publish',
				'post_type'      => 'page',
				'post_content'   => '',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			)
		);
	}

	update_option( 'megavoters_the_pilot_page', '1' );
}
add_action( 'init', 'megavoters_ensure_the_pilot_page', 23 );

/**
 * Publish Start and Discover funnel pages once.
 *
 * @return void
 */
function megavoters_ensure_start_discover_pages() {
	$pages = array(
		'start'    => __( 'Start', 'megavoters' ),
		'discover' => __( 'Discover the Pilot', 'megavoters' ),
	);

	$created = false;

	foreach ( $pages as $slug => $title ) {
		$option = 'megavoters_' . str_replace( '-', '_', $slug ) . '_page';
		$exists = get_page_by_path( $slug ) instanceof WP_Post;

		if ( get_option( $option ) === '1' && $exists ) {
			continue;
		}

		if ( ! $exists ) {
			wp_insert_post(
				array(
					'post_title'     => $title,
					'post_name'      => $slug,
					'post_status'    => 'publish',
					'post_type'      => 'page',
					'post_content'   => '',
					'comment_status' => 'closed',
					'ping_status'    => 'closed',
				)
			);
			$created = true;
		}

		update_option( $option, '1' );
	}

	if ( $created ) {
		flush_rewrite_rules( false );
	}
}
add_action( 'init', 'megavoters_ensure_start_discover_pages', 24 );
