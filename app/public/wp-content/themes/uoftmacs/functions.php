<?php

function uoftmacs_script_enqueue(){

  wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700', false ); 
  wp_enqueue_script('app', get_template_directory_uri() . '/js/app.js', array(), '1.0.0', true); //js in footer

  if(is_page()){

    global $wp_query;
    $template_name = get_post_meta( $wp_query->post->ID, '_wp_page_template', true );
    wp_enqueue_style('baselayout', get_template_directory_uri() . '/css/main.css', array(), '1.0.0', 'all');
    
    if(is_page_template( 'news-and-events.php' )){ 
      wp_enqueue_script('datehelper', get_template_directory_uri() . '/js/date-helpers.js', array(), '1.0.0', true);
      wp_enqueue_script('calendar', get_template_directory_uri() . '/js/calendar.js', array(), '1.0.0', true);
      wp_enqueue_style('calendarstyle', get_template_directory_uri() . '/css/news-and-events.css', array(), '1.0.0', 'all');
    }

    if(is_page_template( 'people.php' )){ 
      wp_enqueue_style('people', get_template_directory_uri() . '/css/people.css', array(), '1.0.0', 'all');
    }
  }

}

add_action('wp_enqueue_scripts', 'uoftmacs_script_enqueue');

function uoftmacs_theme_setup(){

  add_theme_support('menus');
  add_theme_support('post-thumbnails');
  add_theme_support('post-formats', array(''));
  register_nav_menu('primary', 'Primary Header Navigation');
  register_nav_menu('footer', 'Footer Navigation');
  add_filter('jpeg_quality', function($arg){return 100;});

}

function wpdocs_theme_setup() {
  add_image_size( 'mobile', 420 );
  add_image_size( 'tablet', 768 );
  add_image_size( 'desktop', 1160 );
  add_image_size( 'desktop-large', 1600 );
  add_image_size( 'desktop-max', 1920 );
}

add_action('init', 'uoftmacs_theme_setup');
add_action( 'after_setup_theme', 'wpdocs_theme_setup' );

function add_image_class($class){
  $class .= ' additional-class';
  return $class;
}

add_filter('get_image_tag_class','add_image_class');
