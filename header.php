<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
  <div class="main-wrapper">
      <div class="header__container">
        <div class="header__container__logo">
          <img src="<?php bloginfo('template_url')?>/assets/img/coworking-sintra-logo.svg" alt="" class="header__container__logo-img">
        </div>
        <!-- <div class="header__container__navigation"> -->
          <?php 
          wp_nav_menu(
            array(
              'theme_location' => 'headerMainMenu',
              'menu_class' => 'header__container__navigation-list',
              'container_class' => 'header__container__navigation',
              'menu_id' => 'nav-top'
            )
          );
          ?>
        <!-- </div> -->
      </div>