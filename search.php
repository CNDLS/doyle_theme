<?php
/**
 * The template for displaying Search Results pages.
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

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h2 class="page-title"><?php printf( __( 'Search Results for: %s', 'futures' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'search' ); ?>

			<?php endwhile; ?>

			<?php futures_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->

	</div><!-- #primary -->

        </div><!-- .col-md-8 -->
    
    </div><!-- .row -->

</div><!-- .container -->

<?php get_footer(); ?>
