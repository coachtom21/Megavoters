<?php
/**
 * Closed-loop return for /start/ and /discover/.
 *
 * Human Blockchain issues an opaque hbc_ctx. This theme only echoes that token.
 * It never reads or builds a return_url, and it never writes RSVP or XP.
 *
 * @package Miners
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Opaque context from the current request, or empty when missing or malformed.
 *
 * @return string
 */
function megavoters_hbc_ctx_from_request() {
	if ( ! isset( $_GET['hbc_ctx'] ) ) {
		return '';
	}

	$ctx = sanitize_text_field( wp_unslash( (string) $_GET['hbc_ctx'] ) );
	if ( ! preg_match( '/^[A-Za-z0-9_-]{16,256}$/', $ctx ) ) {
		return '';
	}

	return $ctx;
}

/**
 * Human Blockchain origin for this environment.
 *
 * @return string
 */
function megavoters_hbc_base_url() {
	$host   = megavoters_handoff_host();
	$scheme = megavoters_is_local_host( $host ) ? 'http' : 'https';
	return $scheme . '://' . $host;
}

/**
 * Append the current hbc_ctx when one was issued. Leave the URL alone otherwise.
 *
 * @param string $url Absolute or root-relative URL.
 * @return string
 */
function megavoters_with_hbc_ctx( $url ) {
	$ctx = megavoters_hbc_ctx_from_request();
	if ( '' === $ctx ) {
		return $url;
	}

	return add_query_arg( 'hbc_ctx', $ctx, $url );
}

/**
 * HBC /return for the issued token. Empty when there is no usable token.
 *
 * @return string
 */
function megavoters_hbc_event_return_url() {
	$ctx = megavoters_hbc_ctx_from_request();
	if ( '' === $ctx ) {
		return '';
	}

	return add_query_arg( 'hbc_ctx', $ctx, megavoters_hbc_base_url() . '/return' );
}

/**
 * Utsav return panel for /start/ and /discover/.
 *
 * @return void
 */
function megavoters_render_hbc_return_panel() {
	$ctx        = megavoters_hbc_ctx_from_request();
	$has_ctx    = '' !== $ctx;
	$return_url = megavoters_hbc_event_return_url();
	$llb_url    = megavoters_with_hbc_ctx( megavoters_llb_home_url() );
	$events_url = megavoters_hbc_base_url() . '/';
	$miner_url  = megavoters_hbc_base_url() . '/organize';
	?>
	<section class="hbc-return-panel" data-hbc-portal="megavoters" aria-labelledby="hbc-mv-title">
		<h2 id="hbc-mv-title"><?php esc_html_e( 'Explore Practice FAITH at your own pace', 'megavoters' ); ?></h2>
		<p><?php esc_html_e( 'Your church or community event RSVP stays with Human Gold. You can return to that event at any time. Joining the wider movement is optional.', 'megavoters' ); ?></p>
		<p><?php esc_html_e( 'Nuggets explore and RSVP for free. Miner is the optional $12 yearly role. This site stays MEGAvoters. Looking around here does not change a Human Gold RSVP or XP record. Discord Gracebook is optional.', 'megavoters' ); ?></p>
		<div class="hbc-actions">
			<a data-hbc-event-return href="<?php echo esc_url( $has_ctx ? $return_url : megavoters_hbc_base_url() . '/' ); ?>"<?php echo $has_ctx ? '' : ' hidden'; ?>><?php esc_html_e( 'Return to my event', 'megavoters' ); ?></a>
			<a data-hbc-miner class="secondary" href="<?php echo esc_url( $miner_url ); ?>"><?php esc_html_e( 'Continue Miner membership', 'megavoters' ); ?></a>
			<a data-hbc-llb class="secondary" href="<?php echo esc_url( $llb_url ); ?>"><?php esc_html_e( 'Explore Legacy to Live By', 'megavoters' ); ?></a>
			<a data-hbc-general class="secondary" href="<?php echo esc_url( $events_url ); ?>"<?php echo $has_ctx ? ' hidden' : ''; ?>><?php esc_html_e( 'Explore HBC events', 'megavoters' ); ?></a>
		</div>
	</section>
	<?php
}
