<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' )?>"/>
    <title><?php bloginfo( 'name' );?></title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <script src="/js/jquery-1.12.0.min.js"></script>
    <script src="/js/slick.min.js"></script>

    <link rel="stylesheet" href="/font/styles.css"/>
    <link rel="stylesheet" href="/css/slick.css"/>
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() );?>/assets/css/styles.css"/>
    <!--    <link href="https://file.myfontastic.com/jbux6iiLbWoiRtTsucb6KQ/icons.css" rel="stylesheet">-->
    <?php wp_head() ?>
  </head>
  <body>
    <header class="header">

      <div class="header__item">
        <div class="header__item__content">
          <div class="header__contact">
              <a class="icon-whatsapp emyren_telephone1" href="tel:<?echo get_theme_mod('emyren_telephone1')?>"><?echo get_theme_mod('emyren_telephone1')?> </a>
              <span>|</span><a class="emyren_telephone2" href="tel:<?echo get_theme_mod('emyren_telephone2')?>"><?echo get_theme_mod('emyren_telephone2')?></a>
              <a class="email icon-email emyren_email1" href="mailto:c<?echo get_theme_mod('emyren_email1')?>"><?echo get_theme_mod('emyren_email1')?></a>
          </div>
        </div>
      </div>
      <div class="header__item">
        <div class="header__item__content">
          <div class="header__logo">
            <object>
              <embed src="<?php echo get_theme_mod('emyren_logo') ?>"/>
            </object>
          </div>
          <div class="header__menu">
            <div class="menu-nav__container">
              <?php
                  $args = [
                    'theme_location'  => 'menu_principal',
                    'container'       => 'nav',
                    'container_class' => 'menu-nav',
                    'menu_class'      => 'main-menu',
                    'menu_id'        => 'main-menu'
                  ];
                  wp_nav_menu($args);
              ?>
            </div>
          </div>
        </div>
      </div>
    </header>