<div class="giganto-container">
    <section class="giganto">
        <header class="giganto__header">
            <h2 class="giganto__title"><?php echo get_theme_mod('emyren_giganto_title');?></h2>
        </header>
        <div class="giganto__main">
            <div class="giganto__slider" id="giganto__slider">
                <?php for($i = 1; $i<=4; $i++): ?>
                    <img src="<?php echo get_theme_mod("emyren_giganto_{$i}"); ?>" alt="">
                <?php  endfor; ?>
            </div>
            <div class="giganto__footer">
                <article class="giganto__footer__item" >
                    <img src="<?php echo get_theme_mod('emyren_giganto_callPhoto');?>" alt="">
                    <div>
                        <h3 class="emyren_giganto_call"><?php echo get_theme_mod('emyren_giganto_call');?></h3>
                        <p class="emyren_giganto_callContent"><?php echo get_theme_mod('emyren_giganto_callContent');?></p>
                    </div>
                </article>
                <div class="giganto__footer__item">
                    <p class="emyren_giganto_content"><?php echo get_theme_mod( 'emyren_giganto_content') ?></p>
                    <a href="" class="giganto__readMore emyren_giganto_link"><?php echo get_theme_mod( 'emyren_giganto_link') ?></a>
                </div>
            </div>
        </div>
    </section>
</div>