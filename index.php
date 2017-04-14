<?php
    get_header();
    printf('<div class="main">');
        printf('<div class="main__item">');
            echo do_shortcode('[smartslider3 slider=2]');
        printf('</div>');
    printf('</div>');
    get_footer();