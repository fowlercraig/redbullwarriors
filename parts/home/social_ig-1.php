<div class="image fs-cell fs-lg-12 fs-md-6 fs-sm-3 fs-contained">
<div class="fs-row">

<?php

  $ig_args_1 = array (

    'posts_per_page' => 8,
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

  $temp = $ig1_query;
  $ig1_query = null;
  $ig1_query = new WP_Query();
  $ig1_query->query($ig_args_1);

  $i = 1;
  $total_posts = $ig1_query->post_count;
  $wrap_div = "<div class='wrap'>";
  echo $wrap_div;

  while ($ig1_query->have_posts()) : $ig1_query->the_post();
?>

<?php 
  include locate_template('parts/home/social--image.php' );
  if($i % 4 == 0 && $i != $total_posts) {echo '</div><div class="wrap">';}
?>

<?php
  $i++;
  endwhile;
  $ig1_query = null;
  $ig1_query = $temp;  // Reset
  echo '</div>';
?>
</div>
</div>