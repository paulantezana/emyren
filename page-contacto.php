<?php
    get_header();


    printf('<div class="main">');
        /* ==================================
               CONTACT
            ==================================
        */
        printf('<div class="main__item">');
            printf('<section class="contact-container">');
                $siteContactHTML = '
                    <header class="contact__header">
                        <h1 class="contact__header__title">%s</h1>
                        <div class="contact__header__subtitle">%s</div>
                    </header>
                ';
                if(have_posts()):
                    while(have_posts()) : the_post();
                        printf(
                                $siteContactHTML,
                                get_the_title(),
                                get_the_content()
                        );
                    endwhile;
                    rewind_posts();
                else:
                    echo "";
                endif;
                require_once get_template_directory() . '/template/contact.php';
            printf('</section>');
        printf('</div>');

        /* ==================================
                GOOGLE MAPS
            ==================================
        */
        printf('<div class="main__item">');
            require_once get_template_directory() . '/template/map.php';
        printf('</div>');
        /* ==================================
                END CONTENT PAGE
            ==================================
        */

    printf('</div>');
    get_footer();