<?php /* Template Name: People Template */ ?>

<?php get_header(); ?>

  <!-- get_cat_ID( $cat_name ); -->

  <?php
  if( have_posts() ):
    
    while(have_posts()): the_post();?>
      <?php $group = get_field("group") ?>

      <div class = "content__wrapper">
        <?php
        $groupNames = get_field("groups");
        foreach ($groupNames as &$value): ?>
          <div class = "content grid-container">
            <?php 
              $quote = $value;
              include(locate_template('partials/quote.php')); 
            ?>
            <div class = "profile_container">
              <?php
                $post_query = new WP_Query( array( 'category_name' => $group, 'order' => 'ASC', ) );
                if($post_query->have_posts() ) {
                  while($post_query->have_posts() ) {
                    $post_query->the_post();
                    if( get_field('department') == $value ){
                      include(locate_template('partials/profile.php'));
                    }
                  }
                }
              ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>


   <?php endwhile;
  
  endif;

  ?>
<?php get_footer(); ?>
