<?php
/**
 * The Template for displaying all single posts.
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
                    <h1 class="entry-title">News</h1>
                </div>
            </div>
        </div><!-- /.photo -->
    </div><!-- /.outer -->
</div>

<div class="container">

    <div class="row">

        <div class="col-md-4">
<?php get_sidebar(); ?>
        </div>


        <div class="col-md-8">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'partials/content', 'single' ); ?>

			<?php //futures_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

        </div><!-- .col-md-8 -->

    </div><!-- .row -->

</div><!-- .container -->

<?php get_footer(); ?>
