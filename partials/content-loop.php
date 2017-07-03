
<div class="col-md-6 loop-item">
  <div class="loop-inner">
<div class="col-md-12">
  <h2><?php the_title(); ?></h2>
</div>
<?php if (has_post_thumbnail()): ?>
<div class="col-md-5">
  <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive responsive--full']); ?>
</div>
<div class="col-md-7 loop-body">
<?php the_excerpt(); ?>
  </div>
<?php else: ?>
<div class="col-md-12 loop-body">
   <?php the_excerpt(); ?>
 </div>
<?php endif ?>
</div>
</div>
