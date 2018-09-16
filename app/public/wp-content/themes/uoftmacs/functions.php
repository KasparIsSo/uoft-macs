<?php

function uoftmacs_script_enqueue(){

  wp_enqueue_style('baselayout', get_template_directory_uri() . '/css/main.css', array(), '1.0.0', 'all');
  wp_enqueue_script('app', get_template_directory_uri() . '/js/app.js', array(), '1.0.0', true); //js in footer

}

add_action('wp_enqueue_scripts', 'uoftmacs_script_enqueue');

function uoftmacs_theme_setup(){

  add_theme_support('menus');
  add_theme_support('post-thumbnails');
  register_nav_menu('primary', 'Primary Header Navigation');
  register_nav_menu('footer', 'Footer Navigation');

}

add_action('init', 'uoftmacs_theme_setup');
