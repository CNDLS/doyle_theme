<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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

			<header>
				<h2 class="page-title">
					<?php
						if ( is_category() ) :
							single_cat_title();

						elseif ( is_tag() ) :
							single_tag_title();

						elseif ( is_author() ) :
							printf( __( 'Author: %s', 'futures' ), '<span class="vcard">' . get_the_author() . '</span>' );

						elseif ( is_day() ) :
							printf( __( 'Day: %s', 'futures' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Month: %s', 'futures' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'futures' ) ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Year: %s', 'futures' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'futures' ) ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'futures' );

						elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
							_e( 'Galleries', 'futures');

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'futures');

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'futures' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'futures' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'futures' );

						elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
							_e( 'Statuses', 'futures' );

						elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
							_e( 'Audios', 'futures' );

						elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
							_e( 'Chats', 'futures' );

						else :
							_e( 'Archives', 'futures' );

						endif;
					?>
				</h2>
				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

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
