<div class="led-container">
    <section class="led">
        <header class="led__header">
            <h1 class="led__title emyren_led_title"><?php echo get_theme_mod('emyren_led_title'); ?></h1>
        </header>
        <div class="led__main">

            <div class="led__main__item">
                <img src="<?php echo  get_bloginfo( 'template_url' );?>/assets/img/pantalla_led.png" alt="" class="led__main__img">
                <div class="led__main__objet">
                    <iframe class="emyren_led_video" width="560" height="315" src="<?php echo get_theme_mod('emyren_led_video'); ?>" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>

            <div class="led__main__item">
                <p class="emyren_led_content"><?php echo get_theme_mod('emyren_led_content');?></p>
                <a href="<?php echo get_theme_mod('emyren_led_link'); ?>" class="led__readMore emyren_led_link">Saber mas</a>

            </div>
        </div>
    </section>
</div>