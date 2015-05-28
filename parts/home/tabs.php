

<div id="spinner--tabs-content">

  <?php if( have_rows('hotspots_section-1') ): $counter = 1; while ( have_rows('hotspots_section-1') ) : the_row(); ?>
  <div id="tab-<?php echo $counter;?>" class="tab">
    <div class="inner">
      <div class="image"><img src="/assets/img/tab-image.png" class="img-responsive" /></div>
      <div class="wrapper">
        <?php the_sub_field("description"); ?>
      </div>
    </div>
  </div>
  <?php $counter++; endwhile; endif; ?>

</div>
