<?php
/**
 * @package futures
 * Template Name: HomePage Template
 * Description: Template for Generating Homepage Content
 */

?>

<div class="row">
	<div class="col-md-7">
		<h2 id="site-tagline" class="tagline padded-multiline">
		<span>
		Engaging difference in higher education and learning<br />
		<a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">Learn more &rarr;</a>
		</span>
		</h2>
	</div>
<div class="col-md-5 box posts">
<?php the_field('homepage_box') ?>
</div>
</div>
<div class="container-fluid">
	<?php if( have_rows('carousel') ): ?>

			<?php get_template_part( 'partials/content', 'carousel' ); ?>

	<?php endif; ?>
		<?php the_content(); ?>
</div>
