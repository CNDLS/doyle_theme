<?php
/**
 * @package futures
 *
 */
?>

<h1 class="entry-title"><?php the_title(); ?></h1>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php the_content(); ?>

	</div><!-- .entry-content -->

</article><!-- #post-## -->
