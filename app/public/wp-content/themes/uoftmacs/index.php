<?php get_header(); ?>
  
  <?php
  
  if( have_posts() ):
    
    while(have_posts()): the_post();?>

      <?php if(has_post_thumbnail()): ?>

        <div class = "feature__image">
          <?php the_post_thumbnail($size = 'large');?>
        </div>

      <?php endif ?>

      <div class = "content__wrapper">
        <div class = "content grid-container">
        <p class = "quote">
          <?php echo get_post_meta(get_the_ID(), 'Quote', true)?>
        </p>
        <div class = "content__text">
          <?php the_content();?>
        </div>

        <?php echo wp_get_attachment_image( $attachment->ID, 'thumbnail' ); ?>

        </div>
      </div>

    <?php endwhile;
  
  endif;

  ?>
<?php get_footer(); ?>
