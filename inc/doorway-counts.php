<?php
/**
 * Doorway counts on MEGAvoters: Start viewed, Participate chosen.
 *
 * @package MEGAvoters
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'MEGAVOTERS_DOORWAY_OPTION', 'megavoters_doorway_counts' );

/**
 * @return array<string,int>
 */
function megavoters_doorway_counts() {
	$stored = get_option( MEGAVOTERS_DOORWAY_OPTION, array() );
	return array(
		'start_viewed'       => isset( $stored['start_viewed'] ) ? (int) $stored['start_viewed'] : 0,
		'participate_chosen' => isset( $stored['participate_chosen'] ) ? (int) $stored['participate_chosen'] : 0,
	);
}

/**
 * @param string $key start_viewed|participate_chosen.
 * @return void
 */
function megavoters_doorway_bump( $key ) {
	$allowed = array( 'start_viewed', 'participate_chosen' );
	if ( ! in_array( $key, $allowed, true ) ) {
		return;
	}

	$counts         = megavoters_doorway_counts();
	$counts[ $key ] = $counts[ $key ] + 1;
	update_option( MEGAVOTERS_DOORWAY_OPTION, $counts, false );
}

/**
 * Count a Start view once per browser day.
 *
 * @return void
 */
function megavoters_doorway_count_start_view() {
	if ( ! is_page( 'start' ) || is_admin() ) {
		return;
	}

	$cookie = 'mv_door_start';
	if ( ! empty( $_COOKIE[ $cookie ] ) ) {
		return;
	}

	megavoters_doorway_bump( 'start_viewed' );

	if ( ! headers_sent() ) {
		$path = ( defined( 'COOKIEPATH' ) && COOKIEPATH ) ? COOKIEPATH : '/';
		setcookie( $cookie, '1', time() + DAY_IN_SECONDS, $path, '', is_ssl(), true );
	}
}
add_action( 'template_redirect', 'megavoters_doorway_count_start_view', 20 );

/**
 * @return void
 */
function megavoters_register_doorway_rest() {
	register_rest_route(
		'megavoters/v1',
		'/doorway',
		array(
			array(
				'methods'             => 'POST',
				'callback'            => 'megavoters_rest_doorway',
				'permission_callback' => 'megavoters_rest_start_permission',
			),
			array(
				'methods'             => 'GET',
				'callback'            => 'megavoters_rest_doorway_get',
				'permission_callback' => '__return_true',
			),
		)
	);
}
add_action( 'rest_api_init', 'megavoters_register_doorway_rest' );

/**
 * @param WP_REST_Request $request Request.
 * @return WP_REST_Response|WP_Error
 */
function megavoters_rest_doorway( WP_REST_Request $request ) {
	$params = $request->get_json_params();
	if ( ! is_array( $params ) ) {
		$params = $request->get_params();
	}

	$event = isset( $params['event'] ) ? sanitize_key( (string) $params['event'] ) : '';
	if ( 'participate_chosen' !== $event ) {
		return new WP_Error(
			'megavoters_bad_doorway',
			__( 'That doorway event is not recorded here.', 'megavoters' ),
			array( 'status' => 400 )
		);
	}

	megavoters_doorway_bump( 'participate_chosen' );

	return new WP_REST_Response( array( 'ok' => true ), 200 );
}

/**
 * Public integers only. No emails, tokens, or words.
 *
 * @return WP_REST_Response
 */
function megavoters_rest_doorway_get() {
	return new WP_REST_Response( megavoters_doorway_counts(), 200 );
}

/**
 * @return void
 */
function megavoters_doorway_admin_menu() {
	add_management_page(
		__( 'Doorway counts', 'megavoters' ),
		__( 'Doorway counts', 'megavoters' ),
		'manage_options',
		'megavoters-doorway',
		'megavoters_doorway_admin_page'
	);
}
add_action( 'admin_menu', 'megavoters_doorway_admin_menu' );

/**
 * @return void
 */
function megavoters_doorway_admin_page() {
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}
	$counts = megavoters_doorway_counts();
	?>
	<div class="wrap">
		<h1><?php esc_html_e( 'Doorway counts', 'megavoters' ); ?></h1>
		<p><?php esc_html_e( 'These two MEGAvoters steps. All six counts together are on HumanBlockchain → Tools → Doorway counts.', 'megavoters' ); ?></p>
		<table class="widefat striped" style="max-width:480px">
			<tbody>
				<tr><th><?php esc_html_e( 'Start viewed', 'megavoters' ); ?></th><td><?php echo (int) $counts['start_viewed']; ?></td></tr>
				<tr><th><?php esc_html_e( 'Participate chosen', 'megavoters' ); ?></th><td><?php echo (int) $counts['participate_chosen']; ?></td></tr>
			</tbody>
		</table>
	</div>
	<?php
}
