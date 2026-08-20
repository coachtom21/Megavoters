<?php
/**
 * Guidelines + Study Guide — client megavoters-guidelines.html
 *
 * @package MEGAvoters
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$pdf_url = function_exists( 'megavoters_study_guide_url' )
	? megavoters_study_guide_url()
	: megavoters_asset_url( 'pdf/Oligopoly_United_Citizens_Study_Guide.pdf' );
$video_url = function_exists( 'megavoters_guidelines_video_url' )
	? megavoters_guidelines_video_url()
	: 'https://humanblockchain.info/wp-content/uploads/2026/08/Architecting_Oligopoly__The_Dual-Ledger_System_of_Presence_and_.mp4';
$podcast_url = function_exists( 'megavoters_guidelines_podcast_url' )
	? megavoters_guidelines_podcast_url()
	: 'https://humanblockchain.info/wp-content/uploads/2026/08/A_Sextillion_Points_for_Human_Presence.mp4';

$mega_body_class = 'mega-inner mega-gl-body';
include get_stylesheet_directory() . '/inc/layout-start.php';
include get_stylesheet_directory() . '/inc/site-header.php';
?>

<main id="content" class="mega-gl-page">
	<section class="hero">
		<div class="wrap">
			<p class="eyebrow"><?php esc_html_e( 'Guidelines • Oligopoly • United Citizens', 'megavoters' ); ?></p>
			<h1><?php esc_html_e( 'Move when you choose. Serve without fear of extraction.', 'megavoters' ); ?></h1>
			<p class="lead"><?php esc_html_e( 'Community Checkers are United Citizens who move through life circle by circle. We gather, celebrate, meet community needs, and serve others. Scan Identity, Trade, or Gratitude to join the adventure—or walk away and come back whenever curiosity returns.', 'megavoters' ); ?></p>
			<div class="buttons">
				<a class="btn gold" href="#guidelines"><?php esc_html_e( 'Read the guidelines', 'megavoters' ); ?></a>
				<a class="btn" href="#watch"><?php esc_html_e( 'Watch or listen', 'megavoters' ); ?></a>
				<a class="btn" href="<?php echo esc_url( $pdf_url ); ?>" download><?php esc_html_e( 'Download the study guide', 'megavoters' ); ?></a>
			</div>
		</div>
	</section>

	<section class="section white" id="watch">
		<div class="wrap">
			<span class="kicker"><?php esc_html_e( 'Watch and listen', 'megavoters' ); ?></span>
			<h2 class="title"><?php esc_html_e( 'Guidelines video and podcast', 'megavoters' ); ?></h2>
			<p class="intro"><?php esc_html_e( 'Begin with the dual-ledger explainer, then listen to the presence podcast. Both remain optional. You may read the guidelines without watching or listening.', 'megavoters' ); ?></p>
			<div class="media-grid">
				<article class="card media-card">
					<h3><?php esc_html_e( 'Video', 'megavoters' ); ?></h3>
					<p><?php esc_html_e( 'Architecting Oligopoly: The Dual-Ledger System of Presence.', 'megavoters' ); ?></p>
					<div class="media-frame">
						<video controls playsinline preload="metadata">
							<source src="<?php echo esc_url( $video_url ); ?>" type="video/mp4">
							<?php esc_html_e( 'Your browser does not support the video tag.', 'megavoters' ); ?>
						</video>
					</div>
				</article>
				<article class="card media-card">
					<h3><?php esc_html_e( 'Podcast', 'megavoters' ); ?></h3>
					<p><?php esc_html_e( 'A Sextillion Points for Human Presence.', 'megavoters' ); ?></p>
					<div class="media-frame">
						<video controls playsinline preload="metadata">
							<source src="<?php echo esc_url( $podcast_url ); ?>" type="video/mp4">
							<?php esc_html_e( 'Your browser does not support the video tag.', 'megavoters' ); ?>
						</video>
					</div>
				</article>
			</div>
		</div>
	</section>

	<section class="section" id="adventure">
		<div class="wrap">
			<span class="kicker"><?php esc_html_e( 'The three-site journey', 'megavoters' ); ?></span>
			<h2 class="title"><?php esc_html_e( 'Invitation first. Human connection second. Voluntary proof last.', 'megavoters' ); ?></h2>
			<p class="intro"><?php esc_html_e( 'Each portal has one job. Nobody must complete the entire journey to deserve gratitude or belong at a gathering.', 'megavoters' ); ?></p>
			<div class="grid three">
				<article class="card">
					<span class="num">1</span>
					<h3><?php esc_html_e( 'MEGAvoters.com', 'megavoters' ); ?></h3>
					<p><?php esc_html_e( 'Meet United Citizens and choose whether to observe or participate in the Oligopoly adventure.', 'megavoters' ); ?></p>
				</article>
				<article class="card">
					<span class="num">2</span>
					<h3><?php esc_html_e( 'LegacyToLiveBy.org', 'megavoters' ); ?></h3>
					<p><?php esc_html_e( 'Enter the Human Gold Rush through the FAITH covenant, touchstone RSVP, and LAUGH gatherings.', 'megavoters' ); ?></p>
				</article>
				<article class="card">
					<span class="num">3</span>
					<h3><?php esc_html_e( 'HumanBlockchain.info', 'megavoters' ); ?></h3>
					<p><?php esc_html_e( 'Use one of three voluntary QR doors to recognize an accepted moment of Experience Presence.', 'megavoters' ); ?></p>
				</article>
			</div>
			<div class="statement">
				<blockquote><?php esc_html_e( 'Human presence ≐ one sextillion XP.', 'megavoters' ); ?></blockquote>
				<p><?php esc_html_e( 'The dot-over-equal sign expresses a Human Gold correlation—not cash value, collateral, or a price placed on any person.', 'megavoters' ); ?></p>
			</div>
		</div>
	</section>

	<section class="section white" id="guidelines">
		<div class="wrap">
			<span class="kicker"><?php esc_html_e( 'Community Checkers covenant', 'megavoters' ); ?></span>
			<h2 class="title"><?php esc_html_e( 'The next move always belongs to you', 'megavoters' ); ?></h2>
			<div class="grid two">
				<article class="card">
					<h3><?php esc_html_e( 'Privacy before recognition', 'megavoters' ); ?></h3>
					<p><?php esc_html_e( 'The core Oligopoly scan requires no name, login, password, CAPTCHA, email, phone number, or public profile. Membership, Discord Gracebook, RSVP notices, and WooCommerce remain separate opt-in paths.', 'megavoters' ); ?></p>
				</article>
				<article class="card">
					<h3><?php esc_html_e( 'No extraction', 'megavoters' ); ?></h3>
					<p><?php esc_html_e( 'No scan, gift, offer, or XP entry creates ownership of another person, a debt, a required response, or permission to judge someone’s character.', 'megavoters' ); ?></p>
				</article>
				<article class="card">
					<h3><?php esc_html_e( 'Gratitude is bestowed', 'megavoters' ); ?></h3>
					<p><?php esc_html_e( 'A seller/giver may recognize presence and service one sextillion XP at a time. The buyer/recipient owes nothing and controls acceptance.', 'megavoters' ); ?></p>
				</article>
				<article class="card">
					<h3><?php esc_html_e( 'Roles remain flexible', 'megavoters' ); ?></h3>
					<p><?php esc_html_e( 'A person may give in one circle, receive in another, observe without posting, or leave and return later.', 'megavoters' ); ?></p>
				</article>
			</div>
			<div class="grid four">
				<article class="card choice">
					<strong><?php esc_html_e( 'Scan and accept', 'megavoters' ); ?></strong>
					<span><?php esc_html_e( 'Post 10¹⁸ XP.', 'megavoters' ); ?></span>
				</article>
				<article class="card choice">
					<strong><?php esc_html_e( 'Observe', 'megavoters' ); ?></strong>
					<span><?php esc_html_e( 'Join without posting.', 'megavoters' ); ?></span>
				</article>
				<article class="card choice">
					<strong><?php esc_html_e( 'Decline', 'megavoters' ); ?></strong>
					<span><?php esc_html_e( 'Accept nothing.', 'megavoters' ); ?></span>
				</article>
				<article class="card choice">
					<strong><?php esc_html_e( 'Walk away', 'megavoters' ); ?></strong>
					<span><?php esc_html_e( 'Return when desired.', 'megavoters' ); ?></span>
				</article>
			</div>
		</div>
	</section>

	<section class="section" id="roles">
		<div class="wrap">
			<span class="kicker"><?php esc_html_e( 'Identity • Trade • Gratitude', 'megavoters' ); ?></span>
			<h2 class="title"><?php esc_html_e( 'Three QR doors into the same adventure', 'megavoters' ); ?></h2>
			<div class="grid three">
				<article class="card">
					<h3><?php esc_html_e( 'Identity', 'megavoters' ); ?></h3>
					<p><strong><?php esc_html_e( 'I am present.', 'megavoters' ); ?></strong> <?php esc_html_e( 'The device recognizes presence without establishing a public personal identity.', 'megavoters' ); ?></p>
				</article>
				<article class="card">
					<h3><?php esc_html_e( 'Trade', 'megavoters' ); ?></h3>
					<p><strong><?php esc_html_e( 'I helped meet a need.', 'megavoters' ); ?></strong> <?php esc_html_e( 'Any receipt, obligation, or settlement remains outside XP.', 'megavoters' ); ?></p>
				</article>
				<article class="card">
					<h3><?php esc_html_e( 'Gratitude', 'megavoters' ); ?></h3>
					<p><strong><?php esc_html_e( 'I recognize service.', 'megavoters' ); ?></strong> <?php esc_html_e( 'XP means Experience Presence and is never money, wages, cash, or crypto.', 'megavoters' ); ?></p>
				</article>
			</div>
			<div class="note">
				<h3><?php esc_html_e( 'The $20 thought experiment', 'megavoters' ); ?></h3>
				<p><?php esc_html_e( 'Offer the same $20 to a person in a financial or emotional survival moment and to a billionaire. The reactions may differ, but neither proves character. The money is the prompt; the freely offered and freely accepted human moment is the discovery.', 'megavoters' ); ?></p>
			</div>
		</div>
	</section>

	<section class="section white">
		<div class="wrap">
			<span class="kicker"><?php esc_html_e( 'Whales and Organized Krill', 'megavoters' ); ?></span>
			<h2 class="title"><?php esc_html_e( 'Oligopoly compares two forms of leverage', 'megavoters' ); ?></h2>
			<div class="table-wrap">
				<table class="table">
					<thead>
						<tr>
							<th><?php esc_html_e( 'Whale behavior', 'megavoters' ); ?></th>
							<th><?php esc_html_e( 'Organized Krill behavior', 'megavoters' ); ?></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><?php esc_html_e( 'Accumulates assets or claims.', 'megavoters' ); ?></td>
							<td><?php esc_html_e( 'Organizes people and presence.', 'megavoters' ); ?></td>
						</tr>
						<tr>
							<td><?php esc_html_e( 'Borrows against abundance.', 'megavoters' ); ?></td>
							<td><?php esc_html_e( 'Shares gratitude across the community.', 'megavoters' ); ?></td>
						</tr>
						<tr>
							<td><?php esc_html_e( 'May simulate a maximum 70% LTV.', 'megavoters' ); ?></td>
							<td><?php esc_html_e( 'Seeks the Treasured Penny and community surplus.', 'megavoters' ); ?></td>
						</tr>
						<tr>
							<td><?php esc_html_e( 'Creates receipts and obligations.', 'megavoters' ); ?></td>
							<td><?php esc_html_e( 'Creates voluntary XP recognition.', 'megavoters' ); ?></td>
						</tr>
						<tr>
							<td><?php esc_html_e( 'Reconciles monthly and settles quarterly.', 'megavoters' ); ?></td>
							<td><?php esc_html_e( 'Depends on consent, cooperation, and showing up.', 'megavoters' ); ?></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="note">
				<h3><?php esc_html_e( 'Financial-game boundary', 'megavoters' ); ?></h3>
				<p><?php esc_html_e( 'SmallStreet may simulate 70% LTV, monthly reconciliation, and quarterly settlement. XP never becomes collateral, debt, credit eligibility, interest, or a promise of financing.', 'megavoters' ); ?></p>
			</div>
		</div>
	</section>

	<section class="section" id="study-guide">
		<div class="wrap">
			<span class="kicker"><?php esc_html_e( 'Downloadable resource', 'megavoters' ); ?></span>
			<h2 class="title"><?php esc_html_e( 'Oligopoly & United Citizens Study Guide', 'megavoters' ); ?></h2>
			<p class="intro"><?php esc_html_e( 'Use the guide for host orientation, participant discussion, community-center planning, and preparation for the Detente 2030 decision.', 'megavoters' ); ?></p>
			<div class="download">
				<div>
					<h3><?php esc_html_e( 'Study Guide PDF', 'megavoters' ); ?></h3>
					<p><?php esc_html_e( 'Includes the Community Checkers covenant, three QR choices, seller/giver roles, $20 thought experiment, whale-versus-krill comparison, monthly reconciliation, quarterly settlement, and BIS 2.0 Genesis Seed timeline.', 'megavoters' ); ?></p>
					<div class="buttons">
						<a class="btn gold" href="<?php echo esc_url( $pdf_url ); ?>" download><?php esc_html_e( 'Download PDF', 'megavoters' ); ?></a>
						<a class="btn outline" href="<?php echo esc_url( $pdf_url ); ?>" target="_blank" rel="noopener"><?php esc_html_e( 'Open in browser', 'megavoters' ); ?></a>
					</div>
				</div>
				<div class="pdf-icon" aria-hidden="true">PDF</div>
			</div>
		</div>
	</section>

	<section class="section white">
		<div class="wrap">
			<span class="kicker"><?php esc_html_e( 'Detente 2030', 'megavoters' ); ?></span>
			<h2 class="title"><?php esc_html_e( 'May 16 reconciles the evidence. May 17 plants the seed.', 'megavoters' ); ?></h2>
			<p class="intro"><?php esc_html_e( 'Oligopoly provides privacy-respecting aggregate results. On May 17, 2030, United Citizens decide what Genesis Seed is planted for BIS 2.0—Bounty for Inspirational Services—based on the reconciled evidence of presence, service, gratitude, whale behavior, and Organized Krill outcomes.', 'megavoters' ); ?></p>
			<div class="statement">
				<blockquote><?php esc_html_e( 'Oligopoly measures the choices. United Citizens make the choice.', 'megavoters' ); ?></blockquote>
				<p><?php esc_html_e( 'No algorithm, institution, whale, artificial intelligence, or financial balance makes the final decision for humanity.', 'megavoters' ); ?></p>
			</div>
		</div>
	</section>

	<section class="cta">
		<div class="wrap">
			<h2><?php esc_html_e( 'Gather. Celebrate. Serve. Come back whenever you choose.', 'megavoters' ); ?></h2>
			<p><?php esc_html_e( 'Community Checkers never capture the player. Participation, observation, declining, no scan, and walking away are welcomed without judgment.', 'megavoters' ); ?></p>
			<a class="btn gold" href="<?php echo esc_url( $pdf_url ); ?>" download><?php esc_html_e( 'Download the Study Guide', 'megavoters' ); ?></a>
		</div>
	</section>

	<div class="page-foot"><?php esc_html_e( 'MEGAvoters.com • United Citizens • Oligopoly Community Checkers • Guidelines', 'megavoters' ); ?></div>
</main>

<?php
include get_stylesheet_directory() . '/inc/site-footer.php';
include get_stylesheet_directory() . '/inc/layout-end.php';
