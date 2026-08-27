<?php
/**
 * Go Live Moment section for /oligopoly/.
 *
 * Source: GoLive/go-live-moment-section.html
 *
 * @package MEGAvoters
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$mega_oligopoly_url  = function_exists( 'megavoters_page_url' ) ? megavoters_page_url( 'oligopoly' ) : home_url( '/oligopoly/' );
$mega_guidelines_url = function_exists( 'megavoters_guidelines_url' ) ? megavoters_guidelines_url() : home_url( '/guidelines/' );
?>
<section class="mega-go-live" id="go-live-moment" aria-labelledby="go-live-title">
	<div class="mega-go-live__hero">
		<div class="mega-go-live__inner">
			<p class="mega-go-live__eyebrow"><?php esc_html_e( 'Oligopoly · Community Checkers · Detente 2030', 'megavoters' ); ?></p>
			<h2 id="go-live-title"><?php esc_html_e( 'Human Capital Formation Begins With Showing Up', 'megavoters' ); ?></h2>
			<p class="mega-go-live__lead"><?php esc_html_e( 'Every device can become a checker piece. Every encounter remains a choice. Every mutually confirmed moment of presence can become a grain of Human Gold.', 'megavoters' ); ?></p>
			<div class="mega-go-live__date" aria-label="<?php echo esc_attr__( 'Proposed go-live date May 17, 2030', 'megavoters' ); ?>">
				<span><?php esc_html_e( 'Proposed Go-Live Moment', 'megavoters' ); ?></span>
				<strong><?php esc_html_e( 'May 17, 2030', 'megavoters' ); ?></strong>
			</div>
			<nav class="mega-go-live__jump" aria-label="<?php echo esc_attr__( 'Go Live Moment section navigation', 'megavoters' ); ?>">
				<a href="#human-capital"><?php esc_html_e( 'Human Capital', 'megavoters' ); ?></a>
				<a href="#two-scan"><?php esc_html_e( '2-Scan Presence', 'megavoters' ); ?></a>
				<a href="#organized-krill"><?php esc_html_e( 'Organized Krill', 'megavoters' ); ?></a>
				<a href="#detente-path"><?php esc_html_e( 'Path to 2030', 'megavoters' ); ?></a>
			</nav>
		</div>
	</div>

	<div class="mega-go-live__inner mega-go-live__body">
		<section id="human-capital" class="mega-go-live__intro" aria-labelledby="human-capital-title">
			<div>
				<p class="mega-go-live__kicker"><?php esc_html_e( 'The Human Gold Rush', 'megavoters' ); ?></p>
				<h3 id="human-capital-title"><?php esc_html_e( 'Capital is more than money.', 'megavoters' ); ?></h3>
			</div>
			<div>
				<p><?php esc_html_e( 'Human capital grows through time, knowledge, trust, cooperation, practice, service, and presence. Oligopoly makes those principles visible through a voluntary Community Checkers experience built around people showing up for one another.', 'megavoters' ); ?></p>
				<p><?php esc_html_e( 'Money can measure a product or service. YAM JAM can place trade value beside its production-location home currency. XP—Experience Presence—records a separate dimension: the mutually confirmed human moment. Neither replaces the other.', 'megavoters' ); ?></p>
			</div>
		</section>

		<div class="mega-go-live__principles" aria-label="<?php echo esc_attr__( 'Human capital formation principles', 'megavoters' ); ?>">
			<article><span>01</span><h4><?php esc_html_e( 'Time', 'megavoters' ); ?></h4><p><?php esc_html_e( 'Everyone receives the same 24 hours. Choosing to share a moment is meaningful.', 'megavoters' ); ?></p></article>
			<article><span>02</span><h4><?php esc_html_e( 'Presence', 'megavoters' ); ?></h4><p><?php esc_html_e( 'A voluntary encounter matters because people and their devices were actually there.', 'megavoters' ); ?></p></article>
			<article><span>03</span><h4><?php esc_html_e( 'Trust', 'megavoters' ); ?></h4><p><?php esc_html_e( 'Two sides confirm the same encounter instead of relying on extraction or surveillance.', 'megavoters' ); ?></p></article>
			<article><span>04</span><h4><?php esc_html_e( 'Organization', 'megavoters' ); ?></h4><p><?php esc_html_e( 'United Citizens become more capable when they coordinate, distribute, and serve together.', 'megavoters' ); ?></p></article>
			<article><span>05</span><h4><?php esc_html_e( 'Practice', 'megavoters' ); ?></h4><p><?php esc_html_e( 'Human capital forms moment by moment through fair, accepting, insightful, transparent, and humble relationships.', 'megavoters' ); ?></p></article>
			<article><span>06</span><h4><?php esc_html_e( 'Choice', 'megavoters' ); ?></h4><p><?php esc_html_e( 'Participate, observe, pause, or walk away. Every encounter remains voluntary and without judgment.', 'megavoters' ); ?></p></article>
		</div>

		<section id="two-scan" class="mega-go-live__scan" aria-labelledby="two-scan-title">
			<div class="mega-go-live__scan-copy">
				<p class="mega-go-live__kicker"><?php esc_html_e( 'Community Checkers', 'megavoters' ); ?></p>
				<h3 id="two-scan-title"><?php esc_html_e( 'A 2-scan proof records an agreed moment—not a tracked life.', 'megavoters' ); ?></h3>
				<p><?php esc_html_e( 'When two participating devices meet, each side may independently confirm the encounter. The devices become the presence objects; no continuous movement history is required.', 'megavoters' ); ?></p>
			</div>
			<div class="mega-go-live__yyy" aria-label="<?php echo esc_attr__( 'Three mutual confirmations', 'megavoters' ); ?>">
				<div><strong><?php esc_html_e( 'YES', 'megavoters' ); ?></strong><span><?php esc_html_e( 'I was present.', 'megavoters' ); ?></span></div>
				<div><strong><?php esc_html_e( 'YES', 'megavoters' ); ?></strong><span><?php esc_html_e( 'The other device was present.', 'megavoters' ); ?></span></div>
				<div><strong><?php esc_html_e( 'YES', 'megavoters' ); ?></strong><span><?php esc_html_e( 'We agree this encounter occurred.', 'megavoters' ); ?></span></div>
			</div>
			<p class="mega-go-live__privacy"><strong><?php esc_html_e( 'Privacy boundary:', 'megavoters' ); ?></strong> <?php esc_html_e( 'no scan and walking away remain valid research outcomes. The framework records only a specific encounter that both sides choose to confirm—not continuous location, private activity, or an ownership claim over a person.', 'megavoters' ); ?></p>
		</section>

		<section id="organized-krill" class="mega-go-live__roles" aria-labelledby="organized-krill-title">
			<div class="mega-go-live__roles-heading">
				<p class="mega-go-live__kicker"><?php esc_html_e( 'Human Capital in Motion', 'megavoters' ); ?></p>
				<h3 id="organized-krill-title"><?php esc_html_e( 'United Citizens organize. Organized Krill demonstrates the leverage of cooperation.', 'megavoters' ); ?></h3>
			</div>
			<div class="mega-go-live__role-grid">
				<article><h4><?php esc_html_e( 'United Citizens', 'megavoters' ); ?></h4><p><?php esc_html_e( 'The shared civic identity connecting people who gather, celebrate, meet needs, serve others, and help determine what the testnet teaches.', 'megavoters' ); ?></p></article>
				<article><h4><?php esc_html_e( 'Organized Krill', 'megavoters' ); ?></h4><p><?php esc_html_e( 'Thirty-member Patron Organizing Communities that coordinate campaign materials, participation, distribution, and local acts of gratitude.', 'megavoters' ); ?></p></article>
				<article><h4><?php esc_html_e( "YAM'ers", 'megavoters' ); ?></h4><p><?php esc_html_e( 'Observers, buyers, and shoppers who may browse, participate in an encounter, or choose not to scan.', 'megavoters' ); ?></p></article>
				<article><h4><?php esc_html_e( 'MEGAvoters', 'megavoters' ); ?></h4><p><?php esc_html_e( 'Participants, sellers, givers, and messengers who help Community Checkers move from an idea into voluntary local practice.', 'megavoters' ); ?></p></article>
			</div>
		</section>

		<section id="detente-path" class="mega-go-live__timeline" aria-labelledby="detente-path-title">
			<p class="mega-go-live__kicker"><?php esc_html_e( 'Working Toward Detente 2030', 'megavoters' ); ?></p>
			<h3 id="detente-path-title"><?php esc_html_e( 'The Go-Live Moment is a community decision point—not a promise of financial return.', 'megavoters' ); ?></h3>
			<div class="mega-go-live__steps">
				<article><span><?php esc_html_e( 'NOW', 'megavoters' ); ?></span><h4><?php esc_html_e( 'Invite', 'megavoters' ); ?></h4><p><?php esc_html_e( 'Enter through an identity, trade, or gratitude QR access point. Review the covenant and choose a Peace Pentagon branch.', 'megavoters' ); ?></p></article>
				<article><span><?php esc_html_e( 'TESTNET', 'megavoters' ); ?></span><h4><?php esc_html_e( 'Practice', 'megavoters' ); ?></h4><p><?php esc_html_e( 'Move circle by circle. Confirm voluntary 2-scan encounters and learn from participation, observation, and walk-away outcomes.', 'megavoters' ); ?></p></article>
				<article><span><?php esc_html_e( 'RECONCILE', 'megavoters' ); ?></span><h4><?php esc_html_e( 'Discover', 'megavoters' ); ?></h4><p><?php esc_html_e( 'Compare money, trade value, community organization, and Experience Presence without declaring them interchangeable.', 'megavoters' ); ?></p></article>
				<article class="is-live"><span><?php esc_html_e( 'MAY 17, 2030', 'megavoters' ); ?></span><h4><?php esc_html_e( 'Go Live Moment', 'megavoters' ); ?></h4><p><?php esc_html_e( 'United Citizens consider the accumulated Oligopoly results and what, if anything, should become the BIS 2.0 genesis seed.', 'megavoters' ); ?></p></article>
			</div>
		</section>

		<section class="mega-go-live__final" aria-labelledby="go-live-invitation">
			<p class="mega-go-live__symbol"><?php echo wp_kses( __( '21,000 YAM <span aria-label="corresponds to">&#x2250;</span> 1 home-currency unit', 'megavoters' ), array( 'span' => array( 'aria-label' => array() ) ) ); ?></p>
			<h3 id="go-live-invitation"><?php echo wp_kses( __( 'Every device a checker piece.<br>Every encounter a choice.<br>Every confirmed presence a grain of Human Gold.', 'megavoters' ), array( 'br' => array() ) ); ?></h3>
			<p><?php esc_html_e( 'Leave your wallet at home for the opening move. Bring your time, your curiosity, and your freedom to choose.', 'megavoters' ); ?></p>
			<div class="mega-go-live__actions">
				<a class="mega-go-live__button is-primary" href="<?php echo esc_url( $mega_oligopoly_url ); ?>"><?php esc_html_e( 'Explore Oligopoly', 'megavoters' ); ?></a>
				<a class="mega-go-live__button" href="<?php echo esc_url( $mega_guidelines_url ); ?>"><?php esc_html_e( 'Read the Guidelines', 'megavoters' ); ?></a>
			</div>
			<small><?php esc_html_e( 'Oligopoly and Detente 2030 are proposed behavioral-research and community-formation frameworks. Participation does not create an investment, deposit, currency, guaranteed benefit, or financial return.', 'megavoters' ); ?></small>
		</section>
	</div>
</section>
