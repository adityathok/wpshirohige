<?php
/**
 * Custom hooks
 *
 * @package wpshirohige
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'wpshirohige_site_info' ) ) {
	/**
	 * Add site info hook to WP hook library.
	 */
	function wpshirohige_site_info() {
		do_action( 'wpshirohige_site_info' );
	}
}

add_action( 'wpshirohige_site_info', 'wpshirohige_add_site_info' );
if ( ! function_exists( 'wpshirohige_add_site_info' ) ) {
	/**
	 * Add site info content.
	 */
	function wpshirohige_add_site_info() {
		$the_theme = wp_get_theme();

		$site_info = sprintf(
			'<a href="%1$s">%2$s</a><span class="sep"> | </span>%3$s(%4$s)',
			esc_url( __( 'http://wordpress.org/', 'wpshirohige' ) ),
			sprintf(
				/* translators: WordPress */
				esc_html__( 'Proudly powered by %s', 'wpshirohige' ),
				'WordPress'
			),
			sprintf( // WPCS: XSS ok.
				/* translators: 1: Theme name, 2: Theme author */
				esc_html__( 'Theme: %1$s by %2$s.', 'wpshirohige' ),
				$the_theme->get( 'Name' ),
				'<a href="' . esc_url( __( 'http://wpshirohige.com', 'wpshirohige' ) ) . '">wpshirohige.com</a>'
			),
			sprintf( // WPCS: XSS ok.
				/* translators: Theme version */
				esc_html__( 'Version: %1$s', 'wpshirohige' ),
				$the_theme->get( 'Version' )
			)
		);

		echo apply_filters( 'wpshirohige_site_info_content', $site_info ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
}
