<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package futures
 */

get_header(); ?>

<div id="content">
	<div id="main">
		<div class="container">
			<div class="row">
				<div class="col-md-12 box">
					<h1 class="entry-title"><?php the_title(); ?></h1>

					<?php while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
						<?php get_template_part( 'partials/content', 'page' ); ?>
					<?php endwhile; // end of the loop. ?>

				</div>
			</div>
		</div>
	</div>
</div><!-- /#content -->
<?php // get_sidebar(); ?>
<?php get_footer(); ?>
