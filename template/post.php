<?php
    $noticeHTML = '
        <article class="notice">
            <div class="notice__img">
                <img src="%s" alt="%s"/>
            </div>
            <div class="notice__content">
                <h3 class="notice__title">%s<span>EN SICUANI</span></h3>
                <p>%s</p><a href="%s">Saber mas</a>
            </div>
        </article>
    ';
    if(have_posts()):
        while(have_posts()): the_post();
            printf(
                $noticeHTML,
                has_post_thumbnail() ? get_the_post_thumbnail_url() : get_theme_mod('img_post_default'),
                get_the_title(),
                get_the_title(),
                get_the_excerpt(),
                get_the_permalink()
            );
        endwhile;
        rewind_posts();
    else:
        printf('No hay Noticias');
    endif;