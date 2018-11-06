<?php /* Template Name: Program Overview */ ?>

<?php get_header(); ?>
  <?php
  
  if( have_posts() ):
    
    while(have_posts()): the_post();?>
      <?php get_template_part( 'partials/image-full-bleed', 'fullBleedImage' ); ?>
      
      <div class = "content__wrapper">
        <div class = "content grid-container">
          <?php 
            $quote = get_field( "quote_section_1" );
            include(locate_template('partials/quote.php'));
          ?>

          <?php 
            $content = get_field("content_1");
            include(locate_template('partials/content.php'));
          ?>
        </div>

        <div class = "content--image-full grid-container">
          <?php 
            $image = get_field("inline_image");
            include(locate_template('partials/image-inline.php'));
          ?>
        </div>

        <div class = "content grid-container">
          <?php 
            $content = get_field("content_2");
            include(locate_template('partials/content.php'));
          ?>
        </div>
      </div>

      <?php endwhile;
  
  endif;

  ?>
<?php get_footer(); ?>
