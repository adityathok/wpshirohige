<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package wpmulai
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>

	</div><!-- .page-content we need this extra closing tag here -->

	<?php 
	wpmulai_footer_before(); 

	wpmulai_footer(); 

	wpmulai_footer_after();
	?>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

