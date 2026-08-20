<?php
/**
 * Coach Tom Welcomes Everyone — click-to-play audio (no autoplay, no tracking).
 *
 * @package MEGAvoters
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Whether the Coach Tom player belongs on this request (discovery landing).
 *
 * @return bool
 */
function megavoters_should_show_coach_tom() {
	return is_front_page();
}

/**
 * Enqueue Coach Tom player assets on the MEGAvoters homepage.
 *
 * @return void
 */
function megavoters_enqueue_coach_tom_welcome() {
	if ( ! megavoters_should_show_coach_tom() ) {
		return;
	}

	$dir     = get_stylesheet_directory() . '/assets/coach-tom/';
	$css     = $dir . 'coach-tom-audio.css';
	$js      = $dir . 'coach-tom-audio.js';
	$base    = trailingslashit( megavoters_asset_url( 'coach-tom' ) );
	$css_ver = file_exists( $css ) ? (string) filemtime( $css ) : MEGAVOTERS_THEME_VERSION;
	$js_ver  = file_exists( $js ) ? (string) filemtime( $js ) : MEGAVOTERS_THEME_VERSION;

	wp_enqueue_style( 'megavoters-coach-tom-welcome', $base . 'coach-tom-audio.css', array( 'megavoters-portal' ), $css_ver );
	wp_enqueue_script( 'megavoters-coach-tom-welcome', $base . 'coach-tom-audio.js', array(), $js_ver, true );
}
add_action( 'wp_enqueue_scripts', 'megavoters_enqueue_coach_tom_welcome', 40 );

/**
 * Print the Coach Tom player (MEGAvoters color mode).
 *
 * @return void
 */
function megavoters_render_coach_tom_welcome() {
	static $instance = 0;
	$instance++;

	$site      = 'megavoters';
	$heading   = 'ctw-title-' . $site . '-' . $instance;
	$audio_src = trailingslashit( megavoters_asset_url( 'coach-tom' ) ) . 'coach-tom-welcomes-everyone.mp3';
	?>
	<div class="ctw-audio-host">
		<section class="ctw-audio" data-site="<?php echo esc_attr( $site ); ?>" aria-labelledby="<?php echo esc_attr( $heading ); ?>">
			<div class="ctw-audio__mark" aria-hidden="true">CT</div>
			<div class="ctw-audio__content">
				<div class="ctw-audio__meta">
					<p class="ctw-audio__eyebrow"><?php esc_html_e( 'A welcome from Coach Tom', 'megavoters' ); ?></p>
					<span class="ctw-audio__badge"><?php esc_html_e( '5-minute message', 'megavoters' ); ?></span>
				</div>
				<h2 id="<?php echo esc_attr( $heading ); ?>"><?php esc_html_e( 'Coach Tom Welcomes Everyone', 'megavoters' ); ?></h2>
				<p class="ctw-audio__intro"><?php esc_html_e( 'Before you choose how to enter, take a few minutes to hear what this study is asking - and what it will never ask of you.', 'megavoters' ); ?></p>
				<audio class="ctw-audio__media" preload="metadata">
					<source src="<?php echo esc_url( $audio_src ); ?>" type="audio/mpeg">
					<?php esc_html_e( 'Your browser does not support HTML audio.', 'megavoters' ); ?>
				</audio>
				<div class="ctw-audio__controls">
					<button class="ctw-audio__toggle" type="button" aria-label="<?php esc_attr_e( 'Play Coach Tom Welcomes Everyone', 'megavoters' ); ?>">
						<span class="ctw-audio__icon" aria-hidden="true">&gt;</span>
						<span class="ctw-audio__action"><?php esc_html_e( 'Play welcome', 'megavoters' ); ?></span>
					</button>
					<div class="ctw-audio__timeline">
						<input class="ctw-audio__seek" type="range" min="0" max="100" value="0" step="0.1" aria-label="<?php esc_attr_e( 'Audio progress', 'megavoters' ); ?>">
						<div class="ctw-audio__time" aria-live="off">
							<span class="ctw-audio__current">0:00</span><span aria-hidden="true"> / </span><span class="ctw-audio__duration">4:47</span>
						</div>
					</div>
				</div>
				<p class="ctw-audio__note"><?php esc_html_e( 'You remain free to observe, participate, browse, shop, or walk away. No response is treated as a character judgment.', 'megavoters' ); ?></p>
			</div>
		</section>
	</div>
	<?php
}
