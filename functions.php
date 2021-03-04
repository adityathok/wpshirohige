<?php
/**
 * wpshirohige functions and definitions
 *
 * @package wpshirohige
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// wpshirohige's includes directory.
$wpshirohige_inc_dir = get_template_directory() . '/inc';

// Array of files to include.
$wpshirohige_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/adityathok/wpshirohige/issues/567.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

// Load WooCommerce functions if WooCommerce is activated.
if ( class_exists( 'WooCommerce' ) ) {
	$wpshirohige_includes[] = '/woocommerce.php';
}

// Load Jetpack compatibility file if Jetpack is activiated.
if ( class_exists( 'Jetpack' ) ) {
	$wpshirohige_includes[] = '/jetpack.php';
}

// Include files.
foreach ( $wpshirohige_includes as $file ) {
	require_once $wpshirohige_inc_dir . $file;
}
