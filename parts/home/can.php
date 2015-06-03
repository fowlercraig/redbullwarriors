<div id="spinner--container">
  <nav id="spinner-tabs" class="tabs">
    <div class="hotspot-frame" id="info--group_1">

      <?php if( have_rows('hotspots_section-1') ): $i = 1; while ( have_rows('hotspots_section-1') ) : the_row(); ?>
      <?php if ( !get_sub_field('enable_hotspot')): ?>

      <a href="#tab-<?php echo $i; ?>" data-left="<?php the_sub_field('x_coordinate'); ?>" data-top="<?php the_sub_field('y_coordinate'); ?>" style="left: <?php the_sub_field('x_coordinate'); ?>px; top: <?php the_sub_field('y_coordinate'); ?>px" class="tab gps_ring <?php the_sub_field('quadrant'); ?>" data-tabs-group="tab-group"></a>

      <?php endif; ?>
      <?php $i++; endwhile; endif; ?>

    </div>
  </nav>
  <div id="spinner--wrapper">
    <div class="threesixty can">
      <div class="spinner"><span>0%</span></div>
      <ol class="threesixty_images"></ol>
      <div class="loader-img">
        <img src="/assets/img/Warriors_v02.1.png" class="img-responsive" />
      </div>
    </div>
  </div>
</div>

