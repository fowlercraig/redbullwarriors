<?php $images = get_field('gallery'); if( $images ): ?>
<?php foreach( $images as $image ): ?>
<figure class="fs-cell fs-lg-2 fs-md-fourth fs-sm-fourth fs-contained">
  <a title="<?php echo $image['title']; ?>" href="<?php echo $image['url']; ?>">
    <img class="img-responsive" src="<?php echo $image['sizes']['gallery-sm']; ?>" alt="<?php echo $image['alt']; ?>" />
  </a>
</figure>
<?php endforeach; ?>
<?php endif; ?>