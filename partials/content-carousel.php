<!-- Carousel Goes here! -->


<div id="doyleCarousel" class="carousel slide" data-ride="carousel">
	<!-- Slider Controls -->
	<ol class="carousel-indicators">
		<?php
		$i = 0;
		while ( have_rows( 'carousel' ) ) : the_row();
		$i ++;
		?>
			<li data-target="#doyleCarousel" data-slide-to="<?php echo $i ?>"></li>
		<?php endwhile; ?>
	</ol>
	<!-- Slider Items -->
	<div class="carousel-inner">

		<?php
		// loop through each slide //
		while ( have_rows( 'carousel' ) ) : the_row(); ?>
			<?php
			$id = get_sub_field( 'carousel_image' );
			$src_array = wp_get_attachment_image_src( $id, 'home_carousel_2340' );
			$src = $src_array[0]; // Default 'src' for <img> tag.
			$srcset = wp_get_attachment_image_srcset( $id, 'home_carousel_2340' );
			$alt = get_post_meta( $id, '_wp_attachment_image_alt', true);
			?>
			<div class="item">
				<div class="carousel-img">
					<img src="<?php echo $src; ?>"
					     srcset="<?php echo $srcset; ?>"
					     sizes="(max-width: 1170px) 100vw, 1170px">
				</div>
				<div class="caption col-md-12">

					<h1 class="caption-title"><a href="<?php the_sub_field( 'read_more_link' ) ?>">
							<?php the_sub_field( 'caption_title' ) ?></a></h1>
					<h3 class="caption-desc"><?php the_sub_field( 'caption_desc' ) ?></h3>
					<a class="text-right caption-link" href="<?php the_sub_field( 'read_more_link' ) ?>">Read More</a>
				</div>
			</div>
		<?php endwhile; ?>

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
