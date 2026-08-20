<?php
/**
 * The Three Doors + Community Checkers Guidelines — client bundle copy.
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
	<h1><?php esc_html_e( 'The Three Doors', 'megavoters' ); ?></h1>
	<p class="lede"><?php esc_html_e( 'One registered device may approach three separate doors. The QR code that begins an encounter determines which door is active.', 'megavoters' ); ?></p>

	<h2><?php esc_html_e( 'Identity — Who showed up?', 'megavoters' ); ?></h2>
	<p><?php esc_html_e( 'The Identity door records device presence, consent, role, and the choice to participate, observe, or walk away. Identity does not create a purchase, payment, debt, wage, or tax event.', 'megavoters' ); ?></p>

	<h2><?php esc_html_e( 'Trade — What was exchanged or promised?', 'megavoters' ); ?></h2>
	<p><?php esc_html_e( 'The Trade door uses YAM-is-On to record proposed trade activity and applicable VFN financial records. Actual money activity, if any, stays in its own accounting and settlement system. Trade does not create XP.', 'megavoters' ); ?></p>

	<h2><?php esc_html_e( 'Gratitude — Who recognized the moment?', 'megavoters' ); ?></h2>
	<p><?php esc_html_e( 'The Gratitude door uses Seeking Gratitude to record Experience Presence, acceptance, rejection, attendance, and community surplus. XP is never cash, wages, cryptocurrency, an investment, or a redeemable balance.', 'megavoters' ); ?></p>

	<h2><?php esc_html_e( 'The protection rule', 'megavoters' ); ?></h2>
	<blockquote><?php esc_html_e( 'One device. Three doors. Three separate records.', 'megavoters' ); ?></blockquote>
	<p><?php esc_html_e( 'The three experiences may be compared for research, but their balances and meanings are never combined. To change doors, close the current encounter and begin a new scan.', 'megavoters' ); ?></p>

	<h1><?php esc_html_e( 'Community Checkers Guidelines', 'megavoters' ); ?></h1>
	<p><?php esc_html_e( 'These are community gameplay and research guidelines. They are not employment terms, investment terms, financial advice, or a judgment of anyone’s character.', 'megavoters' ); ?></p>

	<h2><?php esc_html_e( '1. Voluntary entry', 'megavoters' ); ?></h2>
	<p><?php esc_html_e( 'A person may choose to:', 'megavoters' ); ?></p>
	<ul>
		<li><?php esc_html_e( 'Observe as a YAM’er', 'megavoters' ); ?></li>
		<li><?php esc_html_e( 'Participate as a MEGAvoter', 'megavoters' ); ?></li>
		<li><?php esc_html_e( 'Walk away', 'megavoters' ); ?></li>
		<li><?php esc_html_e( 'Make no scan or response', 'megavoters' ); ?></li>
	</ul>
	<p><?php esc_html_e( 'Every outcome is valid. A MEGAvoter makes a proposed $12 annual membership pledge. No membership payment is collected during gameplay.', 'megavoters' ); ?></p>

	<h2><?php esc_html_e( '2. Device recognition', 'megavoters' ); ?></h2>
	<p><?php esc_html_e( 'The gameplay record recognizes a registered device identifier rather than displaying the person’s public name. One scan plus guideline acceptance may recognize that device as participating in the United Citizens community role.', 'megavoters' ); ?></p>
	<p><?php esc_html_e( 'Device recognition is not absolute anonymity. Utsav must publish a plain privacy notice describing what is collected, why it is collected, who can access it, how long it is retained, and how a participant may request deletion where deletion is legally and technically available.', 'megavoters' ); ?></p>

	<h2><?php esc_html_e( '3. The three insulated entry points', 'megavoters' ); ?></h2>
	<h3><?php esc_html_e( 'Identity', 'megavoters' ); ?></h3>
	<p><?php esc_html_e( 'The identity/vCard entry records device presence, consent, role, and the choice to participate, observe, or walk away. It does not create a purchase, debt, wage, or tax event.', 'megavoters' ); ?></p>
	<h3><?php esc_html_e( 'Trade', 'megavoters' ); ?></h3>
	<p><?php esc_html_e( 'The YAM-is-On entry records proposed trade activity, applicable promises, WooCommerce records, and VFN financial statements. Trade records remain outside the XP gratitude ledger.', 'megavoters' ); ?></p>
	<h3><?php esc_html_e( 'Gratitude', 'megavoters' ); ?></h3>
	<p><?php esc_html_e( 'The Seeking Gratitude entry records Experience Presence, acceptance or rejection, and community surplus. XP is never money and cannot be cashed out, redeemed, invested, or converted into Trade value.', 'megavoters' ); ?></p>
	<p><strong><?php esc_html_e( 'The QR that begins an encounter determines its silo. Changing silos requires closing the encounter and starting a new scan.', 'megavoters' ); ?></strong></p>

	<h2><?php esc_html_e( '4. Proof of presence', 'megavoters' ); ?></h2>
	<p><?php esc_html_e( 'Where enabled, an encounter may use two scans, registered-device timestamps, and limited proximity checks to confirm delivery or acceptance. A LAUGH gathering provides the real-world showing-up moment that the online experience alone cannot complete.', 'megavoters' ); ?></p>

	<h2><?php esc_html_e( '5. Status language', 'megavoters' ); ?></h2>
	<p><?php esc_html_e( 'Both ledgers may use the same accounting grammar while preserving different meanings:', 'megavoters' ); ?></p>
	<p><code><?php esc_html_e( 'Issued → Pending → Matured or Disputed → Reconciled → Extinguished', 'megavoters' ); ?></code></p>
	<ul>
		<li><?php esc_html_e( 'Matured means the normal review period completed.', 'megavoters' ); ?></li>
		<li><?php esc_html_e( 'Disputed means disagreement or an exception remains preserved in the record.', 'megavoters' ); ?></li>
		<li><?php esc_html_e( 'Disputed matures into Reconciled. Reconciliation does not require everyone to agree.', 'megavoters' ); ?></li>
		<li><?php esc_html_e( 'Reconciled means every position and outcome was accounted for.', 'megavoters' ); ?></li>
		<li><?php esc_html_e( 'Extinguished means nothing remains actionable for that cycle, while the append-only history remains preserved.', 'megavoters' ); ?></li>
	</ul>
	<p><?php esc_html_e( 'Reconciled XP requires no financial settlement. A reconciled Trade record follows its applicable fiscal treatment before extinguishment.', 'megavoters' ); ?></p>

	<h2><?php esc_html_e( '6. Human judgment remains final', 'megavoters' ); ?></h2>
	<p><?php esc_html_e( 'Any LLM consortium serves only as a group of advisory clerks. Models may compare records, identify exceptions, and present recommendations. They may not invent consent, move funds, erase disputes, convert XP into money, or make the final carry-forward choice.', 'megavoters' ); ?></p>
	<blockquote><?php esc_html_e( 'Machines preserve the record. Consensus recommends. United Citizens choose.', 'megavoters' ); ?></blockquote>

	<h2><?php esc_html_e( '7. Community conduct', 'megavoters' ); ?></h2>
	<p><?php esc_html_e( 'Participants are invited to practice FAITH by being Fair, Accepting, Insightful, Transparent, and Humble in relationships with others. FAITH is a voluntary covenant and behavioral aspiration. It is never a religious test, penalty system, or measure of personal worth.', 'megavoters' ); ?></p>

	<h2><?php esc_html_e( '8. Gathering and fulfillment', 'megavoters' ); ?></h2>
	<p><?php esc_html_e( 'LAUGH events and Organized Krill kit acceptance celebrations are voluntary community gatherings. No cash payment is accepted during LAUGH gameplay or fulfillment. Availability, location, accessibility, safety procedures, and host participation must be confirmed before an event is advertised as active.', 'megavoters' ); ?></p>

	<h2><?php esc_html_e( '9. Proposed status', 'megavoters' ); ?></h2>
	<p><?php esc_html_e( 'All entities, hosts, academic partners, churches, production centers, tax treatments, financial mechanisms, and future dates remain proposed until separately accepted and documented. Gameplay language does not replace legal, privacy, tax, accounting, safety, or research review.', 'megavoters' ); ?></p>
</main>

<?php
include get_stylesheet_directory() . '/inc/site-footer.php';
include get_stylesheet_directory() . '/inc/layout-end.php';
