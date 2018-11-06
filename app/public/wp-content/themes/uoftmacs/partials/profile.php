<div class = "profile">
  <?php $image = get_field( "profile_picture" );?>
  <?php if( !empty($image) ): ?>
    <div class = "profile__image">
      <img src="<?php echo wp_get_attachment_image_url( $image['id'] ) ?>"
      alt="<?php echo $image['alt']; ?>" />
    </div>
  <?php else: ?>
    <div class = "profile__image">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/people/profile_empty.jpg"
      alt="<?php echo $image['alt']; ?>" />
    </div>
  <?php endif ?>
  <h4 class = "profile__name">
    <?php echo 
      get_field( "first_name" ) . " " .
      get_field( "last_name" )
    ?>
  </h4>
  <p class = "profile__title">
    <?php echo 
      get_field( "title_full" ) 
    ?>
  </p>
</div>