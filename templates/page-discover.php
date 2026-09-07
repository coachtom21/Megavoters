<?php
/**
 * MEGAvoters /discover/ — Observe path. No forms, no records.
 *
 * @package MEGAvoters
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$home_url  = home_url( '/' );
$start_url = megavoters_page_url( 'start' );
$llb_url   = megavoters_llb_home_url();

$mega_body_class = 'mega-discover-body';
include get_stylesheet_directory() . '/inc/layout-start.php';
?>

<header class="mv-topbar">
	<div class="mv-wrap mv-topbar__inner">
		<a class="mv-brand" href="<?php echo esc_url( $home_url ); ?>" aria-label="<?php echo esc_attr__( 'MEGAvoters home', 'megavoters' ); ?>">
			<span class="mv-brand__mark" aria-hidden="true">M</span>
			<span>
				<strong><?php esc_html_e( 'MEGAvoters', 'megavoters' ); ?></strong>
				<small><?php esc_html_e( 'Make Everyone Great Again', 'megavoters' ); ?></small>
			</span>
		</a>
		<a class="mv-back" href="<?php echo esc_url( $start_url ); ?>"><?php esc_html_e( '← Return to your choice', 'megavoters' ); ?></a>
	</div>
</header>

<main id="content">
	<section class="mv-hero" aria-labelledby="discover-title">
		<div class="mv-wrap mv-hero__inner">
			<div>
				<p class="mv-eyebrow"><?php esc_html_e( 'Discover before deciding', 'megavoters' ); ?></p>
				<h1 id="discover-title"><?php esc_html_e( 'A small experiment in showing up.', 'megavoters' ); ?></h1>
				<p class="mv-hero__lead"><?php esc_html_e( 'The proposed pilot asks one human question: can people practice FAITH with one another and freely choose whether to turn an intention into presence?', 'megavoters' ); ?></p>
			</div>
			<dl class="mv-facts">
				<div><dt><?php esc_html_e( 'Format', 'megavoters' ); ?></dt><dd><?php esc_html_e( 'RSVP-only touchstone gathering', 'megavoters' ); ?></dd></div>
				<div><dt><?php esc_html_e( 'Location', 'megavoters' ); ?></dt><dd><?php esc_html_e( 'Peachtree Corners, Georgia — proposed', 'megavoters' ); ?></dd></div>
				<div><dt><?php esc_html_e( 'Cost', 'megavoters' ); ?></dt><dd><?php esc_html_e( 'No payment to attend the testnet experience', 'megavoters' ); ?></dd></div>
				<div><dt><?php esc_html_e( 'Your control', 'megavoters' ); ?></dt><dd><?php esc_html_e( 'Participate, observe, walk away, or scan nothing', 'megavoters' ); ?></dd></div>
			</dl>
		</div>
	</section>

	<section class="mv-section" aria-labelledby="idea-title">
		<div class="mv-wrap">
			<div class="mv-section-heading">
				<p class="mv-eyebrow"><?php esc_html_e( 'The whole idea', 'megavoters' ); ?></p>
				<h2 id="idea-title"><?php esc_html_e( 'Invitation first. Human connection second. Voluntary proof last.', 'megavoters' ); ?></h2>
				<p><?php esc_html_e( 'The technology does not create the human moment. It offers two people a way to confirm that a chosen encounter happened.', 'megavoters' ); ?></p>
			</div>
			<div class="mv-three">
				<article class="mv-card"><span class="mv-number">1</span><h3><?php esc_html_e( 'Discover', 'megavoters' ); ?></h3><p><?php esc_html_e( 'Read the invitation and learn what Practice FAITH, the touchstone, and the proposed LAUGH gathering mean. No registration is required.', 'megavoters' ); ?></p></article>
				<article class="mv-card"><span class="mv-number">2</span><h3><?php esc_html_e( 'Show up', 'megavoters' ); ?></h3><p><?php esc_html_e( 'If you choose, RSVP an intention and attend a local gathering. Showing up is the qualification—never payment.', 'megavoters' ); ?></p></article>
				<article class="mv-card"><span class="mv-number">3</span><h3><?php esc_html_e( 'Confirm together', 'megavoters' ); ?></h3><p><?php esc_html_e( 'Two registered devices may voluntarily confirm delivery and acceptance. A person may decline at any moment.', 'megavoters' ); ?></p></article>
			</div>
		</div>
	</section>

	<section class="mv-section mv-section--soft" aria-labelledby="happens-title">
		<div class="mv-wrap">
			<div class="mv-section-heading">
				<p class="mv-eyebrow"><?php esc_html_e( 'What happens at the pilot?', 'megavoters' ); ?></p>
				<h2 id="happens-title"><?php esc_html_e( 'A simple gathering—not a sales presentation.', 'megavoters' ); ?></h2>
				<p><?php esc_html_e( 'The proposed LAUGH event—Leaders Annual United Group Hug—centers hospitality, personal choice, and a complimentary Practice FAITH touchstone.', 'megavoters' ); ?></p>
			</div>
			<div class="mv-pilot-flow">
				<article class="mv-pilot-step"><span>1</span><div><h3><?php esc_html_e( 'Receive an invitation', 'megavoters' ); ?></h3><p><?php esc_html_e( 'A friend, neighbor, or organizer offers a Human Gold Rush RSVP postcard.', 'megavoters' ); ?></p></div></article>
				<article class="mv-pilot-step"><span>2</span><div><h3><?php esc_html_e( 'Choose one word', 'megavoters' ); ?></h3><p><?php esc_html_e( 'Select Courage, Kindness, Wisdom, Lucky, Belief, Gratitude, Health, Happiness, Dream, Believe, Wealth, or Healing.', 'megavoters' ); ?></p></div></article>
				<article class="mv-pilot-step"><span>3</span><div><h3><?php esc_html_e( 'RSVP if you wish', 'megavoters' ); ?></h3><p><?php esc_html_e( 'An RSVP records intention. It is not attendance, membership, church enrollment, research consent, or a financial pledge.', 'megavoters' ); ?></p></div></article>
				<article class="mv-pilot-step"><span>4</span><div><h3><?php esc_html_e( 'Arrive by choice', 'megavoters' ); ?></h3><p><?php esc_html_e( 'Come to the proposed gathering, take an available place, and receive the reserved touchstone if available.', 'megavoters' ); ?></p></div></article>
				<article class="mv-pilot-step"><span>5</span><div><h3><?php esc_html_e( 'Speak—or remain private', 'megavoters' ); ?></h3><p><?php esc_html_e( 'An optional open mic welcomes a word, branch, or God Wink reflection. What anyone says is not recorded.', 'megavoters' ); ?></p></div></article>
				<article class="mv-pilot-step"><span>6</span><div><h3><?php esc_html_e( 'Scan—or do not scan', 'megavoters' ); ?></h3><p><?php esc_html_e( 'Two devices may confirm the encounter. No app download, passive check-in, or continuous location history is required.', 'megavoters' ); ?></p></div></article>
			</div>
		</div>
	</section>

	<section class="mv-section" aria-labelledby="measure-title">
		<div class="mv-wrap">
			<div class="mv-section-heading">
				<p class="mv-eyebrow"><?php esc_html_e( 'A narrow measurement', 'megavoters' ); ?></p>
				<h2 id="measure-title"><?php esc_html_e( 'Count the encounter. Protect the person.', 'megavoters' ); ?></h2>
				<p><?php esc_html_e( 'The pilot studies whether invitation becomes RSVP, attendance, and voluntary confirmation. It does not score belief, goodness, or human worth.', 'megavoters' ); ?></p>
			</div>
			<div class="mv-two">
				<article class="mv-list-card mv-list-card--count">
					<h3><?php esc_html_e( 'What may be counted', 'megavoters' ); ?></h3>
					<ul>
						<li><?php esc_html_e( 'Invitations distributed', 'megavoters' ); ?></li>
						<li><?php esc_html_e( 'Confirmed RSVPs', 'megavoters' ); ?></li>
						<li><?php esc_html_e( 'People who arrive', 'megavoters' ); ?></li>
						<li><?php esc_html_e( 'Touchstones accepted', 'megavoters' ); ?></li>
						<li><?php esc_html_e( 'People who voluntarily speak', 'megavoters' ); ?></li>
						<li><?php esc_html_e( 'Optional two-device confirmations', 'megavoters' ); ?></li>
					</ul>
				</article>
				<article class="mv-list-card mv-list-card--private">
					<h3><?php esc_html_e( 'What remains private', 'megavoters' ); ?></h3>
					<ul>
						<li><?php esc_html_e( 'The word you selected', 'megavoters' ); ?></li>
						<li><?php esc_html_e( 'Why you selected it', 'megavoters' ); ?></li>
						<li><?php esc_html_e( 'Your open-mic reflection', 'megavoters' ); ?></li>
						<li><?php esc_html_e( 'Your spiritual or counseling story', 'megavoters' ); ?></li>
						<li><?php esc_html_e( 'Your reason for observing or leaving', 'megavoters' ); ?></li>
						<li><?php esc_html_e( 'Any judgment about your character', 'megavoters' ); ?></li>
					</ul>
				</article>
			</div>
			<div class="mv-choice-note">
				<strong><?php esc_html_e( 'No response is also a response.', 'megavoters' ); ?></strong>
				<p><?php esc_html_e( 'Silence, observation, declining to scan, and walking away are valid outcomes. Nothing about those choices establishes a person’s character or worth.', 'megavoters' ); ?></p>
			</div>
		</div>
	</section>

	<section class="mv-section mv-section--soft" aria-labelledby="faq-title">
		<div class="mv-wrap">
			<div class="mv-section-heading">
				<p class="mv-eyebrow"><?php esc_html_e( 'Plain answers', 'megavoters' ); ?></p>
				<h2 id="faq-title"><?php esc_html_e( 'Before you choose', 'megavoters' ); ?></h2>
			</div>
			<div class="mv-faq">
				<details>
					<summary><?php esc_html_e( 'Is this a church program?', 'megavoters' ); ?></summary>
					<p><?php esc_html_e( 'No. Unity Church–Atlanta and Reverend Jenn have been invited to consider a proposed Peachtree Corners pilot, but no participation, affiliation, approval, or endorsement is claimed without express written acceptance.', 'megavoters' ); ?></p>
				</details>
				<details>
					<summary><?php esc_html_e( 'Must I be Christian or accept Namaste Christian?', 'megavoters' ); ?></summary>
					<p><?php esc_html_e( 'No belief test is used. Practice FAITH is presented as a relationship guideline: Fair, Accepting, Insightful, Transparent, and Humble. No choice measures salvation, faith, or spiritual worth.', 'megavoters' ); ?></p>
				</details>
				<details>
					<summary><?php esc_html_e( 'Does discovering the pilot register my device?', 'megavoters' ); ?></summary>
					<p><?php esc_html_e( 'No. Reading this page creates no device registration. Registration begins only after you deliberately return to Start, choose Participate, and continue to HumanBlockchain.info.', 'megavoters' ); ?></p>
				</details>
				<details>
					<summary><?php esc_html_e( 'Is XP money or a prize?', 'megavoters' ); ?></summary>
					<p><?php esc_html_e( 'No. XP means Experience Presence. It is proposed testnet recognition of a mutually confirmed encounter—not currency, legal tender, wages, a prize, or a measure of human worth.', 'megavoters' ); ?></p>
				</details>
				<details>
					<summary><?php esc_html_e( 'What counts as successful onboarding?', 'megavoters' ); ?></summary>
					<p><?php esc_html_e( 'Both a registered device and explicit Discord Gracebook covenant acceptance are required. A page visit, QR scan, RSVP, Discord server join, or verbal expression of interest is not completed onboarding.', 'megavoters' ); ?></p>
				</details>
			</div>
		</div>
	</section>

	<section class="mv-cta" aria-labelledby="next-title">
		<div class="mv-wrap">
			<p class="mv-eyebrow"><?php esc_html_e( 'Your choice remains yours', 'megavoters' ); ?></p>
			<h2 id="next-title"><?php esc_html_e( 'Ready to choose—or still curious?', 'megavoters' ); ?></h2>
			<p><?php esc_html_e( 'Return to the three choices when you are ready. You may participate, continue observing, or walk away without judgment.', 'megavoters' ); ?></p>
			<div class="mv-actions">
				<a class="mv-button" href="<?php echo esc_url( $start_url ); ?>"><?php esc_html_e( 'Return to Start', 'megavoters' ); ?></a>
				<a class="mv-button mv-button--ghost" href="<?php echo esc_url( $llb_url ); ?>"><?php esc_html_e( 'Explore the touchstone story', 'megavoters' ); ?></a>
			</div>
		</div>
	</section>
</main>

<footer class="mv-footer">
	<div class="mv-wrap">
		<p><?php esc_html_e( 'Independent, nonpartisan proposed testnet. All named hosts, venues, churches, organizations, companies, academic institutions, and research relationships remain proposed unless accepted in writing. No affiliation or endorsement is claimed or implied.', 'megavoters' ); ?></p>
	</div>
</footer>

<?php
include get_stylesheet_directory() . '/inc/layout-end.php';
