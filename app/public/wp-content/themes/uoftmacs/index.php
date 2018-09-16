<?php get_header(); ?>
  <?php
  
  if( have_posts() ):
    
    while(have_posts()): the_post();?>
      <!-- <?php the_meta(); ?> -->

      <div class = "feature__image">
      <?php if( has_post_thumbnail()){
        the_post_thumbnail();
      } else {} ?>
      </div>

      <div class = "content grid-container">

      <p class = "quote">
        <?php echo get_post_meta(get_the_ID(), 'Quote', true)?>
      </p>
      <div class = "content__text">
        <?php the_content();?>
      </div>

      <!-- <hr> -->
      </div>

      <?php endwhile;
  
  endif;

  ?>
<?php get_footer(); ?>
