<?php

  $args = array (

    'posts_per_page' => 3,
    'offset'         => 3,
    'paged'          => $paged,
    'post_type'      => 'social',
    'tax_query'      => array(
      array(
        'taxonomy'   => 'post_format',
        'field'      => 'slug',
        'terms'      => 'post-format-quote'
      )
    )

  );

  $temp = $wp_query;
  $wp_query = null;
  $wp_query = new WP_Query();
  $wp_query->query($args);

  while ($wp_query->have_posts()) : $wp_query->the_post();
?>

<?php include locate_template('parts/home/social--tweet.php' ); ?>

<?php
  endwhile;
  $wp_query = null;
  $wp_query = $temp;  // Reset
?>
