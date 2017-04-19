<?php
    get_header();
    printf('<div class="main">');
        printf('<div class="main__item">');
            printf('<div class="error404">');
                _e( '¡Vaya! Esa página no se puede encontrar.', 'emyren' );
            printf('</div>');
        printf('</div>');
    printf('</div>');
    get_footer();