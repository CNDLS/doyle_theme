<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package futures
 */

get_header(); ?>

<div id="main">
    <div class="container">

        <div class="row">

            <div class="col-md-7">
<h2 id="site-tagline" class="tagline">
<span class="multiline-wrap">
    <span class="multiline-inner">
        Engaging difference in higher education and learning<br />
        <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">Learn more &rarr;</a>
    </span>
</span>
</h2>

<div class="box">
<p class="lead"><span class="initialism">The Doyle Program</span> serves the entire Georgetown University community and is a campus-wide collaboration between the <a href="http://berkleycenter.georgetown.edu/">Berkley Center for Religion, Peace, and World Affairs</a>, the <a href="https://cndls.georgetown.edu/">Center for New Designs in Learning and Scholarship (CNDLS)</a> and <a href="http://college.georgetown.edu/">Georgetown College</a>.</p>
</div>

            </div><!-- /.col-md-7 -->

            <div class="col-md-4 col-md-offset-1 box posts">
            <?php if ( have_posts() ) : ?>

                <?php /* Start the Loop */ ?>
                <?php query_posts('posts_per_page=3'); ?>
                <?php while ( have_posts() ) : the_post(); ?>

                    <?php
                        /* Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
                        get_template_part( 'content', 'front' );
                    ?>

                <?php endwhile; ?>

            <?php else : ?>

                <?php get_template_part( 'content', 'none' ); ?>

            <?php endif; ?>
            </div><!-- /.col-md-5 -->

        </div><!-- /.row -->

    </div><!-- /.container -->
</div><!-- /#second-tier -->

<?php get_footer(); ?>
