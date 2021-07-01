<?php
/**
 * Template layout
 */
 
 /**
 * Primary Header
 */
if ( ! function_exists( 'wpmulai_primary_header' ) ) {

	/**
	 * Primary Header
	 *
	 * => Used in files:
	 *
	 * /header.php
	 *
	 * @since 1.0.0
	 */
    add_action('wpmulai_header','wpmulai_primary_header');
	function wpmulai_primary_header() {
		get_template_part( 'layout/header-main' );
	}
}