<?php
/**
 * Treasured Penny — LLB copy, MEGAvoters chrome.
 * Gratitude only. Express Interest → legacytoliveby.org. No Woo.
 *
 * @package MEGAvoters
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$express_url = function_exists( 'megavoters_llb_home_url' )
	? megavoters_llb_home_url()
	: 'https://legacytoliveby.org/';
$observe_url = function_exists( 'megavoters_rsvp_mailto' )
	? megavoters_rsvp_mailto( 'Treasured Penny — observing' )
	: 'mailto:hello@megavoters.com?subject=' . rawurlencode( 'Treasured Penny — observing' );

$mega_body_class = 'mega-inner mega-tp-body';
include get_stylesheet_directory() . '/inc/layout-start.php';
include get_stylesheet_directory() . '/inc/site-header.php';
?>

<main id="content" class="mega-tp-page">
	<section class="mega-tp-hero">
		<div class="mega-tp-wrap mega-tp-hero-grid">
			<div>
				<p class="mega-tp-eyebrow"><?php esc_html_e( 'A Human Gold Rush invitation', 'megavoters' ); ?></p>
				<h1><?php esc_html_e( 'The Treasured', 'megavoters' ); ?> <em><?php esc_html_e( 'Penny.', 'megavoters' ); ?></em></h1>
				<p class="mega-tp-lead"><?php esc_html_e( 'I would do this for free, but you have to accept one treasured penny—person to person, just You And Me.', 'megavoters' ); ?></p>
				<p><?php esc_html_e( 'Don’t worry. The community supports the penny. You simply accept the gratitude and enjoy the Easter Egg your presence created.', 'megavoters' ); ?></p>
				<div class="mega-tp-actions">
					<a class="mega-tp-btn is-primary" href="<?php echo esc_url( $express_url ); ?>"><?php esc_html_e( 'Express Interest', 'megavoters' ); ?></a>
					<a class="mega-tp-btn" href="#how-it-works"><?php esc_html_e( 'Follow the postcard', 'megavoters' ); ?></a>
					<a class="mega-tp-btn is-quiet" href="<?php echo esc_url( $observe_url ); ?>"><?php esc_html_e( 'Observe', 'megavoters' ); ?></a>
				</div>
			</div>
			<aside class="mega-tp-card" aria-label="<?php echo esc_attr__( 'Treasured Penny RSVP postcard', 'megavoters' ); ?>">
				<p class="mega-tp-stamp"><?php esc_html_e( 'Postcard RSVP', 'megavoters' ); ?></p>
				<div class="mega-tp-coin" aria-hidden="true">1¢</div>
				<h2><?php esc_html_e( 'Your time matters more than money.', 'megavoters' ); ?></h2>
				<p><?php esc_html_e( 'Keep the invitation. Register your device when you are curious. Then show up for the LAUGH fulfillment event and allow another person to thank you.', 'megavoters' ); ?></p>
			</aside>
		</div>
	</section>

	<section class="mega-tp-section" id="faith">
		<div class="mega-tp-wrap mega-tp-center">
			<p class="mega-tp-kicker"><?php esc_html_e( 'The covenant comes first', 'megavoters' ); ?></p>
			<h2><?php esc_html_e( 'Can you practice FAITH in your relationships with others?', 'megavoters' ); ?></h2>
			<p><?php esc_html_e( 'If yes, accept the invitation and carry the touchstone word that means the most to you. If not, observing or walking away remains your choice—without penalty or judgment.', 'megavoters' ); ?></p>
			<div class="mega-tp-words" aria-label="<?php echo esc_attr__( 'Meaning of FAITH', 'megavoters' ); ?>">
				<span><?php esc_html_e( 'Fair', 'megavoters' ); ?></span>
				<span><?php esc_html_e( 'Accepting', 'megavoters' ); ?></span>
				<span><?php esc_html_e( 'Insightful', 'megavoters' ); ?></span>
				<span><?php esc_html_e( 'Transparent', 'megavoters' ); ?></span>
				<span><?php esc_html_e( 'Humble', 'megavoters' ); ?></span>
			</div>
		</div>
	</section>

	<section class="mega-tp-section mega-tp-alt" id="how-it-works">
		<div class="mega-tp-wrap">
			<p class="mega-tp-kicker"><?php esc_html_e( 'Two scans • One shared moment', 'megavoters' ); ?></p>
			<h2><?php esc_html_e( 'The treasured penny is accepted, not paid.', 'megavoters' ); ?></h2>
			<p class="mega-tp-intro"><?php esc_html_e( 'It is the smallest acknowledgment that a seller/giver benefactor and buyer/recipient beneficiary chose to be present together.', 'megavoters' ); ?></p>
			<div class="mega-tp-steps">
				<article>
					<span>01</span>
					<h3><?php esc_html_e( 'Receive the postcard', 'megavoters' ); ?></h3>
					<p><?php esc_html_e( 'A friend, stranger, church, nonprofit or community host invites you into the Human Gold Rush.', 'megavoters' ); ?></p>
				</article>
				<article>
					<span>02</span>
					<h3><?php esc_html_e( 'Confirm You And Me', 'megavoters' ); ?></h3>
					<p><?php esc_html_e( 'Two registered devices signal Y/Y/Y: FAITH Covenant accepted, device UUID registered and Discord Gracebook accepted.', 'megavoters' ); ?></p>
				</article>
				<article>
					<span>03</span>
					<h3><?php esc_html_e( 'Create the moment', 'megavoters' ); ?></h3>
					<p><?php esc_html_e( 'The giver offers one treasured penny. The recipient personally accepts. The completed proof records Experience Presence.', 'megavoters' ); ?></p>
				</article>
			</div>
		</div>
	</section>

	<section class="mega-tp-wink" id="god-wink">
		<div class="mega-tp-wrap">
			<p class="mega-tp-kicker"><?php esc_html_e( 'The entire process is the discovery', 'megavoters' ); ?></p>
			<h2><?php esc_html_e( 'Your presence created the Easter Egg.', 'megavoters' ); ?></h2>
			<p><?php esc_html_e( 'You did not have to hunt for it, earn it, buy it or win it. By showing up and accepting one another’s presence, the benefactor and beneficiary created a God Wink moment together. You enjoy the Easter Egg.', 'megavoters' ); ?></p>
		</div>
	</section>

	<section class="mega-tp-section">
		<div class="mega-tp-wrap">
			<p class="mega-tp-kicker"><?php esc_html_e( 'Race to the bottom of the money pool', 'megavoters' ); ?></p>
			<h2><?php esc_html_e( 'Choose the smallest reference and leave room for others.', 'megavoters' ); ?></h2>
			<p class="mega-tp-intro"><?php esc_html_e( 'Three treasured pennies can record three separate encounters before one recipient reaches the same fixed daily capacity as one Guild-level encounter.', 'megavoters' ); ?></p>
			<div class="mega-tp-levels">
				<article class="is-treasure">
					<span><?php esc_html_e( 'Recommended', 'megavoters' ); ?></span>
					<strong>$0.01</strong>
					<h3><?php esc_html_e( 'Treasured Penny', 'megavoters' ); ?></h3>
					<p><?php esc_html_e( 'Individual gratitude that leaves room for more people to show up today.', 'megavoters' ); ?></p>
					<small><?php esc_html_e( '$0.01 NWP', 'megavoters' ); ?> &#x2250; <?php esc_html_e( '1 sextillion XP', 'megavoters' ); ?></small>
				</article>
				<article>
					<span><?php esc_html_e( 'Verified POC', 'megavoters' ); ?></span>
					<strong>$0.02</strong>
					<h3><?php esc_html_e( 'Patron Organizing Community', 'megavoters' ); ?></h3>
					<p><?php esc_html_e( 'A five-seller POC may recognize network-weighted presence at the community level.', 'megavoters' ); ?></p>
					<small><?php esc_html_e( '$0.02 NWP', 'megavoters' ); ?> &#x2250; <?php esc_html_e( '2 sextillion XP', 'megavoters' ); ?></small>
				</article>
				<article>
					<span><?php esc_html_e( 'Verified Guild', 'megavoters' ); ?></span>
					<strong>$0.03</strong>
					<h3><?php esc_html_e( 'Guild Standard', 'megavoters' ); ?></h3>
					<p><?php esc_html_e( 'Guild recognition that fills one recipient’s individual daily capacity.', 'megavoters' ); ?></p>
					<small><?php esc_html_e( '$0.03 NWP', 'megavoters' ); ?> &#x2250; <?php esc_html_e( '3 sextillion XP', 'megavoters' ); ?></small>
				</article>
			</div>
		</div>
	</section>

	<section class="mega-tp-section mega-tp-alt">
		<div class="mega-tp-wrap mega-tp-balance">
			<article>
				<h3><?php esc_html_e( 'Giving remains limitless.', 'megavoters' ); ?></h3>
				<p><?php esc_html_e( 'A seller/giver can initiate as many genuine, independently accepted acts of gratitude as people are willing to receive.', 'megavoters' ); ?></p>
			</article>
			<article>
				<h3><?php esc_html_e( 'Personal capacity remains fixed.', 'megavoters' ); ?></h3>
				<p><?php esc_html_e( 'A buyer/recipient may accept no more than $0.03 NWP into individual capacity each day. Additional accepted gratitude is supported by the Gratitude Community Surplus.', 'megavoters' ); ?></p>
			</article>
		</div>
	</section>

	<section class="mega-tp-close">
		<div class="mega-tp-wrap mega-tp-center">
			<h2><?php esc_html_e( 'Leave your wallet at home. Bring the one thing money cannot buy.', 'megavoters' ); ?></h2>
			<p><?php esc_html_e( 'Your time. Your choice. Your presence. One treasured penny simply lets another person say, “I am grateful you showed up.”', 'megavoters' ); ?></p>
			<a class="mega-tp-btn is-primary" href="<?php echo esc_url( $express_url ); ?>"><?php esc_html_e( 'Express Interest', 'megavoters' ); ?></a>
		</div>
	</section>

	<aside class="mega-tp-notice">
		<div class="mega-tp-wrap">
			<strong><?php esc_html_e( 'XP means Experience Presence.', 'megavoters' ); ?></strong>
			<p><?php esc_html_e( 'The $0.01, $0.02 and $0.03 amounts are Network Weighted Presence references only. They are not cash, cryptocurrency, wages, credit or payment obligations. No response is treated as a character judgment.', 'megavoters' ); ?></p>
		</div>
	</aside>
</main>

<?php
include get_stylesheet_directory() . '/inc/site-footer.php';
include get_stylesheet_directory() . '/inc/layout-end.php';
