<?php /* Template Name: Research and Fieldwork */ ?>

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
          <div class = "research_container">
            <?php
              $post_query = new WP_Query( array( 'category_name' => 'Research & Fieldwork', 'order' => 'ASC', ) );
              if($post_query->have_posts() ) {
                while($post_query->have_posts() ) {
                  $post_query->the_post();
                  
                  include(locate_template('partials/research.php'));
                }
              }
            ?>
          </div>
        </div>
      </div>

    <?php endwhile;
  
  endif;

  ?>
<?php get_footer(); ?>
