<?php
/**
 * The Pilot — client “What happens at this pilot” + $30/$4 study guide.
 *
 * @package Miners
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$mega_body_class = 'mega-inner mega-the-pilot-body';
include get_stylesheet_directory() . '/inc/layout-start.php';
include get_stylesheet_directory() . '/inc/site-header.php';
?>

<main class="mv-page" id="content">
	<section class="mv-hero" aria-labelledby="page-title">
		<div class="mv-wrap mv-hero__grid">
			<div>
				<p class="mv-eyebrow"><?php esc_html_e( 'Proposed RSVP touchstone pilot', 'megavoters' ); ?></p>
				<h1 id="page-title"><?php esc_html_e( 'Show up.', 'megavoters' ); ?><br><span><?php esc_html_e( 'Choose whether to scan.', 'megavoters' ); ?></span></h1>
				<p class="mv-lead"><?php esc_html_e( 'A small LAUGH gathering where people RSVP, arrive, and may accept a Practice FAITH touchstone. Two smartphones can confirm the encounter—but attendance never requires payment, trade, testimony, or a scan.', 'megavoters' ); ?></p>
				<div class="mv-actions">
					<a class="mv-button mv-button--primary" href="#pilot"><?php esc_html_e( 'What happens at the pilot?', 'megavoters' ); ?></a>
					<a class="mv-button mv-button--ghost" href="#study-guide"><?php esc_html_e( 'Understand $30 + $4', 'megavoters' ); ?></a>
				</div>
			</div>
			<aside class="mv-promise-card" aria-label="<?php echo esc_attr__( 'At the proposed pilot', 'megavoters' ); ?>">
				<span class="mv-promise-card__label"><?php esc_html_e( 'At the proposed pilot', 'megavoters' ); ?></span>
				<ol class="mv-hero-list">
					<li><?php esc_html_e( 'Receive an invitation', 'megavoters' ); ?></li>
					<li><?php esc_html_e( 'RSVP if you wish', 'megavoters' ); ?></li>
					<li><?php esc_html_e( 'Show up', 'megavoters' ); ?></li>
					<li><?php esc_html_e( 'Accept a touchstone if available', 'megavoters' ); ?></li>
					<li><?php esc_html_e( 'Scan or do not scan', 'megavoters' ); ?></li>
				</ol>
				<p class="mv-hero-list__note"><?php esc_html_e( 'The person—not the device—always chooses.', 'megavoters' ); ?></p>
			</aside>
		</div>
	</section>

	<section class="mv-section mv-pilot" id="pilot" aria-labelledby="pilot-title">
		<div class="mv-wrap">
			<p class="mv-kicker"><?php esc_html_e( 'What happens at this pilot?', 'megavoters' ); ?></p>
			<h2 id="pilot-title"><?php esc_html_e( 'A small RSVP gathering that measures showing up—not personal beliefs.', 'megavoters' ); ?></h2>
			<p class="mv-intro mv-pilot__intro"><?php esc_html_e( 'The proposed first LAUGH event—Leaders Annual United Group Hug—is a simple, RSVP-only touchstone gathering. No host participation or endorsement should be assumed without an express response.', 'megavoters' ); ?></p>

			<div class="mv-pilot-flow" aria-label="<?php echo esc_attr__( 'Six steps in the proposed pilot', 'megavoters' ); ?>">
				<article>
					<span>1</span>
					<div>
						<h3><?php esc_html_e( 'Invitation', 'megavoters' ); ?></h3>
						<p><?php esc_html_e( 'A person receives a Human Gold Rush postcard with the Practice FAITH question and 12 touchstone-word choices.', 'megavoters' ); ?></p>
					</div>
				</article>
				<article>
					<span>2</span>
					<div>
						<h3><?php esc_html_e( 'RSVP', 'megavoters' ); ?></h3>
						<p><?php esc_html_e( 'The person voluntarily reserves a place. An RSVP expresses interest; it creates no payment or obligation.', 'megavoters' ); ?></p>
					</div>
				</article>
				<article>
					<span>3</span>
					<div>
						<h3><?php esc_html_e( 'Arrival', 'megavoters' ); ?></h3>
						<p><?php esc_html_e( 'The guest checks in at the gathering. Showing up is the qualification—never payment.', 'megavoters' ); ?></p>
					</div>
				</article>
				<article>
					<span>4</span>
					<div>
						<h3><?php esc_html_e( 'Touchstone', 'megavoters' ); ?></h3>
						<p><?php esc_html_e( 'If available, the guest accepts the chosen touchstone at the event. No RSVP or arrival confirmation means no reserved stone.', 'megavoters' ); ?></p>
					</div>
				</article>
				<article>
					<span>5</span>
					<div>
						<h3><?php esc_html_e( 'Optional two-device scan', 'megavoters' ); ?></h3>
						<p><?php esc_html_e( 'The host and guest may confirm delivery and acceptance using two nearby smartphones. No scan and walking away remain valid choices.', 'megavoters' ); ?></p>
					</div>
				</article>
				<article>
					<span>6</span>
					<div>
						<h3><?php esc_html_e( 'Optional open mic', 'megavoters' ); ?></h3>
						<p><?php esc_html_e( 'A guest may speak about a word, a Peace Pentagon branch, or a God Wink moment. Speaking is welcomed, never required.', 'megavoters' ); ?></p>
					</div>
				</article>
			</div>

			<div class="mv-measure-grid">
				<article class="mv-measure mv-measure--yes">
					<h3><?php esc_html_e( 'What the pilot counts', 'megavoters' ); ?></h3>
					<ul>
						<li><?php esc_html_e( 'Confirmed RSVPs', 'megavoters' ); ?></li>
						<li><?php esc_html_e( 'People who arrive', 'megavoters' ); ?></li>
						<li><?php esc_html_e( 'Touchstones accepted and confirmed', 'megavoters' ); ?></li>
						<li><?php esc_html_e( 'Number of people who choose to speak', 'megavoters' ); ?></li>
						<li><?php esc_html_e( 'Optional two-device presence confirmations', 'megavoters' ); ?></li>
					</ul>
				</article>
				<article class="mv-measure mv-measure--no">
					<h3><?php esc_html_e( 'What the pilot does not record', 'megavoters' ); ?></h3>
					<ul>
						<li><?php esc_html_e( 'The touchstone word a person selected', 'megavoters' ); ?></li>
						<li><?php esc_html_e( 'The Peace Pentagon branch they discussed', 'megavoters' ); ?></li>
						<li><?php esc_html_e( 'What they said at the open mic', 'megavoters' ); ?></li>
						<li><?php esc_html_e( 'Their private counseling or spiritual story', 'megavoters' ); ?></li>
						<li><?php esc_html_e( 'A character judgment about anyone who declines', 'megavoters' ); ?></li>
					</ul>
				</article>
			</div>

			<div class="mv-pilot-note">
				<strong><?php esc_html_e( 'The first pilot is about gratitude and presence.', 'megavoters' ); ?></strong>
				<p><?php esc_html_e( 'The $30 trade-value and $4 social-impact model may be explained as a testnet study guide, but attending the RSVP touchstone event does not require a purchase, payment, trade, testimony, or scan.', 'megavoters' ); ?></p>
			</div>
		</div>
	</section>

	<section class="mv-section" id="how-it-works" aria-labelledby="how-title">
		<div class="mv-wrap">
			<p class="mv-kicker"><?php esc_html_e( 'Simple by design', 'megavoters' ); ?></p>
			<h2 id="how-title"><?php esc_html_e( 'A human encounter first. A ledger entry second.', 'megavoters' ); ?></h2>
			<div class="mv-steps">
				<article class="mv-step">
					<span class="mv-step__number">1</span>
					<h3><?php esc_html_e( 'An offer is made', 'megavoters' ); ?></h3>
					<p><?php esc_html_e( 'A participating Miner initiates a YAM-is-On offer with a stated trade value of $30.', 'megavoters' ); ?></p>
				</article>
				<article class="mv-step">
					<span class="mv-step__number">2</span>
					<h3><?php esc_html_e( 'Two devices confirm', 'megavoters' ); ?></h3>
					<p><?php esc_html_e( 'The giver and recipient voluntarily confirm delivery and acceptance within the testnet’s time-and-distance window.', 'megavoters' ); ?></p>
				</article>
				<article class="mv-step">
					<span class="mv-step__number">3</span>
					<h3><?php esc_html_e( 'The $4 promise opens', 'megavoters' ); ?></h3>
					<p><?php esc_html_e( 'A linked social-impact obligation remains open for up to 12 weeks. The original encounter is never erased.', 'megavoters' ); ?></p>
				</article>
				<article class="mv-step">
					<span class="mv-step__number">4</span>
					<h3><?php esc_html_e( 'The community reports', 'megavoters' ); ?></h3>
					<p><?php esc_html_e( 'The promise is marked trusted, disputed, reconciled, or extinguished in an append-only history.', 'megavoters' ); ?></p>
				</article>
			</div>
		</div>
	</section>

	<section class="mv-section mv-section--soft" id="study-guide" aria-labelledby="breakdown-title">
		<div class="mv-wrap mv-two-column">
			<div>
				<p class="mv-kicker"><?php esc_html_e( 'The $30 study guide', 'megavoters' ); ?></p>
				<h2 id="breakdown-title"><?php esc_html_e( 'Where the stated value is intended to go', 'megavoters' ); ?></h2>
				<p class="mv-intro"><?php esc_html_e( 'This is a transparent allocation model for study and feedback. It does not, by itself, prove that cash changed hands or that an impact occurred.', 'megavoters' ); ?></p>
			</div>
			<div class="mv-breakdown" role="list" aria-label="<?php echo esc_attr__( '$30 stated trade-value allocation', 'megavoters' ); ?>">
				<div class="mv-breakdown__row" role="listitem"><span><?php esc_html_e( 'Estimated cost of goods', 'megavoters' ); ?></span><strong>$10.00</strong></div>
				<div class="mv-breakdown__row mv-breakdown__row--impact" role="listitem"><span><?php esc_html_e( 'Social-impact promise', 'megavoters' ); ?></span><strong>$4.00</strong></div>
				<div class="mv-breakdown__row" role="listitem"><span><?php esc_html_e( 'Buyer/recipient consideration', 'megavoters' ); ?></span><strong>$5.00</strong></div>
				<div class="mv-breakdown__row" role="listitem"><span><?php esc_html_e( 'Patronage/community allocation', 'megavoters' ); ?></span><strong>$1.00</strong></div>
				<div class="mv-breakdown__row" role="listitem"><span><?php esc_html_e( 'Platform/sustainability allocation', 'megavoters' ); ?></span><strong>$0.30</strong></div>
				<div class="mv-breakdown__row" role="listitem"><span><?php esc_html_e( 'Seller margin', 'megavoters' ); ?></span><strong>$9.70</strong></div>
				<div class="mv-breakdown__total" role="listitem"><span><?php esc_html_e( 'Total stated trade value', 'megavoters' ); ?></span><strong>$30.00</strong></div>
			</div>
		</div>
	</section>

	<section class="mv-section" aria-labelledby="feedback-title">
		<div class="mv-wrap">
			<p class="mv-kicker"><?php esc_html_e( 'The 12-week feedback loop', 'megavoters' ); ?></p>
			<h2 id="feedback-title"><?php esc_html_e( 'Record the promise. Then report the outcome.', 'megavoters' ); ?></h2>
			<div class="mv-status-grid">
				<article class="mv-status mv-status--pending">
					<h3><?php esc_html_e( 'Pending', 'megavoters' ); ?></h3>
					<p><?php esc_html_e( 'The $4 promise is recorded and the feedback window remains open.', 'megavoters' ); ?></p>
				</article>
				<article class="mv-status mv-status--trusted">
					<h3><?php esc_html_e( 'Trusted', 'megavoters' ); ?></h3>
					<p><?php esc_html_e( 'The reported community impact was accepted without dispute.', 'megavoters' ); ?></p>
				</article>
				<article class="mv-status mv-status--disputed">
					<h3><?php esc_html_e( 'Disputed', 'megavoters' ); ?></h3>
					<p><?php esc_html_e( 'Someone questioned whether the disclosed impact occurred as described.', 'megavoters' ); ?></p>
				</article>
				<article class="mv-status mv-status--reconciled">
					<h3><?php esc_html_e( 'Reconciled', 'megavoters' ); ?></h3>
					<p><?php esc_html_e( 'The parties or community documented how the question was resolved.', 'megavoters' ); ?></p>
				</article>
				<article class="mv-status mv-status--extinguished">
					<h3><?php esc_html_e( 'Extinguished', 'megavoters' ); ?></h3>
					<p><?php esc_html_e( 'The window closed without enough evidence or reconciliation. The encounter record remains.', 'megavoters' ); ?></p>
				</article>
			</div>
		</div>
	</section>

	<section class="mv-section mv-section--dark" id="choice" aria-labelledby="choice-title">
		<div class="mv-wrap mv-choice">
			<div>
				<p class="mv-kicker"><?php esc_html_e( 'Your voice. Your choice.', 'megavoters' ); ?></p>
				<h2 id="choice-title"><?php esc_html_e( 'Scan—or don’t scan.', 'megavoters' ); ?></h2>
				<p><?php esc_html_e( 'Participation is voluntary, moment by moment. No scan, no response, and walking away are valid choices. The project measures an encounter; it does not judge a person.', 'megavoters' ); ?></p>
			</div>
			<ul class="mv-checks">
				<li><?php esc_html_e( 'No wallet required for the testnet experience', 'megavoters' ); ?></li>
				<li><?php esc_html_e( 'No XP represented as money', 'megavoters' ); ?></li>
				<li><?php esc_html_e( 'No custody or automatic transfer of the $4', 'megavoters' ); ?></li>
				<li><?php esc_html_e( 'No private story required', 'megavoters' ); ?></li>
				<li><?php esc_html_e( 'No promise counted as impact without feedback', 'megavoters' ); ?></li>
			</ul>
		</div>
	</section>

	<section class="mv-section" aria-labelledby="paths-title">
		<div class="mv-wrap">
			<p class="mv-kicker"><?php esc_html_e( 'Two paths • one human choice', 'megavoters' ); ?></p>
			<h2 id="paths-title"><?php esc_html_e( 'Trade and gratitude never become the same thing.', 'megavoters' ); ?></h2>
			<div class="mv-paths">
				<article class="mv-path mv-path--trade">
					<span><?php esc_html_e( 'YAM-is-On', 'megavoters' ); ?></span>
					<h3><?php esc_html_e( 'Trade pathway', 'megavoters' ); ?></h3>
					<p><?php esc_html_e( 'A $30 stated trade-value encounter with the $4 social-impact promise included. Any actual payment or financial record must be established separately.', 'megavoters' ); ?></p>
				</article>
				<article class="mv-path mv-path--gratitude">
					<span><?php esc_html_e( 'Seeking Gratitude', 'megavoters' ); ?></span>
					<h3><?php esc_html_e( 'Gratitude pathway', 'megavoters' ); ?></h3>
					<p><?php esc_html_e( 'A $30 trade-value-equivalent study allocation recognized only as Experience Presence. It is never money, a payment claim, or a collectible obligation.', 'megavoters' ); ?></p>
				</article>
			</div>
		</div>
	</section>

	<section class="mv-section mv-callout" aria-labelledby="bottom-line-title">
		<div class="mv-wrap">
			<p class="mv-kicker"><?php esc_html_e( 'The bottom line', 'megavoters' ); ?></p>
			<h2 id="bottom-line-title"><?php esc_html_e( 'The testnet records what people agreed happened—and whether the community impact was later supported.', 'megavoters' ); ?></h2>
			<p><?php esc_html_e( 'It does not hold money, guarantee an outcome, or turn human presence into currency.', 'megavoters' ); ?></p>
			<p class="mv-footnote"><?php esc_html_e( 'Proposed behavioral-research testnet. References to academic institutions, companies, community partners, or other organizations remain proposed unless each party expressly accepts participation. This page is a study guide, not financial, tax, accounting, or legal advice.', 'megavoters' ); ?></p>
		</div>
	</section>
</main>

<?php
include get_stylesheet_directory() . '/inc/site-footer.php';
include get_stylesheet_directory() . '/inc/layout-end.php';
