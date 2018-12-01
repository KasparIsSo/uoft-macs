<div class = "profile">
  <?php $image = get_field( "profile_picture" );?>
  <?php if( !empty($image) ): ?>
    <?php if( get_field(personal_page_url) ): ?>

    <a href = <?php echo get_field(personal_page_url) ?> target = "_blank" class = "profile__image">
      <img src="<?php echo wp_get_attachment_image_url( $image['id'], $size = 'small' ) ?>"
      alt="<?php echo $image['alt']; ?>" />
    </a>

    <?php else: ?>

    <div class = "profile__image">
      <img src="<?php echo wp_get_attachment_image_url( $image['id'], $size = 'small' ) ?>"
      alt="<?php echo $image['alt']; ?>" />
    </div>

    <?php endif?>
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