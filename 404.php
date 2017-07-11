<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package futures
 */

get_header(); ?>

	<div id="main">
		<div class="container box">
	<h1 class="entry-title">OOPS!</h1>
	<h2>The page you are looking for does not appear to be found!</h2>
	<h2>Click <a href="<?php echo esc_url( home_url( '/' ) ); ?>" target="_blank">here</a> to return to the homepage.</h2>
		</div>
	</div><!-- #primary -->

<?php get_footer(); ?>
