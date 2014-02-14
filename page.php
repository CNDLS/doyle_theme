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

<div id="page-header" class="col-md-12">
    <div class="outer">
        <div class="scrim">
        </div>

        <div class="photo">
            <div class="carousel-inner">
                <div class="page-title container">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </div>
            </div>
        </div><!-- /.photo -->
    </div><!-- /.outer -->
</div>

<?php while ( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'content', 'page' ); ?>

<?php endwhile; // end of the loop. ?>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
