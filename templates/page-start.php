<?php
/**
 * Miners /start/ — Observe / Participate / Walk Away.
 *
 * @package Miners
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$home_url = home_url( '/' );

$words = array(
	'courage'   => __( 'Courage', 'megavoters' ),
	'kindness'  => __( 'Kindness', 'megavoters' ),
	'wisdom'    => __( 'Wisdom', 'megavoters' ),
	'lucky'     => __( 'Lucky', 'megavoters' ),
	'belief'    => __( 'Belief', 'megavoters' ),
	'gratitude' => __( 'Gratitude', 'megavoters' ),
	'health'    => __( 'Health', 'megavoters' ),
	'happiness' => __( 'Happiness', 'megavoters' ),
	'dream'     => __( 'Dream', 'megavoters' ),
	'believe'   => __( 'Believe', 'megavoters' ),
	'wealth'    => __( 'Wealth', 'megavoters' ),
	'healing'   => __( 'Healing', 'megavoters' ),
);

$branches = array(
	'planning'     => array( __( 'Planning', 'megavoters' ), '#704a8d' ),
	'budget'       => array( __( 'Budget', 'megavoters' ), '#d58831' ),
	'media'        => array( __( 'Media', 'megavoters' ), '#b5424c' ),
	'distribution' => array( __( 'Distribution', 'megavoters' ), '#34775a' ),
	'membership'   => array( __( 'Membership', 'megavoters' ), '#315a9a' ),
);

$mega_body_class = 'mega-start-body';
include get_stylesheet_directory() . '/inc/layout-start.php';
?>

<div class="mv-shell">
	<header class="mv-topbar">
		<div class="mv-wrap mv-topbar__inner">
			<a class="mv-brand" href="<?php echo esc_url( $home_url ); ?>" aria-label="<?php echo esc_attr__( 'MEGAvoters home', 'megavoters' ); ?>">
				<span class="mv-brand__mark" aria-hidden="true">M</span>
				<span>
					<strong><?php esc_html_e( 'MEGAvoters', 'megavoters' ); ?></strong>
					<small><?php esc_html_e( 'Make Everyone Great Again', 'megavoters' ); ?></small>
				</span>
			</a>
			<span class="mv-topbar__note"><?php esc_html_e( 'Independent • Nonpartisan • Proposed testnet', 'megavoters' ); ?></span>
		</div>
	</header>

	<nav class="mv-progress" aria-label="<?php echo esc_attr__( 'Participation progress', 'megavoters' ); ?>">
		<div class="mv-wrap mv-progress__inner">
			<div class="mv-progress__step is-current"><span class="mv-progress__number">1</span><span><?php esc_html_e( 'Your choice', 'megavoters' ); ?></span></div>
			<div class="mv-progress__step"><span class="mv-progress__number">2</span><span><?php esc_html_e( 'Register device', 'megavoters' ); ?></span></div>
			<div class="mv-progress__step"><span class="mv-progress__number">3</span><span><?php esc_html_e( 'Gracebook, if you wish', 'megavoters' ); ?></span></div>
		</div>
	</nav>

	<main class="mv-main" id="content">
		<div class="mv-wrap">
			<section class="mv-intro" aria-labelledby="start-title">
				<p class="mv-eyebrow"><?php esc_html_e( 'Begin with one question', 'megavoters' ); ?></p>
				<h1 id="start-title"><?php esc_html_e( 'Can you practice FAITH with others?', 'megavoters' ); ?></h1>
				<p class="mv-intro__lead"><?php esc_html_e( 'You do not have to agree with everyone. Decide whether you want to observe, participate, or walk away. No purchase, pledge, church enrollment, or character judgment follows from your choice.', 'megavoters' ); ?></p>
				<p class="mv-faith"><span>F</span><?php esc_html_e( 'air', 'megavoters' ); ?> · <span>A</span><?php esc_html_e( 'ccepting', 'megavoters' ); ?> · <span>I</span><?php esc_html_e( 'nsightful', 'megavoters' ); ?> · <span>T</span><?php esc_html_e( 'ransparent', 'megavoters' ); ?> · <span>H</span><?php esc_html_e( 'umble', 'megavoters' ); ?></p>
			</section>

			<section class="mv-invite-video" aria-label="<?php echo esc_attr__( "You're Invited", 'megavoters' ); ?>">
				<div class="mv-invite-video__frame">
					<video controls playsinline preload="metadata">
						<source src="<?php echo esc_url( megavoters_youre_invited_video_url() ); ?>" type="video/mp4">
						<?php esc_html_e( 'Your browser does not support the video tag.', 'megavoters' ); ?>
					</video>
				</div>
				<p class="mv-invite-video__caption"><?php esc_html_e( "You're Invited", 'megavoters' ); ?></p>
			</section>

			<section class="mv-choice-grid" aria-label="<?php echo esc_attr__( 'Choose your path', 'megavoters' ); ?>">
				<button class="mv-choice" type="button" data-path="observe">
					<span class="mv-choice__icon" aria-hidden="true">○</span>
					<h2><?php esc_html_e( 'Observe', 'megavoters' ); ?></h2>
					<p><?php esc_html_e( 'Discover the proposed pilot without registering a device or joining anything.', 'megavoters' ); ?></p>
					<strong><?php esc_html_e( 'Browse freely →', 'megavoters' ); ?></strong>
				</button>
				<button class="mv-choice mv-choice--participate" type="button" data-path="participate">
					<span class="mv-choice__icon" aria-hidden="true">✓</span>
					<h2><?php esc_html_e( 'Participate', 'megavoters' ); ?></h2>
					<p><?php esc_html_e( 'Choose one private word and one defining branch, then continue to device registration.', 'megavoters' ); ?></p>
					<strong><?php esc_html_e( 'Begin →', 'megavoters' ); ?></strong>
				</button>
				<button class="mv-choice mv-choice--walk" type="button" data-path="walk">
					<span class="mv-choice__icon" aria-hidden="true">×</span>
					<h2><?php esc_html_e( 'Walk away', 'megavoters' ); ?></h2>
					<p><?php esc_html_e( 'End here. No registration, individual record, or follow-up is created.', 'megavoters' ); ?></p>
					<strong><?php esc_html_e( 'Leave by choice →', 'megavoters' ); ?></strong>
				</button>
			</section>

			<section class="mv-panel" id="participate-panel" aria-labelledby="participate-title" hidden>
				<div class="mv-panel__heading">
					<p class="mv-eyebrow"><?php esc_html_e( 'Your voluntary starting point', 'megavoters' ); ?></p>
					<h2 id="participate-title"><?php esc_html_e( 'One private word. One defining branch.', 'megavoters' ); ?></h2>
					<p><?php esc_html_e( 'Choose the word that speaks to you in this moment. Only your branch selection moves forward to device registration.', 'megavoters' ); ?></p>
				</div>
				<form id="mv-start-form" novalidate>
					<fieldset class="mv-word-fieldset">
						<legend><?php esc_html_e( 'Choose one touchstone word', 'megavoters' ); ?></legend>
						<p class="mv-field-help"><?php esc_html_e( 'There is no right or wrong selection. Choose only one.', 'megavoters' ); ?></p>
						<div class="mv-words">
							<?php
							$first_word = true;
							foreach ( $words as $value => $label ) :
								$word_id = 'word-' . $value;
								?>
								<div class="mv-word">
									<input id="<?php echo esc_attr( $word_id ); ?>" name="touchstone_word" type="radio" value="<?php echo esc_attr( $value ); ?>"<?php echo $first_word ? ' required' : ''; ?>>
									<label for="<?php echo esc_attr( $word_id ); ?>"><?php echo esc_html( $label ); ?></label>
								</div>
								<?php
								$first_word = false;
							endforeach;
							?>
						</div>
						<p class="mv-word-privacy"><strong><?php esc_html_e( 'Your word remains private.', 'megavoters' ); ?></strong> <?php esc_html_e( 'It is used only to complete this page and disappears when you leave. It is not included in the handoff, URL, or ledger.', 'megavoters' ); ?></p>
					</fieldset>

					<fieldset>
						<legend><?php esc_html_e( 'Choose your Peace Pentagon branch', 'megavoters' ); ?></legend>
						<p class="mv-field-help"><?php esc_html_e( 'Choose the area where your time, experience, or goodwill most naturally fits.', 'megavoters' ); ?></p>
						<div class="mv-branches">
							<?php
							$first_branch = true;
							foreach ( $branches as $value => $branch ) :
								$branch_id = 'branch-' . $value;
								?>
								<div class="mv-branch" style="--branch:<?php echo esc_attr( $branch[1] ); ?>">
									<input id="<?php echo esc_attr( $branch_id ); ?>" name="branch" type="radio" value="<?php echo esc_attr( $value ); ?>"<?php echo $first_branch ? ' required' : ''; ?>>
									<label for="<?php echo esc_attr( $branch_id ); ?>"><?php echo esc_html( $branch[0] ); ?></label>
								</div>
								<?php
								$first_branch = false;
							endforeach;
							?>
						</div>
					</fieldset>

					<p class="mv-lock"><strong><?php esc_html_e( 'Choose carefully:', 'megavoters' ); ?></strong> <?php esc_html_e( 'this first branch becomes defining when your device registration is confirmed and cannot later be changed.', 'megavoters' ); ?></p>
					<label class="mv-confirm">
						<input id="choice-confirmed" name="choice_confirmed" type="checkbox" required>
						<span><?php esc_html_e( 'I understand that continuing begins voluntary device registration on HumanBlockchain.info. Discord Gracebook is optional. It is not required to leave this page.', 'megavoters' ); ?></span>
					</label>
					<button class="mv-button" id="activate-button" type="submit"><?php esc_html_e( 'Activate This Device', 'megavoters' ); ?></button>
					<p class="mv-form-note"><?php esc_html_e( 'This step creates no payment, financial pledge, research consent, XP award, or proof-of-delivery record. It does not change an existing Human Gold RSVP or XP record.', 'megavoters' ); ?></p>
					<div id="form-message" role="status" aria-live="polite"></div>
				</form>
			</section>

			<section class="mv-panel mv-walk" id="walk-panel" aria-labelledby="walk-title" hidden>
				<p class="mv-eyebrow"><?php esc_html_e( 'Your choice is respected', 'megavoters' ); ?></p>
				<h2 id="walk-title"><?php esc_html_e( 'Nothing else is required.', 'megavoters' ); ?></h2>
				<p><?php esc_html_e( 'This page creates no individual walk-away record. You may close it now or return to the public MEGAvoters homepage.', 'megavoters' ); ?></p>
				<a class="mv-button mv-button--quiet" href="<?php echo esc_url( $home_url ); ?>"><?php esc_html_e( 'Return home', 'megavoters' ); ?></a>
			</section>

			<?php megavoters_render_hbc_return_panel(); ?>
		</div>
	</main>

	<footer class="mv-footer">
		<div class="mv-wrap">
			<p><?php esc_html_e( 'Participation is voluntary. No response is treated as a character judgment. All named hosts, venues, churches, organizations, institutions, and research relationships remain proposed unless accepted in writing. No affiliation or endorsement is claimed or implied.', 'megavoters' ); ?></p>
		</div>
	</footer>
</div>

<?php
include get_stylesheet_directory() . '/inc/layout-end.php';
