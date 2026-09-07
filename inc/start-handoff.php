<?php
/**
 * Start funnel REST: create a one-time handoff token. Never store the touchstone word.
 *
 * @package MEGAvoters
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'MEGAVOTERS_HANDOFF_DB_VERSION', '1' );
define( 'MEGAVOTERS_START_CONSENT_VERSION', '2026-09-04' );

/**
 * Allowed Peace Pentagon branches.
 *
 * @return string[]
 */
function megavoters_start_branches() {
	return array( 'planning', 'budget', 'media', 'distribution', 'membership' );
}

/**
 * Whether a hostname is a Local site.
 *
 * @param string $host Hostname.
 * @return bool
 */
function megavoters_is_local_host( $host = '' ) {
	if ( $host === '' ) {
		$host = (string) wp_parse_url( home_url(), PHP_URL_HOST );
	}
	return (bool) preg_match( '/\.local$/i', $host );
}

/**
 * Whether this Mega install is a Local environment.
 *
 * @return bool
 */
function megavoters_is_local_env() {
	if ( defined( 'WP_ENVIRONMENT_TYPE' ) && 'local' === WP_ENVIRONMENT_TYPE ) {
		return true;
	}
	if ( function_exists( 'wp_get_environment_type' ) && 'local' === wp_get_environment_type() ) {
		return true;
	}
	return megavoters_is_local_host();
}

/**
 * Host that may receive the browser handoff (no path, no scheme).
 *
 * @return string
 */
function megavoters_handoff_host() {
	if ( defined( 'MEGAVOTERS_HANDOFF_HOST' ) && MEGAVOTERS_HANDOFF_HOST ) {
		return MEGAVOTERS_HANDOFF_HOST;
	}

	if ( megavoters_is_local_env() ) {
		return 'humanblockchain.local';
	}

	return 'humanblockchain.info';
}

/**
 * Full browser destination. Local uses http; production uses https.
 *
 * @param string $token Raw handoff token.
 * @return string
 */
function megavoters_handoff_url( $token ) {
	$host   = megavoters_handoff_host();
	$scheme = megavoters_is_local_host( $host ) ? 'http' : 'https';
	return $scheme . '://' . $host . '/activate/?handoff=' . rawurlencode( $token );
}

/**
 * Public Start REST URL.
 *
 * @return string
 */
function megavoters_start_endpoint() {
	return rest_url( 'megavoters/v1/start' );
}

/**
 * Handoff table name.
 *
 * @return string
 */
function megavoters_handoff_table() {
	global $wpdb;
	return $wpdb->prefix . 'megavoters_start_handoffs';
}

/**
 * Create or upgrade the handoff table.
 *
 * @return void
 */
function megavoters_handoff_install_table() {
	if ( get_option( 'megavoters_handoff_db_version' ) === MEGAVOTERS_HANDOFF_DB_VERSION ) {
		return;
	}

	global $wpdb;
	$table   = megavoters_handoff_table();
	$charset = $wpdb->get_charset_collate();

	require_once ABSPATH . 'wp-admin/includes/upgrade.php';

	dbDelta(
		"CREATE TABLE {$table} (
			id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
			token_hash char(64) NOT NULL,
			branch varchar(32) NOT NULL,
			source varchar(64) NOT NULL,
			consent_version varchar(32) NOT NULL,
			created_at datetime NOT NULL,
			expires_at datetime NOT NULL,
			used_at datetime DEFAULT NULL,
			PRIMARY KEY  (id),
			UNIQUE KEY token_hash (token_hash),
			KEY expires_at (expires_at)
		) {$charset};"
	);

	update_option( 'megavoters_handoff_db_version', MEGAVOTERS_HANDOFF_DB_VERSION );
}
add_action( 'init', 'megavoters_handoff_install_table', 5 );

/**
 * Digest stored instead of the raw token.
 *
 * @param string $token Raw token.
 * @return string
 */
function megavoters_handoff_hash( $token ) {
	return hash_hmac( 'sha256', $token, wp_salt( 'auth' ) );
}

/**
 * Register Start + redeem routes.
 *
 * @return void
 */
function megavoters_register_start_rest() {
	register_rest_route(
		'megavoters/v1',
		'/start',
		array(
			'methods'             => 'POST',
			'callback'            => 'megavoters_rest_start',
			'permission_callback' => 'megavoters_rest_start_permission',
			'args'                => array(
				'branch'          => array(
					'required'          => true,
					'type'              => 'string',
					'sanitize_callback' => 'sanitize_key',
				),
				'word_selected'   => array(
					'required' => true,
				),
				'source'          => array(
					'required'          => true,
					'type'              => 'string',
					'sanitize_callback' => 'sanitize_key',
				),
				'consent_version' => array(
					'required'          => true,
					'type'              => 'string',
					'sanitize_callback' => 'sanitize_text_field',
				),
			),
		)
	);

	register_rest_route(
		'megavoters/v1',
		'/handoff/redeem',
		array(
			'methods'             => 'POST',
			'callback'            => 'megavoters_rest_handoff_redeem',
			'permission_callback' => 'megavoters_rest_handoff_redeem_permission',
		)
	);
}
add_action( 'rest_api_init', 'megavoters_register_start_rest' );

/**
 * Guest-safe REST nonce check.
 *
 * @param WP_REST_Request $request Request.
 * @return true|WP_Error
 */
function megavoters_rest_start_permission( WP_REST_Request $request ) {
	$nonce = $request->get_header( 'X-WP-Nonce' );
	if ( ! is_string( $nonce ) || ! wp_verify_nonce( $nonce, 'wp_rest' ) ) {
		return new WP_Error(
			'megavoters_invalid_nonce',
			__( 'This request could not be verified. Reload the page and try again.', 'megavoters' ),
			array( 'status' => 403 )
		);
	}

	return true;
}

/**
 * Optional shared secret for HumanBlockchain redeem. Token possession is also required.
 *
 * @param WP_REST_Request $request Request.
 * @return true|WP_Error
 */
function megavoters_rest_handoff_redeem_permission( WP_REST_Request $request ) {
	if ( ! defined( 'MEGAVOTERS_HANDOFF_SECRET' ) || ! MEGAVOTERS_HANDOFF_SECRET ) {
		return true;
	}

	$key = $request->get_header( 'X-Megavoters-Handoff-Key' );
	if ( ! is_string( $key ) || ! hash_equals( (string) MEGAVOTERS_HANDOFF_SECRET, $key ) ) {
		return new WP_Error(
			'megavoters_forbidden',
			__( 'Handoff redeem is not authorized.', 'megavoters' ),
			array( 'status' => 403 )
		);
	}

	return true;
}

/**
 * Simple IP rate limit for Start POSTs.
 *
 * @return true|WP_Error
 */
function megavoters_start_rate_limit() {
	$ip  = isset( $_SERVER['REMOTE_ADDR'] ) ? (string) $_SERVER['REMOTE_ADDR'] : '';
	$key = 'mv_start_rl_' . hash( 'sha256', $ip . wp_salt( 'nonce' ) );
	$hits = (int) get_transient( $key );

	if ( $hits >= 10 ) {
		return new WP_Error(
			'megavoters_rate_limited',
			__( 'Too many attempts. Please wait a few minutes.', 'megavoters' ),
			array( 'status' => 429 )
		);
	}

	set_transient( $key, $hits + 1, 10 * MINUTE_IN_SECONDS );
	return true;
}

/**
 * Whether word_selected is the boolean true (never accept the word itself).
 *
 * @param mixed $value Raw JSON value.
 * @return bool
 */
function megavoters_is_word_selected_true( $value ) {
	return true === $value || 1 === $value || '1' === $value;
}

/**
 * POST /megavoters/v1/start
 *
 * @param WP_REST_Request $request Request.
 * @return WP_REST_Response|WP_Error
 */
function megavoters_rest_start( WP_REST_Request $request ) {
	$limited = megavoters_start_rate_limit();
	if ( is_wp_error( $limited ) ) {
		return $limited;
	}

	$params = $request->get_json_params();
	if ( ! is_array( $params ) ) {
		$params = $request->get_params();
	}

	if ( isset( $params['touchstone_word'] ) || isset( $params['word'] ) ) {
		return new WP_Error(
			'megavoters_word_forbidden',
			__( 'The touchstone word must not be sent.', 'megavoters' ),
			array( 'status' => 400 )
		);
	}

	$branch  = isset( $params['branch'] ) ? sanitize_key( (string) $params['branch'] ) : '';
	$source  = isset( $params['source'] ) ? sanitize_key( (string) $params['source'] ) : '';
	$consent = isset( $params['consent_version'] ) ? sanitize_text_field( (string) $params['consent_version'] ) : '';
	$word_ok = megavoters_is_word_selected_true( $params['word_selected'] ?? null );

	if ( ! in_array( $branch, megavoters_start_branches(), true ) ) {
		return new WP_Error(
			'megavoters_invalid_branch',
			__( 'Choose one Peace Pentagon branch.', 'megavoters' ),
			array( 'status' => 400 )
		);
	}

	if ( ! $word_ok ) {
		return new WP_Error(
			'megavoters_word_required',
			__( 'A touchstone word must be selected on the page.', 'megavoters' ),
			array( 'status' => 400 )
		);
	}

	if ( 'megavoters_start' !== $source || MEGAVOTERS_START_CONSENT_VERSION !== $consent ) {
		return new WP_Error(
			'megavoters_invalid_consent',
			__( 'This form version is no longer accepted. Reload the page.', 'megavoters' ),
			array( 'status' => 400 )
		);
	}

	$token   = bin2hex( random_bytes( 32 ) );
	$hash    = megavoters_handoff_hash( $token );
	$created = current_time( 'mysql', true );
	$expires = gmdate( 'Y-m-d H:i:s', time() + 10 * MINUTE_IN_SECONDS );

	global $wpdb;
	$inserted = $wpdb->insert(
		megavoters_handoff_table(),
		array(
			'token_hash'      => $hash,
			'branch'          => $branch,
			'source'          => $source,
			'consent_version' => $consent,
			'created_at'      => $created,
			'expires_at'      => $expires,
		),
		array( '%s', '%s', '%s', '%s', '%s', '%s' )
	);

	if ( ! $inserted ) {
		return new WP_Error(
			'megavoters_handoff_failed',
			__( 'We could not begin device registration. Nothing was completed.', 'megavoters' ),
			array( 'status' => 500 )
		);
	}

	$url = megavoters_handoff_url( $token );

	return new WP_REST_Response(
		array(
			'handoff_url' => $url,
		),
		200
	);
}

/**
 * POST /megavoters/v1/handoff/redeem — HumanBlockchain redeems the token once.
 *
 * @param WP_REST_Request $request Request.
 * @return WP_REST_Response|WP_Error
 */
function megavoters_rest_handoff_redeem( WP_REST_Request $request ) {
	$params = $request->get_json_params();
	if ( ! is_array( $params ) ) {
		$params = $request->get_params();
	}

	$token = isset( $params['handoff'] ) ? sanitize_text_field( (string) $params['handoff'] ) : '';
	if ( $token === '' || ! preg_match( '/^[a-f0-9]{64}$/', $token ) ) {
		return new WP_Error(
			'megavoters_invalid_handoff',
			__( 'This handoff is not valid.', 'megavoters' ),
			array( 'status' => 400 )
		);
	}

	global $wpdb;
	$table = megavoters_handoff_table();
	$hash  = megavoters_handoff_hash( $token );
	$now   = gmdate( 'Y-m-d H:i:s' );

	$row = $wpdb->get_row(
		$wpdb->prepare(
			"SELECT id, branch, source, consent_version, expires_at, used_at FROM {$table} WHERE token_hash = %s LIMIT 1",
			$hash
		),
		ARRAY_A
	);

	if ( ! $row ) {
		return new WP_Error(
			'megavoters_unknown_handoff',
			__( 'This handoff was not found.', 'megavoters' ),
			array( 'status' => 404 )
		);
	}

	if ( ! empty( $row['used_at'] ) ) {
		return new WP_Error(
			'megavoters_used_handoff',
			__( 'This handoff has already been used.', 'megavoters' ),
			array( 'status' => 410 )
		);
	}

	if ( $row['expires_at'] < $now ) {
		return new WP_Error(
			'megavoters_expired_handoff',
			__( 'This handoff has expired.', 'megavoters' ),
			array( 'status' => 410 )
		);
	}

	$updated = $wpdb->query(
		$wpdb->prepare(
			"UPDATE {$table} SET used_at = %s WHERE id = %d AND used_at IS NULL",
			$now,
			(int) $row['id']
		)
	);

	if ( 1 !== (int) $updated ) {
		return new WP_Error(
			'megavoters_used_handoff',
			__( 'This handoff has already been used.', 'megavoters' ),
			array( 'status' => 410 )
		);
	}

	return new WP_REST_Response(
		array(
			'branch'          => $row['branch'],
			'source'          => $row['source'],
			'consent_version' => $row['consent_version'],
		),
		200
	);
}
