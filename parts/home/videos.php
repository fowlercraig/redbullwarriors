<?php if( have_rows('videos') ): while ( have_rows('videos') ) : the_row(); ?>

<article class="video-wrapper clearfix">
  <div class="fs-cell fs-lg-8 fs-md-4 fs-sm-3 fs-right video sized"><?php the_sub_field('video--embed'); ?></div>
  <div class="fs-cell fs-lg-3 fs-md-2 fs-sm-3 description sized">
    <div class="table">
      <div class="cell">
        <?php the_sub_field('video--description'); ?>
      </div>
    </div>
  </div>
</article>

<?php endwhile; endif; ?>
