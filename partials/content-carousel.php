
<!-- Carousel Goes here! -->


	<div id="doyleCarousel" class="carousel slide" data-ride="carousel">
<!-- Slider Controls -->
	  <ol class="carousel-indicators">
		<?php while ( have_rows('carousel') ) : the_row(); $i++; ?>
			<li data-target="#doyleCarousel" data-slide-to="<?php echo $i?>"></li>
		<?php	    endwhile; ?>
	</ol>
<!-- Slider Items -->
<div class="carousel-inner">

<?php
 	// loop through each slide //
    while ( have_rows('carousel') ) : the_row(); ?>
			<div class="item">
        <div class="carousel-img">
				<img style="width:100%" src="<?php  the_sub_field('carousel_image'); ?>"></img>
        </div>
				<div class="caption col-md-12">
					<h1 class="caption-title"><?php the_sub_field('caption_title') ?></h1>
          <h3 class="caption-desc"><?php the_sub_field('caption_desc') ?></h3>
					<a class="caption-link" href="<?php the_sub_field('read_more_link') ?>">Read More</a>
				</div>
			</div>
				<?php	    endwhile; ?>

		</div>

	<!-- Left and right controls -->
	<a class="left carousel-control" href="#doyleCarousel" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#doyleCarousel" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
