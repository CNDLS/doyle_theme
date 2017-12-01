<div class="col-md-6 loop-item">
	<div class="loop-inner">
		<div class="row">
			<div class="col-xs-12">
				<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
			</div>

			<?php if ( has_post_thumbnail() ): ?>
				<div class="col-xs-5">
					<?php
					$thumbnail_id    = get_post_thumbnail_id();
					$image_src_array = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail' );
					$image_src       = $image_src_array[0];
					?>
					<img src="<?php echo $image_src; ?>" alt="<?php the_title(); ?>"
						 class="img-responsive responsive--full">
				</div>
				<div class="col-xs-7 loop-body">
					<?php the_excerpt(); ?>
				</div>
			<?php else: ?>
				<div class="col-xs-12 loop-body">
					<?php the_excerpt(); ?>
				</div>
			<?php endif ?>
		</div>
	</div>
</div>

