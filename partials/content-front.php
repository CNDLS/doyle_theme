<?php
/**
 * @package futures
 * Template Name: HomePage Template
 * Description: Template for Generating Homepage Content
 */

?>

	<?php if( have_rows('carousel') ): ?>
<div class="container-fluid">
	<div class="row">
			<?php get_template_part( 'partials/content', 'carousel' ); ?>
		</div>
			</div>
	<?php endif; ?>
	<div class="container">
		<div class="row">
			<?php the_content(); ?>
		</div>
</div>
