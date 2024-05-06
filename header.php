<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="main-wrapper">
      <div class="header__container">
        <nav class="header__navigation">
          <div class="header__navigation__logo">
            <img src="<?php bloginfo('template_url')?>/assets/img/coworking-sintra-logo.svg" alt="" class="header__navigation__logo-img">
          </div>
          <!-- <div class="header__container__navigation"> -->
            <?php 
            wp_nav_menu(
              array(
                'theme_location' => 'headerMainMenu',
                'menu_class' => 'header__navigation__menu-list',
                'container_class' => 'header__navigation__menu',
                'menu_id' => 'nav-top'
              )
            );
            ?>
            <div class="header__hamburger"> 
              <div class="hamburger header__hamburger-one"></div>
              <div class="hamburger header__hamburger-two"></div>
              <div class="hamburger header__hamburger-three"></div>
            </div>
          <!-- </div> -->
        </nav>
      </div>