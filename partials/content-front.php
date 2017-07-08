<?php
/**
 * @package futures
 * Template Name: HomePage Template
 * Description: Template for Generating Homepage Content
 */

?>

	<?php if( have_rows('carousel') ): ?>
<div class="container-fluid">
			<?php get_template_part( 'partials/content', 'carousel' ); ?>
		</div>
	<?php endif; ?>
	<div class="container">
				<?php the_content(); ?>
</div>
