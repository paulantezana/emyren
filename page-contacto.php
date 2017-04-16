<?php
    get_header();


    printf('<div class="main">');
        /* ==================================
               CONTACT
            ==================================
        */
        printf('<section class="main__item">');
            require_once get_template_directory() . '/template/contact.php';
        printf('</section>');

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