<?php 
/**
 * wpmulai functions hooks
 *
 * @package wpmulai
 */

 /**
 * Site before Header
 */
function wpmulai_header_before() {
	do_action( 'wpmulai_header_before' );
}

 /**
 * Site Header
 */
function wpmulai_header() {
	do_action( 'wpmulai_header' );
}

/**
 * Site after Header
 */
 function wpmulai_header_after() {
	do_action( 'wpmulai_header_after' );
}