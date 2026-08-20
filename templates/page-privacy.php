<?php
/**
 * Privacy — client portal + Terms §8 + Guidelines §2.
 *
 * @package MEGAvoters
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$mega_body_class = 'mega-inner';
include get_stylesheet_directory() . '/inc/layout-start.php';
include get_stylesheet_directory() . '/inc/site-header.php';
?>

<main id="content" class="mega-doc">
	<p class="eyebrow"><?php esc_html_e( 'Privacy can be this simple', 'megavoters' ); ?></p>
	<h1><?php esc_html_e( 'Scan nothing.', 'megavoters' ); ?><br><em><?php esc_html_e( 'Remain unrecognized.', 'megavoters' ); ?></em></h1>
	<p class="lede"><?php esc_html_e( 'Bring your smartphone into the gathering without downloading an app or announcing your presence. Unless you deliberately scan one of the three authorized QR codes, no individual Community Checkers record is created.', 'megavoters' ); ?></p>

	<div class="notice">
		<p><strong><?php esc_html_e( 'A scan is affirmative participation.', 'megavoters' ); ?></strong><br>
		<?php esc_html_e( 'No passive check-in. No continuous location history. No facial recognition. No background identity capture. If you scan nothing, nothing follows you.', 'megavoters' ); ?></p>
	</div>

	<h2><?php esc_html_e( 'Device recognition', 'megavoters' ); ?></h2>
	<p><?php esc_html_e( 'The gameplay record recognizes a registered device identifier rather than displaying the person’s public name. One scan plus guideline acceptance may recognize that device as participating in the United Citizens community role.', 'megavoters' ); ?></p>
	<p><?php esc_html_e( 'Device recognition is not absolute anonymity. Utsav must publish a plain privacy notice describing what is collected, why it is collected, who can access it, how long it is retained, and how a participant may request deletion where deletion is legally and technically available.', 'megavoters' ); ?></p>

	<p><?php esc_html_e( 'The pilot should collect only information needed for a visitor’s chosen action. It should not use passive check-in, continuous location tracking, facial recognition, or background identity capture. Separate notices and affirmative consent are required before research participation, marketing, prize entry, biometric processing, or disclosure to another party.', 'megavoters' ); ?></p>
</main>

<?php
include get_stylesheet_directory() . '/inc/site-footer.php';
include get_stylesheet_directory() . '/inc/layout-end.php';
