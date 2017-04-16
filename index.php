<?php

    get_header();
    printf('<div class="main">');
        printf('<div class="main__item">');
            echo do_shortcode('[smartslider3 slider=2]');
            // Notices ===============================================
                printf('<section class="notice__container">');
                printf('<h2 class="notice__container__title"> <span>OFERTAS - </span><span>NOTICIAS - </span><span>NOVEDADES</span></h2>');
                printf('<div id="noticeMain" class="notice__main">');
                require_once get_template_directory() . '/template/post.php';
                printf('</div>');
                printf('</section>');
            // ========================================================
        printf('</div>');
    printf('</div>');
    get_footer();