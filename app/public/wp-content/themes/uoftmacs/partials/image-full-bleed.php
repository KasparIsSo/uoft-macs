<?php 
  $image = get_field("display_image");
  
  if( !empty($image) ): ?>
  <div class = "feature__image">
    <img src="<?php echo wp_get_attachment_image_url( $image['id'], 'full' ) ?>"
     srcset="<?php echo wp_get_attachment_image_srcset( $image['id'] ) ?>"
     alt="<?php echo $image['alt']; ?>" />
  </div>
<?php endif; ?>