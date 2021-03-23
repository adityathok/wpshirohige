<?php
/**
 * Custom hooks
 *
 * @package wpmulai
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'wpmulai_site_info' ) ) {
	/**
	 * Add site info hook to WP hook library.
	 */
	function wpmulai_site_info() {
		do_action( 'wpmulai_site_info' );
	}
}

add_action( 'wpmulai_site_info', 'wpmulai_add_site_info' );
if ( ! function_exists( 'wpmulai_add_site_info' ) ) {
	/**
	 * Add site info content.
	 */
	function wpmulai_add_site_info() {
		$the_theme = wp_get_theme();

		$site_info = sprintf(
			'<a href="%1$s">%2$s</a><span class="sep"> | </span>%3$s(%4$s)',
			esc_url( __( 'http://wordpress.org/', 'wpmulai' ) ),
			sprintf(
				/* translators: WordPress */
				esc_html__( 'Proudly powered by %s', 'wpmulai' ),
				'WordPress'
			),
			sprintf( // WPCS: XSS ok.
				/* translators: 1: Theme name, 2: Theme author */
				esc_html__( 'Theme: %1$s by %2$s.', 'wpmulai' ),
				$the_theme->get( 'Name' ),
				'<a href="' . esc_url( __( 'http://wpmulai.com', 'wpmulai' ) ) . '">wpmulai.com</a>'
			),
			sprintf( // WPCS: XSS ok.
				/* translators: Theme version */
				esc_html__( 'Version: %1$s', 'wpmulai' ),
				$the_theme->get( 'Version' )
			)
		);

		echo apply_filters( 'wpmulai_site_info_content', $site_info ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
}
