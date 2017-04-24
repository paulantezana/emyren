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

        /* ==================================
               SERVICES
            ==================================
        */
        printf('<div class="main__item">');
            require_once get_template_directory() . '/template/services.php';
        printf('</div>');



       /* ==================================
               ARTICLES
            ==================================
        */ 
        printf('<div class="main__item">');
            require_once get_template_directory() . '/template/aticles.php';
        printf('</div>');






        /* ==================================
               CONTACT
            ==================================
        */
        printf('<div class="main__item">');
            $ontactHTML = '
                <header class="contact__header">
                    <h1 class="contact__header__title">%s</h1>
                    <div class="contact__header__subtitle">%s</div>
                </header>
            ';
            printf('<section class="contact-container">');
                require_once get_template_directory() . '/template/contact.php';
            printf('</section>');
        printf('</div>');
        /*  ==================================
                        END
            ==================================
        */
        

    printf('</div>');
    get_footer();