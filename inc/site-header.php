<?php
/**
 * MEGAvoters portal header (client portal nav).
 *
 * @package MEGAvoters
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div class="campaign-bar" role="banner">
	<p><?php esc_html_e( 'Showing Up. Make It Equal.', 'megavoters' ); ?> <span aria-hidden="true">≐</span></p>
</div>
<header class="site-header">
	<a class="wordmark" href="<?php echo esc_url( megavoters_home_section( 'top' ) ); ?>">
		<span class="mark">M</span>
		<span>
			<b><?php esc_html_e( 'MEGAvoters', 'megavoters' ); ?></b>
			<small><?php esc_html_e( 'Make Everyone Great Again', 'megavoters' ); ?></small>
		</span>
	</a>
	<nav aria-label="<?php esc_attr_e( 'Primary', 'megavoters' ); ?>">
		<a href="<?php echo esc_url( megavoters_home_section( 'discover' ) ); ?>"><?php esc_html_e( 'Discover', 'megavoters' ); ?></a>
		<a href="<?php echo esc_url( megavoters_home_section( 'pilot' ) ); ?>"><?php esc_html_e( 'The pilot', 'megavoters' ); ?></a>
		<a href="<?php echo esc_url( megavoters_guidelines_url() ); ?>"><?php esc_html_e( 'Guidelines', 'megavoters' ); ?></a>
		<a href="<?php echo esc_url( megavoters_page_url( 'terms' ) ); ?>"><?php esc_html_e( 'Terms', 'megavoters' ); ?></a>
		<a href="<?php echo esc_url( megavoters_home_section( 'privacy' ) ); ?>"><?php esc_html_e( 'Privacy', 'megavoters' ); ?></a>
		<a href="<?php echo esc_url( megavoters_home_section( 'rsvp' ) ); ?>"><?php esc_html_e( 'RSVP', 'megavoters' ); ?></a>
	</nav>
	<details class="mega-menu-toggle">
		<summary><?php esc_html_e( 'Menu', 'megavoters' ); ?></summary>
		<nav>
			<a href="<?php echo esc_url( megavoters_home_section( 'discover' ) ); ?>"><?php esc_html_e( 'Discover', 'megavoters' ); ?></a>
			<a href="<?php echo esc_url( megavoters_home_section( 'pilot' ) ); ?>"><?php esc_html_e( 'The pilot', 'megavoters' ); ?></a>
			<a href="<?php echo esc_url( megavoters_guidelines_url() ); ?>"><?php esc_html_e( 'Guidelines', 'megavoters' ); ?></a>
			<a href="<?php echo esc_url( megavoters_page_url( 'terms' ) ); ?>"><?php esc_html_e( 'Terms', 'megavoters' ); ?></a>
			<a href="<?php echo esc_url( megavoters_home_section( 'privacy' ) ); ?>"><?php esc_html_e( 'Privacy', 'megavoters' ); ?></a>
			<a href="<?php echo esc_url( megavoters_home_section( 'rsvp' ) ); ?>"><?php esc_html_e( 'RSVP', 'megavoters' ); ?></a>
		</nav>
	</details>
	<a class="button small" href="<?php echo esc_url( megavoters_home_section( 'rsvp' ) ); ?>"><?php esc_html_e( 'Explore the pilot', 'megavoters' ); ?></a>
</header>
