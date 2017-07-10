<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package futures
 */
?>

<?php /*
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
*/ ?>
<?php the_content(); ?>


<!-- BEGIN LOOP CONTENT-->
<div class="loop-container">
	<hr>
<?php  //Only show title if empty and show_post_loop is checked. //
if (get_field('show_post_loop') && get_field('bucket_title')): ?>
<h2 class="entry-title"><?php the_field('bucket_title') ?></h2>
<?php endif ?>
<div class="col-md-12">


      	<div class="row">
      	<?php echo add_postloop($args); ?>
      </div>
    </div>
</div>
