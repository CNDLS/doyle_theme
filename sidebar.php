<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package futures
 */
?>
	<div id="secondary" class="widget-area" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

			<aside id="search" class="widget widget_search">
				<?php get_search_form(); ?>
			</aside>

			<aside id="archives" class="widget">
				<h3 class="widget-title"><?php _e( 'Archives', 'futures' ); ?></h3>
				<ul class="list-unstyled">
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>
			</aside>
<?php /*
			<aside id="meta" class="widget">
				<h3 class="widget-title"><?php _e( 'Meta', 'futures' ); ?></h3>
				<ul class="list-unstyled">
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</aside>
*/ ?>
		<?php endif; // end sidebar widget area ?>
	</div><!-- #secondary -->
