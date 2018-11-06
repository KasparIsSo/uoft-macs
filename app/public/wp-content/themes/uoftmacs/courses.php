<?php /* Template Name: Courses */ ?>

<?php get_header(); ?>
  <?php
  
  if( have_posts() ):
    
    while(have_posts()): the_post();?>
      <?php get_template_part( 'partials/image-full-bleed', 'fullBleedImage' ); ?>

      <div class = "content__wrapper">
        <div class = "content content--courses grid-container">
          <?php 
            $quote = get_field( "subheading_1" );
            include(locate_template('partials/quote.php'));
          ?>
          <?php 
            $content = get_field("content_1");
            include(locate_template('partials/content.php'));
          ?>

          <hr class = "content__course-break">

          <?php 
            $quote = get_field( "subheading_2" );
            include(locate_template('partials/quote.php'));
          ?>
          <?php 
            $content = get_field("content_2");
            include(locate_template('partials/content.php'));
          ?>

          <hr class = "content__course-break">

          <?php 
            $quote = get_field( "subheading_3" );
            include(locate_template('partials/quote.php'));
          ?>
          <?php 
            $content = get_field("content_3");
            include(locate_template('partials/content.php'));
          ?>

          <hr class = "content__course-break">

          <?php 
            $quote = get_field( "subheading_4" );
            include(locate_template('partials/quote.php'));
          ?>
          <?php 
            $content = get_field("content_4");
            include(locate_template('partials/content.php'));
          ?>

          <hr class = "content__course-break">

          <?php 
            $quote = get_field( "subheading_5" );
            include(locate_template('partials/quote.php'));
          ?>
          <?php 
            $content = get_field("content_5");
            include(locate_template('partials/content.php'));
          ?>

          <hr class = "content__course-break">

          <?php 
            $content = get_field("content_6");
            include(locate_template('partials/content.php'));
          ?>
        </div>
        
        </div>
      </div>

      <?php endwhile;
  
  endif;

  ?>
<?php get_footer(); ?>
