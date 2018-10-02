<?php /* Template Name: Courses */ ?>

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
        <div class = "content content--courses grid-container">
          <p class = "quote">
            <?php echo get_field( "subheading_1" ) ?>
          </p>
          <div class = "content__text">
            <?php echo get_field( "content_1" ) ?>
          </div>

          <hr class = "content__course-break">

          <p class = "quote">
            <?php echo get_field( "subheading_2" ) ?>
          </p>
          <div class = "content__text">
            <?php echo get_field( "content_2" ) ?>
          </div>

          <hr class = "content__course-break">

          <p class = "quote">
            <?php echo get_field( "subheading_3" ) ?>
          </p>
          <div class = "content__text">
            <?php echo get_field( "content_3" ) ?>
          </div>

          <hr class = "content__course-break">

          <p class = "quote">
            <?php echo get_field( "subheading_4" ) ?>
          </p>
          <div class = "content__text">
            <?php echo get_field( "content_4" ) ?>
          </div>

          <hr class = "content__course-break">

          <p class = "quote">
            <?php echo get_field( "subheading_5" ) ?>
          </p>
          <div class = "content__text">
            <?php echo get_field( "content_5" ) ?>
          </div>

          <hr class = "content__course-break">

          <div class = "content__text">
            <?php echo get_field( "content_6" ) ?>
          </div>
        </div>
        
        </div>
      </div>

      <?php endwhile;
  
  endif;

  ?>
<?php get_footer(); ?>
