<?php /* Template Name: People Template */ ?>

<?php get_header(); ?>

  <!-- get_cat_ID( $cat_name ); -->

  <?php
  if( have_posts() ):
    
    while(have_posts()): the_post();?>
      <!-- <?php get_template_part( 'partials/image-full-bleed', 'fullBleedImage' ); ?> -->

      <?php $group = get_field("group") ?>

      <div class = "content__wrapper">
        <div class = "content grid-container">
        <?php 
          $quote = get_field( "group" );
          include(locate_template('partials/quote.php'));
        ?>
        
        <div class = "profile_container">
          <?php
            $post_query = new WP_Query( array( 'category_name' => $quote, 'order' => 'ASC', ) );
            if($post_query->have_posts() ) {
              while($post_query->have_posts() ) {
                $post_query->the_post();
                include(locate_template('partials/profile.php'));
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
