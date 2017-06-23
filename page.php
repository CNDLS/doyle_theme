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

<div id="banner">

</div>

<div id="content">

<div class="container"><div class="row">
<?php
/*
<div class="col-md-4">
<img src="<?php echo get_template_directory_uri(); ?>/img/<?php echo get_post_meta( $post->ID, 'photo', true ); ?>.jpg" class="sidebar-photo" />
</div>
 */ ?>

<div class="col-md-12 box">

<h1 class="entry-title"><?php the_title(); ?></h1>

<?php while ( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'content', 'page' ); ?>

<?php endwhile; // end of the loop. ?>

</div>

</div></div>

</div><!-- /#content -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
