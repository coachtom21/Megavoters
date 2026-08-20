<?php
/**
 * Open HTML document for MEGAvoters portal templates.
 *
 * @package MEGAvoters
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$mega_body_class = isset( $mega_body_class ) ? $mega_body_class : '';
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="<?php echo esc_url( megavoters_image_url( 'favicon.svg' ) ); ?>" type="image/svg+xml">
	<?php wp_head(); ?>
</head>
<body <?php body_class( trim( 'mega-portal ' . $mega_body_class ) ); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#content"><?php esc_html_e( 'Skip to content', 'megavoters' ); ?></a>
