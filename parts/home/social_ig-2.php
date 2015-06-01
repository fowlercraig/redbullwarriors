<div class="image fs-cell fs-lg-12 fs-md-6 fs-sm-3 fs-contained">
<div class="fs-row">

<?php

  $args = array (

    'posts_per_page' => 8,
    'offset'         => 8,
    'paged'          => $paged,
    'post_type'      => 'social',
    'tax_query'      => array(
      array(
        'taxonomy'   => 'post_format',
        'field'      => 'slug',
        'terms'      => 'post-format-image'
      )
    )

  );

  $temp = $wp_query;
  $wp_query = null;
  $wp_query = new WP_Query();
  $wp_query->query($args);
  $i = 1; echo '<div>';
  while ($wp_query->have_posts()) : $wp_query->the_post();
?>

<?php include locate_template('parts/home/social--image.php' ); ?>
<?php if($i % 4 == 0) {echo '</div><div>';} ?>

<?php
  $i++;
  endwhile;
  $wp_query = null;
  $wp_query = $temp;  // Reset
  echo '</div>';
?>

</div>
</div>
