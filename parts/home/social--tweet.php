<div <?php post_class('tweet');?>>
  <div class="tweet-wrapper">
    <div class="wrapper">
      <?php the_content(); ?>
      <p class="posted"><?php the_time('F j, Y'); ?> @ <?php the_time('g:i a'); ?></p>
    </div>
  </div>
  <img src="http://placehold.it/950x950" class="invisible img-responsive">
</div>
