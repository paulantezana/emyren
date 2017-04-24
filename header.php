
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' )?>"/>
    <title><?php bloginfo( 'name' );?></title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
      .preloading-container{position:fixed;top:0;left:0;height:100vh;width:100%;display:-ms-flexbox;display:flex;-ms-flex-pack:center;justify-content:center;-ms-flex-align:center;align-items:center;overflow:hidden;transition:all 1s;z-index:1}.preloading-container:after,.preloading-container:before{position:absolute;z-index:2;content:"";background:#fe599b;width:50%;height:100vh;top:0;transition:all 1s}.preloading-container:before{left:0}.preloading-container:after{right:0}.preloading p{font-size:3rem;color:#fff;position:relative;z-index:3}.removePreloading:before{left:-100%}.removePreloading:after{right:-100%}
    </style>
    <meta name="description" content="<?php bloginfo( 'description' ); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="https://file.myfontastic.com/jbux6iiLbWoiRtTsucb6KQ/icons.css" rel="stylesheet">
    <?php wp_head() ?>
  </head>
  <body <?php body_class(); ?>>
    <div class="preloading-container" id="preloadingContainer">
      <div class="preloading" >
        <p>EMYREN.COM</p>
      </div>
    </div>
    <script>
        var preContainer = document.getElementById('preloadingContainer');
        addEventListener('load',()=>{
            preContainer.classList.add('removePreloading');
            setTimeout(()=>{
                preContainer.remove();
            },300);
        });
    </script>
    <header class="header">
      <div class="header__item">
        <div class="header__item__content">
          <div class="header__contact">
              <a class="icon-whatsapp emyren_telephone1" href="tel:<?echo get_theme_mod('emyren_telephone1')?>"><?echo get_theme_mod('emyren_telephone1')?> </a>
              <span>|</span><a class="emyren_telephone2" href="tel:<?echo get_theme_mod('emyren_telephone2')?>"><?echo get_theme_mod('emyren_telephone2')?></a>
              <a class="email icon-email emyren_email1" href="mailto:<?echo get_theme_mod('emyren_email1')?>"><?echo get_theme_mod('emyren_email1')?></a>
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