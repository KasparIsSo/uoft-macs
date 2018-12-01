<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>University of Toronto - Mediterranean Archaeology Collaborative Specialization</title>
  <?php wp_head(); ?>
</head>
<body>
  <div class = "nav">
    <div class = "nav__background-container">
      <div class = "nav__container grid-container">
        <img class = "nav__background" src = "<?php bloginfo('stylesheet_directory'); ?>/assets/logos/nav-background.jpg">
      </div>
    </div>
    <div class = "nav__container grid-container">
      <div class = "nav__logo-container">
        <a href = "<?php echo home_url()?>"><img class = "nav__logo" src="<?php bloginfo('stylesheet_directory'); ?>/assets/logos/uoft-logo.png"></a>
      </div>
      <div class = "nav__wordmark">
        <h2 class = "nav__wordmark-text">Mediterranean Archaeology<br>Collaborative Specialization Program</h2>
        <h2 class = "nav__wordmark-text--mobile">MACS</h2>
      </div>
      <div class = "mobile-menu__container">
        <div class ="mobile-menu">
          <span class = "mobile-menu__bar mobile-menu__bar--top"></span>
          <span class = "mobile-menu__bar mobile-menu__bar--middle"></span>
          <span class = "mobile-menu__bar mobile-menu__bar--bottom"></span>
        </div>
      </div>
      <?php wp_nav_menu(array(
        'theme_location'=>'primary-mobile', 
        'container_class'=>'mobile-menu__popout', 
        'menu_class'=>'mobile-menu__list'))
      ?>
      <?php wp_nav_menu(array(
        'theme_location'=>'primary', 
        'container_class'=>'nav__menu', 
        'menu_class'=>'nav__menu-list'))
      ?>
    </div>
  </div>