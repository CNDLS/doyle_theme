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
<div class="box">
		<?php the_content(); ?>
</div>
</div>
<div class="col-md-4 col-md-offset-1 box posts">
<?php the_field('homepage_box') ?>
</div>
</div>
