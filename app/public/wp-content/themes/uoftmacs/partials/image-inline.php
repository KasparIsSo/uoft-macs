<?php if( !empty($image) ): ?>
  <div class = "image--full">
    <img src="<?php echo wp_get_attachment_image_url( $image['id'] ) ?>"
     srcset="<?php echo wp_get_attachment_image_srcset( $image['id'] ) ?>"
     alt="<?php echo $image['alt']; ?>" />
    <p class = "image__caption">
      <b><?php echo $image['description']; ?></b> - 
      <?php echo $image['caption']; ?>
    </p>
  </div>
<?php endif; ?>