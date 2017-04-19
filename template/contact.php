<div class="contact">
    <div class="contact__item">

        <article class="location">
            <h3 class="location__title">UBIQUENOS</h3>
            <ul class="location__list">
                <?php if(get_theme_mod('emyren_adress1')): ?>
                <li class="icon-map-marker emyren_adress1"><?echo get_theme_mod('emyren_adress1')?></li>

                <?php endif;
                    if(get_theme_mod('emyren_adress2')): ?>
                <li class="icon-map-marker emyren_adress2"><?echo get_theme_mod('emyren_adress2')?></li>

                <?php endif;
                    if(get_theme_mod('emyren_adress3')): ?>
                <li class="icon-map-marker emyren_adress3"><?echo get_theme_mod('emyren_adress3')?></li>
                <?php endif;?>
            </ul>
        </article>

        <article class="escuchar">
            <h3 class="escuchar__title">Contacto</h3>
            <ul class="escuchar__list">
                <?php if(get_theme_mod('emyren_telephone1')): ?>
                    <li><a class="icon-phone emyren_telephone1" href="tel:<?echo get_theme_mod('emyren_telephone1')?>"><?echo get_theme_mod('emyren_telephone1')?></a></li>

                <?php endif;
                    if(get_theme_mod('emyren_telephone2')): ?>
                    <li><a class="icon-phone emyren_telephone2" href="tel:<?echo get_theme_mod('emyren_telephone2')?>"><?echo get_theme_mod('emyren_telephone2')?></a></li>

                <?php endif;
                    if(get_theme_mod('emyren_telephone3')): ?>
                    <li><a class="icon-phone emyren_telephone3" href="tel:<?echo get_theme_mod('emyren_telephone3')?>"><?echo get_theme_mod('emyren_telephone3')?></a></li>

                <?php endif;
                    if(get_theme_mod('emyren_email1')): ?>
                    <li><a class="icon-email emyren_email1" href="mailto:<?echo get_theme_mod('emyren_email1')?>"><?echo get_theme_mod('emyren_email1')?></a></li>

                <?php endif;
                if(get_theme_mod('emyren_email2')): ?>
                    <li><a class="icon-email emyren_email2" href="mailto:<?echo get_theme_mod('emyren_email2')?>"><?echo get_theme_mod('emyren_email2')?></a></li>

                <?php endif;
                if(get_theme_mod('emyren_email2')): ?>
                    <li><a class="icon-email emyren_email3" href="mailto:<?echo get_theme_mod('emyren_email3')?>"><?echo get_theme_mod('emyren_email3')?></a></li>
                <?php endif;?>
            </ul>
        </article>

        <article class="socialMedia">
            <h3 class="socialMedia__title">Resdes Sociales</h3>
            <ul class="socialMedia__list">
            <?php 
                $socialMediaHTML = '<li><a class="%s %s" href="%s" target="_black" title="%s"></a></li>';
                $socialMedia = ['youtube','facebook','linkedin','twitter'];

                foreach ($socialMedia as $item ){
                    if(get_theme_mod('emyren_' . $item)):
                        printf(
                            $socialMediaHTML,
                            'icon-' . $item,
                            'emyren_' . $item,
                            get_theme_mod('emyren_' . $item),
                            $item
                        );
                    endif;
                }
            ?>
            </ul>
        </article>

    </div>
    <div class="contact__item contact__form">
        <?php  echo do_shortcode('[contact-form-7 id="52" title="Contact form 1"]'); ?>
    </div>
</div>