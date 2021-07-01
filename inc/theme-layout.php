<?php
/**
 * Template layout
 */
 
 /**
 * Primary Header
 */
if ( ! function_exists( 'wpmulai_primary_header' ) ) {

	/**
	 * add to action @wpmulai_header
	 */
    add_action('wpmulai_header','wpmulai_primary_header');
	function wpmulai_primary_header() {
		get_template_part( 'layout/header-main' );
	}
}

 /**
 * Primary Footer
 */
 if ( ! function_exists( 'wpmulai_primary_footer' ) ) {

	/**
	 * add to action @wpmulai_footer
	 */
    add_action('wpmulai_footer','wpmulai_primary_footer');
	function wpmulai_primary_footer() {
		get_template_part( 'layout/footer-main' );
	}
}