<?php /* Template Name: Program Overview */ ?>

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

        <div class = "content--image-full grid-container">
          <?php 

          $image = get_field("inline_image");

          if( !empty($image) ): ?>
            <div class = "image--full">
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
              <p class = "image__caption">
                <b><?php echo $image['description']; ?></b> - 
                <?php echo $image['caption']; ?>
              </p>
            </div>
          <?php endif; ?>
        </div>

        <div class = "content grid-container">

          <div class = "content__text">
            <?php echo get_field( "content_2" ) ?>
          </div>

        </div>
      </div>

      <?php endwhile;
  
  endif;

  ?>
<?php get_footer(); ?>
