<?php
/**
 * MEGAvoters theme helpers.
 *
 * @package MEGAvoters
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Slugs of pages this child theme owns.
 *
 * @return string[]
 */
function megavoters_page_slugs() {
	return array(
		'oligopoly',
		'community-checkers',
		'guidelines',
		'privacy',
		'terms',
		'independence',
		'rsvp',
		'treasured-penny',
	);
}

/**
 * Whether the current request uses a MEGAvoters portal template.
 *
 * @return bool
 */
function megavoters_is_portal() {
	if ( is_front_page() ) {
		return true;
	}

	if ( is_page( megavoters_page_slugs() ) ) {
		return true;
	}

	return false;
}

/**
 * Theme asset URL.
 *
 * @param string $relative Path under /assets/.
 * @return string
 */
function megavoters_asset_url( $relative ) {
	return get_stylesheet_directory_uri() . '/assets/' . ltrim( $relative, '/' );
}

/**
 * Image URL under assets/images/.
 *
 * @param string $filename Filename.
 * @return string
 */
function megavoters_image_url( $filename ) {
	return megavoters_asset_url( 'images/' . ltrim( $filename, '/' ) );
}

/**
 * Welcome booklet PDF URL (device registration + Discord only).
 *
 * @return string
 */
function megavoters_booklet_url() {
	return megavoters_asset_url( 'pdf/United_Citizens_Oligopoly_Welcome_Booklet.pdf' );
}

/**
 * Join Human Gold Rush (LLB God Wink).
 *
 * @return string
 */
function megavoters_hgr_url() {
	return 'https://legacytoliveby.org/god-wink/';
}

/**
 * LLB homepage (index.html) — Express Interest destination.
 *
 * @return string
 */
function megavoters_llb_home_url() {
	return 'https://legacytoliveby.org/';
}

/**
 * Landing video (Community Checkers / LAUGH Gathering Blueprint).
 *
 * @return string
 */
function megavoters_media_video_url() {
	return 'https://www.megavoters.com/wp-content/uploads/2026/08/Community_Checkers__The_LAUGH_Gathering_Blueprint.mp4';
}

/**
 * Landing PDF download (Touchstone RSVP / LAUGH handout from client Drive).
 *
 * @return string
 */
function megavoters_media_pdf_url() {
	return megavoters_asset_url( 'media/Touchstone_RSVP_LAUGH_Event_Organization_Handout.pdf' );
}

/**
 * Oligopoly & United Citizens Study Guide PDF.
 *
 * @return string
 */
function megavoters_study_guide_url() {
	return megavoters_asset_url( 'pdf/Oligopoly_United_Citizens_Study_Guide.pdf' );
}

/**
 * Guidelines page URL.
 *
 * @param string $hash Optional section id without #.
 * @return string
 */
function megavoters_guidelines_url( $hash = '' ) {
	$url = megavoters_page_url( 'guidelines' );
	if ( $hash !== '' ) {
		$url .= '#' . ltrim( $hash, '#' );
	}
	return $url;
}

/**
 * Guidelines page video (Architecting Oligopoly dual-ledger).
 *
 * @return string
 */
function megavoters_guidelines_video_url() {
	return 'https://humanblockchain.info/wp-content/uploads/2026/08/Architecting_Oligopoly__The_Dual-Ledger_System_of_Presence_and_.mp4';
}

/**
 * Guidelines page podcast (hosted as mp4).
 *
 * @return string
 */
function megavoters_guidelines_podcast_url() {
	return 'https://humanblockchain.info/wp-content/uploads/2026/08/A_Sextillion_Points_for_Human_Presence.mp4';
}

/**
 * Terms of Service PDF.
 *
 * @return string
 */
function megavoters_terms_pdf_url() {
	return megavoters_asset_url( 'pdf/United_Citizens_Community_Checkers_Terms_of_Service.pdf' );
}

/**
 * Membership / WooCommerce (HBC root until client confirms a deeper URL).
 *
 * @return string
 */
function megavoters_hbc_url() {
	return 'https://humanblockchain.info/';
}

/**
 * Permalink for a theme-owned page slug.
 *
 * @param string $slug Page slug.
 * @return string
 */
function megavoters_page_url( $slug ) {
	$page = get_page_by_path( $slug );
	if ( $page instanceof WP_Post ) {
		return get_permalink( $page );
	}

	return home_url( '/' . trim( $slug, '/' ) . '/' );
}

/**
 * Go Live Moment anchor on the Oligopoly page.
 *
 * @return string
 */
function megavoters_go_live_url() {
	return esc_url( rtrim( megavoters_page_url( 'oligopoly' ), '/' ) . '/#go-live-moment' );
}

/**
 * Homepage section hash, or full URL when not on the front page.
 *
 * @param string $id Section id without #.
 * @return string
 */
function megavoters_home_section( $id ) {
	$hash = '#' . ltrim( $id, '#' );
	if ( is_front_page() ) {
		return $hash;
	}

	return home_url( '/' . $hash );
}

/**
 * Interest-only RSVP mailto from the client portal.
 *
 * @param string $subject Mail subject.
 * @param string $body    Optional body.
 * @return string
 */
function megavoters_rsvp_mailto( $subject = 'Limited Pilot RSVP', $body = '' ) {
	$url = 'mailto:hello@megavoters.com?subject=' . rawurlencode( $subject );
	if ( '' !== $body ) {
		$url .= '&body=' . rawurlencode( $body );
	}
	return $url;
}

/**
 * Map of slug => template file relative to the child theme.
 *
 * @return array<string,string>
 */
function megavoters_page_templates() {
	return array(
		'oligopoly'            => 'templates/page-oligopoly.php',
		'community-checkers'   => 'templates/page-community-checkers.php',
		'guidelines'           => 'templates/page-guidelines.php',
		'privacy'              => 'templates/page-privacy.php',
		'terms'                => 'templates/page-terms.php',
		'independence'         => 'templates/page-independence.php',
		'rsvp'                 => 'templates/page-rsvp.php',
		'treasured-penny'      => 'templates/page-treasured-penny.php',
	);
}
