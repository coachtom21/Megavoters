<?php
/**
 * RSVP — client portal RSVP section + Coach Tom welcome letter + booklet PDF.
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
	<p class="eyebrow"><?php esc_html_e( 'Your postcard is an invitation', 'megavoters' ); ?></p>
	<h1><?php esc_html_e( 'RSVP to discover.', 'megavoters' ); ?><br><em><?php esc_html_e( 'Showing up remains your choice.', 'megavoters' ); ?></em></h1>
	<p class="lede"><?php esc_html_e( 'Responding records interest in the limited pilot and your selected touchstone word. It does not enroll you in a church, establish salvation, provide research consent, enter a prize promotion, create a financial pledge, or guarantee a touchstone or event seat.', 'megavoters' ); ?></p>

	<p><a class="button" href="<?php echo esc_url( megavoters_llb_home_url() ); ?>"><?php esc_html_e( 'Express interest', 'megavoters' ); ?> <span aria-hidden="true">→</span></a></p>
	<p><a class="text-link" href="<?php echo esc_url( megavoters_rsvp_mailto( 'Observe Limited Pilot' ) ); ?>"><?php esc_html_e( 'Observe the discovery', 'megavoters' ); ?> <span aria-hidden="true">→</span></a></p>

	<h2><?php esc_html_e( 'Welcome, United Citizen', 'megavoters' ); ?></h2>
	<p><?php esc_html_e( 'Thank you for showing up.', 'megavoters' ); ?></p>
	<p><?php esc_html_e( 'Your registered device—not your public name—is now recognized within Community Checkers. By completing one scan and accepting the Discord Gracebook guidelines, you have entered as a United Citizen. This is a voluntary community role, not a statement of nationality or legal citizenship.', 'megavoters' ); ?></p>
	<p><?php esc_html_e( 'You may participate, observe, or walk away. No response is treated as a character judgment.', 'megavoters' ); ?></p>
	<blockquote><?php esc_html_e( 'Showing up is the proof. Sharing is the strategy. Human choice determines what carries forward. ≐', 'megavoters' ); ?></blockquote>
	<p><a class="button" href="<?php echo esc_url( megavoters_booklet_url() ); ?>"><?php esc_html_e( 'United Citizens Oligopoly Welcome Booklet', 'megavoters' ); ?> <span aria-hidden="true">→</span></a></p>
</main>

<?php
include get_stylesheet_directory() . '/inc/site-footer.php';
include get_stylesheet_directory() . '/inc/layout-end.php';
