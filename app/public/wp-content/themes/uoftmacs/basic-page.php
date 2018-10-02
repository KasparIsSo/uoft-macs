<?php /* Template Name: Basic Page Template */ ?>

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
            <?php echo get_field( "quote_section_1" ) ?>
          </p>
          <div class = "content__text">
            <?php echo get_field( "content_1" ) ?>
          </div>
        
        </div>
      </div>

      <?php endwhile;
  
  endif;

  ?>
<?php get_footer(); ?>
