<?php $images = get_field('gallery'); if( $images ): ?>
<?php foreach( $images as $image ): ?>
<figure class="fs-cell fs-lg-2 fs-md-fourth fs-sm-half fs-contained">
<a href="<?php echo $image['url']; ?>">
<img class="img-responsive" src="<?php echo $image['sizes']['gallery-sm']; ?>" alt="<?php echo $image['alt']; ?>" />
</a>
</figure>
<?php endforeach; ?>
<?php endif; ?>