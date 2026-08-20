<?php
/**
 * Independence / no-affiliation — client README + portal boundary + START_HERE.
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
	<h1><?php esc_html_e( 'Independent proposal • No affiliation or endorsement', 'megavoters' ); ?></h1>
	<p class="lede"><?php esc_html_e( 'This portal presents concepts for discussion only. Every named venue, organization, group, company, technology, movement, church, institute, university, academic partner, and research audience is proposed or referenced for context. No affiliation, sponsorship, partnership, approval, participation, or endorsement is claimed or implied without written authorization.', 'megavoters' ); ?></p>

	<p><?php esc_html_e( 'This website is an independent proposal. Every referenced venue, organization, group, company, church, university, institute, academic partner, technology, game, movement, and research audience is proposed or mentioned only for context. Do not imply affiliation, sponsorship, partnership, approval, participation, hosting, or endorsement without written authorization.', 'megavoters' ); ?></p>

	<p><?php esc_html_e( 'United Citizen is a voluntary community role. It is not a statement of nationality or legal citizenship. All events, partnerships, hosts, financial features, research relationships, and future dates remain proposed until separately confirmed.', 'megavoters' ); ?></p>

	<h2><?php esc_html_e( 'Required project separation', 'megavoters' ); ?></h2>
	<ul>
		<li><?php esc_html_e( 'megavoters.com — MEGAvoter discovery, licensing, membership-intention, and WooCommerce $0 backorder entry point.', 'megavoters' ); ?></li>
		<li><?php esc_html_e( 'legacytoliveby.org — Human Gold Rush, Practice FAITH touchstone RSVP, and proposed LAUGH fulfillment events. LLB touchstone QR codes route here.', 'megavoters' ); ?></li>
		<li><?php esc_html_e( 'humanblockchain.info — YAM-is-On trade-value and dual-ledger explanations.', 'megavoters' ); ?></li>
		<li><?php esc_html_e( 'smallstreet.app — proposed XP/Oligopoly testnet sandbox.', 'megavoters' ); ?></li>
	</ul>
	<p><?php esc_html_e( 'Do not merge the XP gratitude ledger with WooCommerce payments or fiscal settlement records.', 'megavoters' ); ?></p>
	<p><?php esc_html_e( 'Following a link does not itself register, purchase, consent, or establish affiliation.', 'megavoters' ); ?></p>
</main>

<?php
include get_stylesheet_directory() . '/inc/site-footer.php';
include get_stylesheet_directory() . '/inc/layout-end.php';
