<?php
/**
 * MEGAvoters portal footer (client portal footer).
 *
 * @package MEGAvoters
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<footer>
	<div class="wordmark">
		<span class="mark">M</span>
		<span>
			<b><?php esc_html_e( 'MEGAvoters', 'megavoters' ); ?></b>
			<small><?php esc_html_e( 'Make Everyone Great Again', 'megavoters' ); ?></small>
		</span>
	</div>
	<p><?php esc_html_e( 'An independent, nonpartisan proposal for voluntary discovery. Unity does not require uniformity. All named relationships, locations, organizations, companies, groups, technologies, and academic or research partners remain unaccepted proposals unless confirmed in writing. No affiliation or endorsement is claimed or implied.', 'megavoters' ); ?></p>
	<div>
		<a href="<?php echo esc_url( megavoters_home_section( 'discover' ) ); ?>"><?php esc_html_e( 'Practice FAITH', 'megavoters' ); ?></a>
		<a href="<?php echo esc_url( megavoters_guidelines_url() ); ?>"><?php esc_html_e( 'Guidelines', 'megavoters' ); ?></a>
		<a href="<?php echo esc_url( megavoters_page_url( 'terms' ) ); ?>"><?php esc_html_e( 'Terms', 'megavoters' ); ?></a>
		<a href="<?php echo esc_url( megavoters_home_section( 'privacy' ) ); ?>"><?php esc_html_e( 'Privacy promise', 'megavoters' ); ?></a>
		<a href="<?php echo esc_url( megavoters_home_section( 'rsvp' ) ); ?>"><?php esc_html_e( 'Pilot RSVP', 'megavoters' ); ?></a>
	</div>
	<small><?php esc_html_e( '© 2026 MEGAvoters • Proposed United Citizens limited-pilot portal', 'megavoters' ); ?></small>
</footer>
