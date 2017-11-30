<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package futures
 */
?>

<!-- BEGIN LOOP CONTENT-->
<hr>
<?php
// Only show title if empty and show_post_loop is checked.
if ( get_field( 'show_post_loop' ) && get_field( 'bucket_title' ) ) :
?>
	<h2 class="entry-title"><?php the_field( 'bucket_title' ) ?></h2>
<?php endif ?>

<?php echo add_postloop( $args ); ?>


