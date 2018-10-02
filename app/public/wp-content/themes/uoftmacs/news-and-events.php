<?php /* Template Name: News and Events */ ?>


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
          <div class = "calendar__embed">
            <iframe src="https://calendar.google.com/calendar/b/1/embed?showNav=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23F4F4F4&amp;src=medarchmacs%40gmail.com&amp;color=%23FF0000&amp;ctz=America%2FToronto" 
              style="border-width:0" 
              width="100%"
              height="600px"
              frameborder="0" 
              scrolling="no">
            </iframe>
          </div>
          <div class = "calendar__list">
              <h2 class = "calendar__list-title">Upcoming Events</h2>
          </div>
        </div>
      </div>

      <?php endwhile;
  
  endif;

  ?>

<?php get_footer(); ?>
