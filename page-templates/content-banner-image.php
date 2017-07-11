<?php
/**
 * The template for displaying all pages.
 *
 * Template Name: Banner Image Page
 * Template Post Type: post, page

 * Description: Standard Page template with a Banner Image
 *
 * @package futures
 */

get_header(); ?>

<div id="main">
<div class="container">
  <div class="row">
    <div class="col-md-12 box">
<h1 class="entry-title"><?php the_title(); ?></h1>
<div class="col-md-12">
  <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive responsive--full']); ?>
</div>

<div class="col-md-12">

<?php while (have_posts()) : the_post(); ?>

    <?php get_template_part('partials/content', 'page'); ?>

<?php endwhile; // end of the loop.?>
</div>


</div>
</div>
</div>


</div><!-- /#content -->

<?php // get_sidebar();?>
<?php get_footer(); ?>
