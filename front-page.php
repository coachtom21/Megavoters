<?php
/**
 * MEGAvoters discovery landing — reproduced from the client portal source.
 *
 * @package MEGAvoters
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$mega_body_class = 'mega-home';
include get_stylesheet_directory() . '/inc/layout-start.php';
include get_stylesheet_directory() . '/inc/site-header.php';
?>

<main id="content">
	<section class="mega-media" id="top" aria-labelledby="mega-media-title">
		<div class="mega-media-intro">
			<p class="eyebrow"><i></i><?php esc_html_e( 'Watch and read', 'megavoters' ); ?></p>
			<h2 id="mega-media-title"><?php esc_html_e( 'Showing Up.', 'megavoters' ); ?> <em><?php esc_html_e( 'Make it equal.', 'megavoters' ); ?></em> <span aria-hidden="true">≐</span></h2>
			<p><?php esc_html_e( 'Begin with the Community Checkers gathering blueprint, then choose whether to continue to Legacy to Live By.', 'megavoters' ); ?></p>
		</div>
		<div class="mega-media-grid mega-media-grid--two">
			<article>
				<strong><?php esc_html_e( 'Video', 'megavoters' ); ?></strong>
				<div class="mega-media-frame">
					<video controls playsinline preload="metadata">
						<source src="<?php echo esc_url( megavoters_media_video_url() ); ?>" type="video/mp4">
						<?php esc_html_e( 'Your browser does not support the video tag.', 'megavoters' ); ?>
					</video>
				</div>
				<p><?php esc_html_e( 'Oligopoly: Community Checkers — The LAUGH Gathering Blueprint', 'megavoters' ); ?></p>
			</article>
			<article>
				<strong><?php esc_html_e( 'PDF', 'megavoters' ); ?></strong>
				<a class="mega-media-doc" href="<?php echo esc_url( megavoters_media_pdf_url() ); ?>" download>
					<span>
						<b><?php esc_html_e( 'Touchstone RSVP / LAUGH handout', 'megavoters' ); ?></b>
						<small><?php esc_html_e( 'Download PDF', 'megavoters' ); ?></small>
					</span>
					<span aria-hidden="true">→</span>
				</a>
			</article>
		</div>
	</section>

	<section class="pilot-hero">
		<div class="pilot-copy">
			<p class="eyebrow"><i></i><?php esc_html_e( 'Limited pilot • Peachtree Corners, Georgia', 'megavoters' ); ?></p>
			<h1><?php esc_html_e( 'Come curious.', 'megavoters' ); ?><br><em><?php esc_html_e( 'Leave with your choice.', 'megavoters' ); ?></em></h1>
			<p class="lede"><?php esc_html_e( 'A proposed one-location discovery experience where United Citizens can practice FAITH, explore Community Checkers, and decide whether showing up for one another can build peace—without surrendering identity, belief, or independence.', 'megavoters' ); ?></p>
			<div class="actions">
				<a class="button" href="<?php echo esc_url( megavoters_home_section( 'rsvp' ) ); ?>"><?php esc_html_e( 'Respond to the invitation', 'megavoters' ); ?> <span aria-hidden="true">→</span></a>
				<a class="text-link" href="<?php echo esc_url( megavoters_home_section( 'discover' ) ); ?>"><?php esc_html_e( 'Discover before deciding', 'megavoters' ); ?> <span aria-hidden="true">→</span></a>
			</div>
			<div class="trust">
				<span><?php esc_html_e( 'Free to explore', 'megavoters' ); ?></span>
				<span><?php esc_html_e( 'No app download', 'megavoters' ); ?></span>
				<span><?php esc_html_e( 'No judgment', 'megavoters' ); ?></span>
			</div>
		</div>
		<div class="pilot-art">
			<img src="<?php echo esc_url( megavoters_image_url( 'united-citizens.png' ) ); ?>" alt="<?php esc_attr_e( 'United Citizens — Your voice, your choice, your treasury', 'megavoters' ); ?>">
			<div class="pilot-badge">
				<b><?php esc_html_e( 'PROPOSED SITE', 'megavoters' ); ?></b>
				<span><?php esc_html_e( 'Unity Church–Atlanta', 'megavoters' ); ?><br><?php esc_html_e( 'Peachtree Corners, GA', 'megavoters' ); ?></span>
			</div>
		</div>
	</section>

	<section class="boundary">
		<strong><?php esc_html_e( 'Independent proposal • No affiliation or endorsement', 'megavoters' ); ?></strong>
		<span><?php esc_html_e( 'This portal presents concepts for discussion only. Every named venue, organization, group, company, technology, movement, church, institute, university, academic partner, and research audience is proposed or referenced for context. No affiliation, sponsorship, partnership, approval, participation, or endorsement is claimed or implied without written authorization.', 'megavoters' ); ?></span>
	</section>

	<section class="discover" id="discover">
		<div class="intro">
			<p class="eyebrow"><?php esc_html_e( 'Begin with one question', 'megavoters' ); ?></p>
			<h2><?php esc_html_e( 'Can you practice', 'megavoters' ); ?><br><em><?php esc_html_e( 'FAITH', 'megavoters' ); ?></em> <?php esc_html_e( 'with others?', 'megavoters' ); ?></h2>
			<p><?php esc_html_e( 'Not “Do we agree?” Not “Are we alike?” The pilot asks whether people with different experiences can meet one another through five shared relationship guidelines.', 'megavoters' ); ?></p>
		</div>
		<div class="faith-row">
			<article><b>F</b><span><?php esc_html_e( 'Fair', 'megavoters' ); ?></span></article>
			<article><b>A</b><span><?php esc_html_e( 'Accepting', 'megavoters' ); ?></span></article>
			<article><b>I</b><span><?php esc_html_e( 'Insightful', 'megavoters' ); ?></span></article>
			<article><b>T</b><span><?php esc_html_e( 'Transparent', 'megavoters' ); ?></span></article>
			<article><b>H</b><span><?php esc_html_e( 'Humble', 'megavoters' ); ?></span></article>
		</div>
		<blockquote><?php esc_html_e( 'Saved through Christ. Inspired by goodwill. Practicing FAITH with everyone.', 'megavoters' ); ?></blockquote>
		<p class="theology-note"><b><?php esc_html_e( 'Namaste Christian', 'megavoters' ); ?></b> <?php esc_html_e( 'is a proposed practice for this founding gathering. It accepts salvation through Christ while recognizing the dignity and goodwill of others. The symbolic “baptism of goodwill” is not sacramental baptism and does not measure salvation, belief, or spiritual worth.', 'megavoters' ); ?></p>
	</section>

	<section class="journey" id="pilot">
		<div class="intro centered">
			<p class="eyebrow"><?php esc_html_e( 'A proposed three-level pilot game', 'megavoters' ); ?></p>
			<h2><?php esc_html_e( 'Discover. Show up.', 'megavoters' ); ?><br><em><?php esc_html_e( 'Confirm—if you choose.', 'megavoters' ); ?></em></h2>
			<p><?php esc_html_e( 'Oligopoly is a proposed, free testnet discovery game: play-value accounting inspired by familiar board games and location-based discovery—not money, cryptocurrency, legal tender, or guaranteed purchasing power. No affiliation with or endorsement by any game, technology company, or trademark owner is claimed.', 'megavoters' ); ?></p>
		</div>
		<div class="journey-grid">
			<article>
				<span>01</span>
				<h3><?php esc_html_e( 'Discover', 'megavoters' ); ?></h3>
				<p><?php esc_html_e( 'Read the invitation. Explore the proposed meanings of MEGAvoter, Namaste Christian, Organized Krill, Community Checkers, and Detente 2030 before responding.', 'megavoters' ); ?></p>
				<small><?php esc_html_e( 'No registration required', 'megavoters' ); ?></small>
			</article>
			<article>
				<span>02</span>
				<h3><?php esc_html_e( 'Show up by choice', 'megavoters' ); ?></h3>
				<p><?php esc_html_e( 'RSVP an intention, select one touchstone word, or simply enter as an observer. Your smartphone is a voluntary scorecard—not a tracking device.', 'megavoters' ); ?></p>
				<small><?php esc_html_e( 'Intention is not attendance', 'megavoters' ); ?></small>
			</article>
			<article>
				<span>03</span>
				<h3><?php esc_html_e( 'Confirm together', 'megavoters' ); ?></h3>
				<p><?php esc_html_e( 'Deliberately scan to engage, observe without scanning, or walk away. A proposed two-scan Y/Y/Y process records only what people choose to confirm.', 'megavoters' ); ?></p>
				<small><?php esc_html_e( 'No response is a character judgment', 'megavoters' ); ?></small>
			</article>
		</div>
	</section>

	<section class="checker">
		<div>
			<p class="eyebrow light"><?php esc_html_e( 'Proposed Community Checkers', 'megavoters' ); ?></p>
			<h2><?php esc_html_e( 'One person.', 'megavoters' ); ?><br><em><?php esc_html_e( 'One checker.', 'megavoters' ); ?></em><br><?php esc_html_e( 'Three QR doorways.', 'megavoters' ); ?></h2>
			<p><?php esc_html_e( 'Each of us moves through life one precious moment at a time. The proposed portal design uses only three QR categories to record voluntary encounters.', 'megavoters' ); ?></p>
		</div>
		<div class="qr-cards">
			<article>
				<b>01</b>
				<h3><?php esc_html_e( 'Identity QR', 'megavoters' ); ?></h3>
				<p><?php esc_html_e( '“I choose to be recognized as present.”', 'megavoters' ); ?></p>
			</article>
			<article>
				<b>02</b>
				<h3><?php esc_html_e( 'YAM-is-On QR', 'megavoters' ); ?></h3>
				<p><?php esc_html_e( '“I choose to consider a Money encounter.”', 'megavoters' ); ?></p>
			</article>
			<article>
				<b>03</b>
				<h3><?php esc_html_e( 'Seeking Gratitude QR', 'megavoters' ); ?></h3>
				<p><?php esc_html_e( '“I choose to recognize presence without money.”', 'megavoters' ); ?></p>
			</article>
		</div>
	</section>

	<section class="proof">
		<div class="intro">
			<p class="eyebrow"><?php esc_html_e( 'The shared proof guideline', 'megavoters' ); ?></p>
			<h2><?php esc_html_e( 'Two scans.', 'megavoters' ); ?><br><em><?php esc_html_e( 'One Y/Y/Y truth test.', 'megavoters' ); ?></em></h2>
			<p><?php esc_html_e( 'Every issued Seller/Giver intention selects Money or Gratitude. The second checker independently answers three questions.', 'megavoters' ); ?></p>
		</div>
		<div class="proof-card">
			<div><b>Y₁</b><span><?php esc_html_e( 'Was it delivered?', 'megavoters' ); ?></span></div>
			<div><b>Y₂</b><span><?php esc_html_e( 'Did it reach the intended destination?', 'megavoters' ); ?></span></div>
			<div><b>Y₃</b><span><?php esc_html_e( 'Do you agree it happened?', 'megavoters' ); ?></span></div>
			<p><strong><?php esc_html_e( 'True ≐ Y₁ ∧ Y₂ ∧ Y₃', 'megavoters' ); ?></strong><?php esc_html_e( 'Only Y/Y/Y records True. Anything else records False—meaning proof is absent, never that a person is dishonest or unworthy.', 'megavoters' ); ?></p>
		</div>
	</section>

	<section class="privacy" id="privacy">
		<div class="privacy-icon" aria-hidden="true"><span>○</span></div>
		<div class="privacy-copy">
			<p class="eyebrow"><?php esc_html_e( 'Privacy can be this simple', 'megavoters' ); ?></p>
			<h2><?php esc_html_e( 'Scan nothing.', 'megavoters' ); ?><br><em><?php esc_html_e( 'Remain unrecognized.', 'megavoters' ); ?></em></h2>
			<p><?php esc_html_e( 'Bring your smartphone into the gathering without downloading an app or announcing your presence. Unless you deliberately scan one of the three authorized QR codes, no individual Community Checkers record is created.', 'megavoters' ); ?></p>
			<div class="privacy-promise">
				<strong><?php esc_html_e( 'A scan is affirmative participation.', 'megavoters' ); ?></strong>
				<span><?php esc_html_e( 'No passive check-in. No continuous location history. No facial recognition. No background identity capture. If you scan nothing, nothing follows you.', 'megavoters' ); ?></span>
			</div>
		</div>
	</section>

	<section class="pentagon">
		<div class="intro">
			<p class="eyebrow light"><?php esc_html_e( 'A proposed Organized Krill gathering', 'megavoters' ); ?></p>
			<h2><?php esc_html_e( 'Five branches.', 'megavoters' ); ?><br><em><?php esc_html_e( 'One proposed Peace Pentagon.', 'megavoters' ); ?></em></h2>
			<p><?php esc_html_e( 'Visitors may explore where their time, experience, and goodwill could help a community share rather than hoard.', 'megavoters' ); ?></p>
		</div>
		<div class="branches">
			<article class="planning"><b>01</b><h3><?php esc_html_e( 'Planning', 'megavoters' ); ?></h3></article>
			<article class="budget"><b>02</b><h3><?php esc_html_e( 'Budget', 'megavoters' ); ?></h3></article>
			<article class="media"><b>03</b><h3><?php esc_html_e( 'Media', 'megavoters' ); ?></h3></article>
			<article class="distribution"><b>04</b><h3><?php esc_html_e( 'Distribution', 'megavoters' ); ?></h3></article>
			<article class="membership"><b>05</b><h3><?php esc_html_e( 'Membership', 'megavoters' ); ?></h3></article>
		</div>
		<p class="sharing"><?php esc_html_e( 'Issue with intention. Receive with choice. Confirm with Y/Y/Y. Reconcile through trust.', 'megavoters' ); ?> <b><?php esc_html_e( 'No hoarding—only responsible sharing.', 'megavoters' ); ?></b></p>
	</section>

	<section class="rsvp" id="rsvp">
		<div>
			<p class="eyebrow"><?php esc_html_e( 'Your postcard is an invitation', 'megavoters' ); ?></p>
			<h2><?php esc_html_e( 'RSVP to discover.', 'megavoters' ); ?><br><em><?php esc_html_e( 'Showing up remains your choice.', 'megavoters' ); ?></em></h2>
			<p><?php esc_html_e( 'Responding records interest in the limited pilot and your selected touchstone word. It does not enroll you in a church, establish salvation, provide research consent, enter a prize promotion, create a financial pledge, or guarantee a touchstone or event seat.', 'megavoters' ); ?></p>
			<div class="rsvp-actions">
				<a class="button" href="<?php echo esc_url( megavoters_llb_home_url() ); ?>"><?php esc_html_e( 'Express interest', 'megavoters' ); ?> <span aria-hidden="true">→</span></a>
				<a class="text-link" href="<?php echo esc_url( megavoters_rsvp_mailto( 'Observe Limited Pilot' ) ); ?>"><?php esc_html_e( 'Observe the discovery', 'megavoters' ); ?> <span aria-hidden="true">→</span></a>
			</div>
		</div>
		<aside>
			<span><?php esc_html_e( 'FOUNDING POSSIBILITY', 'megavoters' ); ?></span>
			<h3><?php esc_html_e( 'A Baptism of Goodwill', 'megavoters' ); ?></h3>
			<p><?php esc_html_e( 'A symbolic moment of intention and renewal at the proposed Peachtree Corners location—never a substitute for Christian baptism or a judgment of faith.', 'megavoters' ); ?></p>
			<b><?php esc_html_e( 'God Wink! Hallelujah! Amen.', 'megavoters' ); ?></b>
		</aside>
	</section>

	<?php megavoters_render_coach_tom_welcome(); ?>

	<section class="next-paths" aria-labelledby="next-paths-title">
		<div class="intro centered">
			<p class="eyebrow"><?php esc_html_e( 'Choose your proposed next step', 'megavoters' ); ?></p>
			<h2 id="next-paths-title"><?php esc_html_e( 'Discovery begins here.', 'megavoters' ); ?><br><em><?php esc_html_e( 'Your path continues by choice.', 'megavoters' ); ?></em></h2>
			<p><?php esc_html_e( 'These independent websites serve different purposes. Following either link is voluntary and does not enroll you, create research consent, make a purchase, or establish affiliation with any referenced organization.', 'megavoters' ); ?></p>
		</div>
		<div class="path-cards">
			<a href="<?php echo esc_url( megavoters_hgr_url() ); ?>" target="_blank" rel="noopener noreferrer">
				<span><?php esc_html_e( 'HUMAN GOLD RUSH', 'megavoters' ); ?></span>
				<h3><?php esc_html_e( 'Join through Legacy to Live By', 'megavoters' ); ?></h3>
				<p><?php esc_html_e( 'Explore Practice FAITH, the proposed touchstone RSVP, and Human Gold Rush discovery.', 'megavoters' ); ?></p>
				<b><?php esc_html_e( 'Visit LegacyToLiveBy.org', 'megavoters' ); ?> <span aria-hidden="true">→</span></b>
			</a>
			<a href="<?php echo esc_url( megavoters_hbc_url() ); ?>" target="_blank" rel="noopener noreferrer">
				<span><?php esc_html_e( 'MEMBERSHIP & COMMERCE', 'megavoters' ); ?></span>
				<h3><?php esc_html_e( 'Continue to Human Blockchain', 'megavoters' ); ?></h3>
				<p><?php esc_html_e( 'Enter the proposed membership-registration and WooCommerce pathway. Final registration and store destinations remain subject to Utsav confirmation before public launch.', 'megavoters' ); ?></p>
				<b><?php esc_html_e( 'Visit HumanBlockchain.info', 'megavoters' ); ?> <span aria-hidden="true">→</span></b>
			</a>
		</div>
	</section>

	<section class="horizon">
		<p class="eyebrow light"><?php esc_html_e( 'The proposed larger horizon', 'megavoters' ); ?></p>
		<h2><?php esc_html_e( 'One careful pilot.', 'megavoters' ); ?><br><?php esc_html_e( 'A proposed path toward', 'megavoters' ); ?> <em><?php esc_html_e( 'Detente 2030.', 'megavoters' ); ?></em></h2>
		<p><?php esc_html_e( 'Human Gold is a proposed way to recognize what has been hiding in plain sight: finite time, presence, gratitude, service, and love freely shared. The proposed limited pilot asks only whether ordinary people will choose to discover it together.', 'megavoters' ); ?></p>
		<div>
			<span><?php esc_html_e( 'Participate', 'megavoters' ); ?></span>
			<span><?php esc_html_e( 'Observe', 'megavoters' ); ?></span>
			<span><?php esc_html_e( 'Walk away', 'megavoters' ); ?></span>
			<span><?php esc_html_e( 'No scan', 'megavoters' ); ?></span>
		</div>
	</section>
</main>

<?php
include get_stylesheet_directory() . '/inc/site-footer.php';
include get_stylesheet_directory() . '/inc/layout-end.php';
