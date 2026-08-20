<?php
/**
 * United Citizens Community Checkers Terms of Service — counsel-review draft v0.9.
 *
 * @package MEGAvoters
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$pdf_url = function_exists( 'megavoters_terms_pdf_url' )
	? megavoters_terms_pdf_url()
	: megavoters_asset_url( 'pdf/United_Citizens_Community_Checkers_Terms_of_Service.pdf' );

$mega_body_class = 'mega-inner';
include get_stylesheet_directory() . '/inc/layout-start.php';
include get_stylesheet_directory() . '/inc/site-header.php';
?>

<main id="content" class="mega-doc">
	<p class="eyebrow"><?php esc_html_e( 'United Citizens • Community Checkers • Oligopoly Testnet', 'megavoters' ); ?></p>
	<h1><?php esc_html_e( 'Terms of Service', 'megavoters' ); ?></h1>
	<p class="lede"><?php esc_html_e( 'Counsel-review draft • Version 0.9 • August 13, 2026. These Terms are a working draft for review by qualified Georgia and applicable federal counsel. They do not constitute legal advice and should not be published as final Terms until the operator, contact information, prize terms, privacy notice, dispute process, age eligibility, and governing-law provisions are confirmed.', 'megavoters' ); ?></p>

	<div class="draft-banner">
		<p><strong><?php esc_html_e( 'Important notice.', 'megavoters' ); ?></strong> <?php esc_html_e( 'The testnet is experimental. It is not a bank, financial institution, securities exchange, payment network, credit bureau, identity bureau, social-credit system, cryptocurrency, investment product, fiduciary, religious authority, political campaign, voter-registration service, or promise of profit.', 'megavoters' ); ?></p>
	</div>

	<div class="tos-meta">
		<article><span><?php esc_html_e( 'Effective date', 'megavoters' ); ?></span><b><?php esc_html_e( 'To be established before launch', 'megavoters' ); ?></b></article>
		<article><span><?php esc_html_e( 'Operator', 'megavoters' ); ?></span><b><?php esc_html_e( 'Make Everyone Great Again (MEGA), sole proprietorship / MEGA DBA', 'megavoters' ); ?></b></article>
		<article><span><?php esc_html_e( 'Status', 'megavoters' ); ?></span><b><?php esc_html_e( 'Counsel-review draft; not yet effective', 'megavoters' ); ?></b></article>
	</div>

	<div class="tos-download">
		<a class="button small" href="<?php echo esc_url( $pdf_url ); ?>" download><?php esc_html_e( 'Download PDF', 'megavoters' ); ?></a>
		<a class="text-link" href="<?php echo esc_url( $pdf_url ); ?>" target="_blank" rel="noopener"><?php esc_html_e( 'Open in browser', 'megavoters' ); ?></a>
	</div>

	<h2><?php esc_html_e( '1. Acceptance and scope', 'megavoters' ); ?></h2>
	<p><?php esc_html_e( 'These Terms govern voluntary access to the United Citizens Community Checkers testnet, including the free Oligopoly browser experience, the three authorized QR-code doorways, the two-scan encounter process, and related testnet General Ledger records. By deliberately selecting “Accept,” registering a device-presence object, or scanning an authorized QR code after these Terms are presented, you indicate electronic acceptance. You may decline and remain unrecognized by scanning nothing.', 'megavoters' ); ?></p>

	<h2><?php esc_html_e( '2. Voluntary participation; no extraction and no judgment', 'megavoters' ); ?></h2>
	<ul>
		<li><?php esc_html_e( 'No app download, purchase, payment, crypto asset, political pledge, religious test, or prize entry is required to observe a public gathering.', 'megavoters' ); ?></li>
		<li><?php esc_html_e( 'Carrying a smartphone into a gathering does not enroll or identify you. Only a deliberate scan creates an individual encounter record. If you scan nothing, nothing follows you.', 'megavoters' ); ?></li>
		<li><?php esc_html_e( 'Participate, Observe, Walk Away, No Scan, Accept, Reject, No Response, and Dispute are valid outcomes. No outcome becomes a character judgment.', 'megavoters' ); ?></li>
		<li><?php esc_html_e( 'Testnet data may not be used as a morality, political-loyalty, religious-worth, employability, creditworthiness, insurance, housing, immigration, educational, or human-value score.', 'megavoters' ); ?></li>
	</ul>

	<h2><?php esc_html_e( '3. One checker; three authorized QR doorways', 'megavoters' ); ?></h2>
	<p><?php esc_html_e( 'Each person is represented, at most, by one voluntarily registered device-presence object—the Community Checker moving through a finite lifetime. Only the following three QR categories may initiate testnet encounters:', 'megavoters' ); ?></p>
	<div class="table-wrap"><table>
		<thead><tr><th><?php esc_html_e( 'QR doorway', 'megavoters' ); ?></th><th><?php esc_html_e( 'Human question', 'megavoters' ); ?></th><th><?php esc_html_e( 'Ledger boundary', 'megavoters' ); ?></th></tr></thead>
		<tbody>
			<tr><td><?php esc_html_e( 'Identity QR', 'megavoters' ); ?></td><td><?php esc_html_e( 'Am I willing to be present?', 'megavoters' ); ?></td><td><?php esc_html_e( 'Device presence and role choice; not a complete identity profile', 'megavoters' ); ?></td></tr>
			<tr><td><?php esc_html_e( 'YAM-is-On QR', 'megavoters' ); ?></td><td><?php esc_html_e( 'Am I willing to consider this trade?', 'megavoters' ); ?></td><td><?php esc_html_e( 'Money/trade-value pathway; separate from XP', 'megavoters' ); ?></td></tr>
			<tr><td><?php esc_html_e( 'Seeking Gratitude QR', 'megavoters' ); ?></td><td><?php esc_html_e( 'Am I willing to recognize this presence?', 'megavoters' ); ?></td><td><?php esc_html_e( 'Gratitude/XP pathway; never money', 'megavoters' ); ?></td></tr>
		</tbody>
	</table></div>

	<h2><?php esc_html_e( '4. Two-scan Y/Y/Y proof guideline', 'megavoters' ); ?></h2>
	<p><?php esc_html_e( 'Every initiated encounter enters the append-only General Ledger. Scan 1 issues the encounter and selects exactly one pathway: MONEY or GRATITUDE. Scan 2 independently records the receiving checker’s answers:', 'megavoters' ); ?></p>
	<div class="table-wrap"><table>
		<thead><tr><th><?php esc_html_e( 'Response', 'megavoters' ); ?></th><th><?php esc_html_e( 'Question', 'megavoters' ); ?></th></tr></thead>
		<tbody>
			<tr><td><?php esc_html_e( 'Y₁ — Delivery', 'megavoters' ); ?></td><td><?php esc_html_e( 'Was the stated good, service, or gratitude delivered?', 'megavoters' ); ?></td></tr>
			<tr><td><?php esc_html_e( 'Y₂ — Destination', 'megavoters' ); ?></td><td><?php esc_html_e( 'Did it reach the intended recipient or final destination?', 'megavoters' ); ?></td></tr>
			<tr><td><?php esc_html_e( 'Y₃ — Agreement', 'megavoters' ); ?></td><td><?php esc_html_e( 'Do you agree the encounter happened as recorded?', 'megavoters' ); ?></td></tr>
		</tbody>
	</table></div>
	<p><?php echo wp_kses( __( '<strong>Binary computation:</strong> Encounter True ≐ Y₁ ∧ Y₂ ∧ Y₃. Only Y/Y/Y records True. Any N, one or more NULL responses, expiration without Scan 2, or unresolved conflicting evidence records False. False means only that the defined proof is absent; it does not mean dishonesty, failure, or diminished human worth.', 'megavoters' ), array( 'strong' => array() ) ); ?></p>
	<p><?php esc_html_e( 'A True result establishes Proof of Delivery and Acceptance for the defined encounter. It does not independently establish cash payment, open-market price, product quality, legal title, future performance, motive, morality, salvation, or human worth.', 'megavoters' ); ?></p>

	<h2><?php esc_html_e( '5. Mandatory dotted-equivalence notation: ≐', 'megavoters' ); ?></h2>
	<p><?php esc_html_e( 'The symbol ≐ (Unicode U+2250) is the canonical notation for every algorithmic function, interface, ledger entry, report, API payload, formula display, export, and audit artifact that asserts or communicates equivalence involving human presence, community trade value, gratitude, XP, NWP, allocation, conversion reference, reconciliation, or extinguishment.', 'megavoters' ); ?></p>
	<p><?php esc_html_e( 'The dot over the equal sign means the relationship is testnet-defined, consent-dependent, context-bound, and subject to human reconciliation. It is not a universal mathematical identity, cash convertibility promise, market-price guarantee, or judgment of human equality or worth.', 'megavoters' ); ?></p>
	<div class="table-wrap"><table>
		<thead><tr><th><?php esc_html_e( 'Context', 'megavoters' ); ?></th><th><?php esc_html_e( 'Required form', 'megavoters' ); ?></th><th><?php esc_html_e( 'Meaning', 'megavoters' ); ?></th></tr></thead>
		<tbody>
			<tr><td><?php esc_html_e( 'Encounter proof', 'megavoters' ); ?></td><td><?php esc_html_e( 'True ≐ Y₁ ∧ Y₂ ∧ Y₃', 'megavoters' ); ?></td><td><?php esc_html_e( 'Defined two-scan proof condition', 'megavoters' ); ?></td></tr>
			<tr><td><?php esc_html_e( 'Trade reference', 'megavoters' ); ?></td><td><?php esc_html_e( '$30 trade value ≐ accepted Y/Y/Y encounter', 'megavoters' ); ?></td><td><?php esc_html_e( 'Recorded community trade value, not necessarily cash paid', 'megavoters' ); ?></td></tr>
			<tr><td><?php esc_html_e( 'Gratitude reference', 'megavoters' ); ?></td><td><?php esc_html_e( '$30-equivalent XP allocation ≐ accepted Y/Y/Y encounter', 'megavoters' ); ?></td><td><?php esc_html_e( 'XP recognition only; never money', 'megavoters' ); ?></td></tr>
			<tr><td><?php esc_html_e( 'NWP assurance', 'megavoters' ); ?></td><td><?php esc_html_e( 'NWP ≐ capped verified presence', 'megavoters' ); ?></td><td><?php esc_html_e( 'Presence assurance subject to daily capacity', 'megavoters' ); ?></td></tr>
			<tr><td><?php esc_html_e( 'Reconciliation', 'megavoters' ); ?></td><td><?php esc_html_e( 'disputed ≐ reconciled after human consensus', 'megavoters' ); ?></td><td><?php esc_html_e( 'Status transition supported by preserved evidence', 'megavoters' ); ?></td></tr>
		</tbody>
	</table></div>
	<h3><?php esc_html_e( '5.1 Required uses', 'megavoters' ); ?></h3>
	<ul>
		<li><?php esc_html_e( 'Store both a machine-safe operator code (DOTTED_EQ) and the rendered symbol ≐.', 'megavoters' ); ?></li>
		<li><?php esc_html_e( 'Validate U+2250 at input, storage, API, display, export, and report boundaries; do not accept a combining-dot approximation as canonical storage.', 'megavoters' ); ?></li>
		<li><?php esc_html_e( 'Provide accessible text such as “testnet-equivalent-to” for screen readers and plain-text fallbacks.', 'megavoters' ); ?></li>
		<li><?php esc_html_e( 'If a channel cannot render ≐, display [DOTTED EQUALS] and mark the artifact degraded—not final—until a conforming version is produced.', 'megavoters' ); ?></li>
	</ul>
	<h3><?php esc_html_e( '5.2 Permitted ordinary equals sign', 'megavoters' ); ?></h3>
	<p><?php esc_html_e( 'The ordinary equals sign (=) may be used only where no human-value equivalence is asserted, including programming assignment, Boolean or validation comparison, ordinary arithmetic identity, and verbatim third-party code that cannot be altered—provided the testnet-facing output uses ≐ where required.', 'megavoters' ); ?></p>
	<h3><?php esc_html_e( '5.3 Conformance and correction', 'megavoters' ); ?></h3>
	<p><?php esc_html_e( 'A testnet function that substitutes =, ≈, ≡, :, →, or another sign for required ≐ is notation-nonconforming. The affected assertion must be flagged, prevented from reaching final Reconciled or Extinguished status, and corrected through an append-only correction event. The original record remains preserved. Notation nonconformance is a system-quality finding, never a character judgment against a participant.', 'megavoters' ); ?></p>

	<h2><?php esc_html_e( '6. Money and Gratitude remain separate', 'megavoters' ); ?></h2>
	<p><?php esc_html_e( 'Every encounter selects one pathway at issuance. A MONEY encounter cannot become GRATITUDE because settlement fails. A GRATITUDE encounter cannot become money because Y/Y/Y is True. The shared $30 reference enables comparison; it does not merge custody, settlement, obligations, or ledgers.', 'megavoters' ); ?></p>
	<div class="table-wrap"><table>
		<thead><tr><th><?php esc_html_e( 'Pathway', 'megavoters' ); ?></th><th><?php esc_html_e( 'True result establishes', 'megavoters' ); ?></th><th><?php esc_html_e( 'Does not establish', 'megavoters' ); ?></th></tr></thead>
		<tbody>
			<tr><td><?php esc_html_e( 'GRATITUDE / Seeking Gratitude', 'megavoters' ); ?></td><td><?php esc_html_e( '$30-equivalent XP allocation and capped presence assurance', 'megavoters' ); ?></td><td><?php esc_html_e( 'Money, debt, wages, deposit, crypto, or withdrawal right', 'megavoters' ); ?></td></tr>
		</tbody>
	</table></div>

	<h2><?php esc_html_e( '7. XP and Network Weighted Presence', 'megavoters' ); ?></h2>
	<p><?php esc_html_e( 'XP means Experience Presence. NWP means Network Weighted Presence. NWP may assure verified presence behind a True Y/Y/Y encounter but does not assure price, payment, product quality, future performance, identity completeness, or character.', 'megavoters' ); ?></p>
	<ul>
		<li><?php esc_html_e( 'Accepted individual NWP capacity is capped at $0.03 per day ($10.95 per common year; $10.98 per leap year).', 'megavoters' ); ?></li>
		<li><?php esc_html_e( 'Identity QR issuance contexts may reference individual $0.01, five-seller POC $0.02, or guild $0.03 capacity, subject to implementation guidelines.', 'megavoters' ); ?></li>
		<li><?php esc_html_e( 'Accepted value beyond personal daily capacity, and rejected or unaccepted amounts, may flow to append-only XP community surplus.', 'megavoters' ); ?></li>
		<li><?php esc_html_e( 'XP and NWP are not redeemable for money and create no payment obligation.', 'megavoters' ); ?></li>
	</ul>

	<h2><?php esc_html_e( '8. Ledger status, disputes, and human consensus', 'megavoters' ); ?></h2>
	<p><?php esc_html_e( 'The canonical append-only status vocabulary is Issued, Pending, Matured, Disputed, Reconciled, and Extinguished. A dispute must mature into Reconciled through preserved evidence and human review before Extinguishment or approved carry-forward. Algorithms may recommend or organize evidence; humans retain the final choice when interpretation or consensus is required.', 'megavoters' ); ?></p>

	<h2><?php esc_html_e( '9. Privacy and data minimization', 'megavoters' ); ?></h2>
	<ul>
		<li><?php esc_html_e( 'Collect only data reasonably necessary for the specific voluntary encounter.', 'megavoters' ); ?></li>
		<li><?php esc_html_e( 'No passive check-in, continuous location history, facial recognition, background identity capture, contact-list access, or unrelated device extraction.', 'megavoters' ); ?></li>
		<li><?php esc_html_e( 'Time-and-distance validation should store the minimum result needed, not a continuous movement history.', 'megavoters' ); ?></li>
		<li><?php esc_html_e( 'Anonymous attendance estimates must not be silently joined to individual ledger records.', 'megavoters' ); ?></li>
		<li><?php esc_html_e( 'Security, retention, deletion, access, correction, and incident-response practices must be described in a separate Privacy Notice before public launch.', 'megavoters' ); ?></li>
	</ul>

	<h2><?php esc_html_e( '10. Research and institutional status', 'megavoters' ); ?></h2>
	<p><?php esc_html_e( 'Community Checkers may support proposed behavioral research into presence and cooperation. Research participation must be separately presented from these Terms and from ordinary gameplay. Where applicable, informed consent, privacy protections, an independent IRB determination, and institutional authorization are required. References to CEI, Unity Church–Atlanta, UNG, AYSPS, Santa Fe Institute, or another organization remain proposed unless formally accepted in writing.', 'megavoters' ); ?></p>

	<h2><?php esc_html_e( '11. Hats, prizes, and promotions', 'megavoters' ); ?></h2>
	<p><?php esc_html_e( 'The announced 15,000 MEGAvoter hats are a proposed prize pool and visible thank-you. Before any active entry or distribution, separate published prize terms must state eligibility, geography, dates, selection, notification, availability, quantity limits, sponsor/contact information, and the legally required no-purchase pathway. Research consent, scanning, practicing FAITH, religious belief, political choice, membership, pledge, purchase, or donation must not be represented as guaranteeing a prize or improving odds unless lawful published terms expressly provide otherwise.', 'megavoters' ); ?></p>

	<h2><?php esc_html_e( '12. Conduct and system integrity guidelines', 'megavoters' ); ?></h2>
	<p><?php esc_html_e( 'Participants should not impersonate another checker, manipulate QR codes, create fraudulent delivery evidence, interfere with another person’s choice, exploit the testnet, introduce malicious code, or use records to harass, discriminate, surveil, or judge. The operator may limit or suspend technical access to protect people, evidence integrity, and system availability. Any such action should be documented without converting it into a moral judgment or deleting append-only history.', 'megavoters' ); ?></p>

	<h2><?php esc_html_e( '13. Intellectual property and feedback', 'megavoters' ); ?></h2>
	<p><?php esc_html_e( 'The testnet, names, content, artwork, and software may be protected by applicable intellectual-property rights. These Terms grant only a limited, revocable, nonexclusive right to use the testnet for its intended experimental purpose. Participants retain rights in their original feedback but authorize the operator to use voluntarily submitted, nonconfidential feedback to improve the testnet without compensation or attribution, unless separately agreed.', 'megavoters' ); ?></p>

	<h2><?php esc_html_e( '14. Experimental service; no warranties', 'megavoters' ); ?></h2>
	<p><?php esc_html_e( 'THE TESTNET IS PROVIDED “AS IS” AND “AS AVAILABLE” FOR EXPERIMENTAL, EDUCATIONAL, AND BEHAVIORAL-RESEARCH PREPARATION PURPOSES. TO THE MAXIMUM EXTENT PERMITTED BY LAW, NO WARRANTY IS MADE THAT THE TESTNET WILL BE UNINTERRUPTED, ERROR-FREE, SECURE, ACCURATE, SUITABLE FOR A PARTICULAR PURPOSE, OR CAPABLE OF PRODUCING FINANCIAL, LEGAL, RELIGIOUS, SOCIAL, OR RESEARCH OUTCOMES. NOTHING IN THESE TERMS EXCLUDES RIGHTS THAT CANNOT LAWFULLY BE EXCLUDED.', 'megavoters' ); ?></p>

	<h2><?php esc_html_e( '15. Limitation of liability', 'megavoters' ); ?></h2>
	<p><?php esc_html_e( 'To the maximum extent permitted by applicable law, the operator will not be liable for indirect, incidental, special, consequential, exemplary, or punitive damages arising from testnet use. Any enforceable aggregate cap, exclusions, consumer carve-outs, and jurisdiction-specific language must be established by qualified counsel before launch. This draft intentionally does not invent a dollar cap.', 'megavoters' ); ?></p>

	<h2><?php esc_html_e( '16. Changes, suspension, and testnet sunset', 'megavoters' ); ?></h2>
	<p><?php esc_html_e( 'The operator may revise testnet functions, guidelines, or these Terms as learning occurs. Material changes should be dated, versioned, presented before renewed affirmative participation, and retained in reproducible form. The operator may suspend or end the testnet while preserving required records and providing any notices required by law. A testnet record is not a perpetual promise of service or future mainnet recognition.', 'megavoters' ); ?></p>

	<h2><?php esc_html_e( '17. Electronic records and acceptance', 'megavoters' ); ?></h2>
	<p><?php esc_html_e( 'Electronic acceptance should be affirmatively captured, logically associated with the accepted version, timestamped, and stored in a form capable of accurate later reproduction. Declining or scanning nothing does not create acceptance. Participants should be able to retain or access the applicable Terms. Any additional consent required for research, minors, prizes, marketing, location, biometrics, or financial activity must be obtained separately.', 'megavoters' ); ?></p>

	<h2><?php esc_html_e( '18. Age eligibility', 'megavoters' ); ?></h2>
	<p><?php esc_html_e( 'Until counsel approves a youth pathway and any required parental-consent process, independent account or device registration should be limited to adults age 18 or older. Public observation without scanning remains available subject to gathering guidelines. The operator should not knowingly collect personal information from children through the testnet without implementing applicable protections.', 'megavoters' ); ?></p>

	<h2><?php esc_html_e( '19. Governing law, disputes, and contact', 'megavoters' ); ?></h2>
	<p><?php esc_html_e( 'Proposed governing law: State of Georgia, without regard to conflict-of-law principles. The final dispute forum, informal-resolution process, venue, arbitration choice (if any), class-action language (if any), consumer-rights carve-outs, notices, and operator contact details must be completed and approved by qualified counsel. No binding arbitration or waiver is inserted into this draft without an informed operator decision.', 'megavoters' ); ?></p>

	<h2><?php esc_html_e( '20. Severability, no waiver, and entire agreement', 'megavoters' ); ?></h2>
	<p><?php esc_html_e( 'If a provision is held unenforceable, it should be limited or removed only to the minimum extent necessary, and the remainder should continue where lawful. Failure to enforce a provision is not a waiver. These Terms, the Privacy Notice, published prize terms, research consent, and any expressly incorporated notices form the applicable agreement for their respective subjects; a conflict should be resolved by the more specific, later accepted document to the extent lawful.', 'megavoters' ); ?></p>

	<h2><?php esc_html_e( 'Appendix A — Implementation acceptance checklist', 'megavoters' ); ?></h2>
	<ul>
		<li><?php esc_html_e( 'Every human-value equivalence uses stored operator code DOTTED_EQ and renders as ≐.', 'megavoters' ); ?></li>
		<li><?php esc_html_e( 'Every API and export test rejects ordinary = when the semantic field requires ≐.', 'megavoters' ); ?></li>
		<li><?php esc_html_e( 'Screen-reader label reads “testnet-equivalent-to.”', 'megavoters' ); ?></li>
		<li><?php esc_html_e( 'Y/Y/Y computation preserves Y₁, Y₂, Y₃ and does not store only the Boolean result.', 'megavoters' ); ?></li>
		<li><?php esc_html_e( 'Only three QR categories exist: Identity, YAM-is-On, and Seeking Gratitude.', 'megavoters' ); ?></li>
		<li><?php esc_html_e( 'No-scan creates no individual record absent a previously issued encounter.', 'megavoters' ); ?></li>
		<li><?php esc_html_e( 'MONEY and GRATITUDE ledgers remain separated by schema, permissions, and reporting.', 'megavoters' ); ?></li>
		<li><?php esc_html_e( 'Disputed records cannot become Extinguished without Reconciled status.', 'megavoters' ); ?></li>
		<li><?php esc_html_e( 'Every Terms acceptance retains version, timestamp, affirmative action, and reproducible text.', 'megavoters' ); ?></li>
		<li><?php esc_html_e( 'Public claims match the Privacy Notice, published prize terms, and institutional status evidence.', 'megavoters' ); ?></li>
	</ul>

	<h2><?php esc_html_e( 'Appendix B — Counsel review priorities', 'megavoters' ); ?></h2>
	<ul>
		<li><?php esc_html_e( 'Confirm legal operator name, address, contact, and effective date.', 'megavoters' ); ?></li>
		<li><?php esc_html_e( 'Review Georgia contract, consumer-protection, privacy, sweepstakes, charitable-promotion, and dispute provisions.', 'megavoters' ); ?></li>
		<li><?php esc_html_e( 'Determine applicable state privacy notices and international restrictions before global access.', 'megavoters' ); ?></li>
		<li><?php esc_html_e( 'Review age eligibility and COPPA exposure.', 'megavoters' ); ?></li>
		<li><?php esc_html_e( 'Review whether any YAM-is-On promise, membership pledge, voucher, referral benefit, or trade-value language triggers money-transmission, lending, securities, tax, gaming, or other regulated activity.', 'megavoters' ); ?></li>
		<li><?php esc_html_e( 'Prepare separate Privacy Notice, research consent, accessibility statement, and published prize terms.', 'megavoters' ); ?></li>
		<li><?php esc_html_e( 'Confirm intellectual-property ownership and permitted use of all names, marks, images, and software.', 'megavoters' ); ?></li>
	</ul>

	<p><small><?php esc_html_e( 'Counsel-review draft • Version 0.9 • August 13, 2026. Appendix C source notes for counsel are in the downloadable PDF.', 'megavoters' ); ?></small></p>
</main>

<?php
include get_stylesheet_directory() . '/inc/site-footer.php';
include get_stylesheet_directory() . '/inc/layout-end.php';
