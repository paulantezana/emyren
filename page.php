<?php
    $siteHTML = '
        <div class="site">
            <h1 class="site__title">%s</h1>
            <div class="site__content">%s</div>
        </div>
    ';
    get_header();
    printf('<div class="main">');
        printf('<div class="main__item">');
            if(have_posts()):
                while(have_posts()): the_post();
                    printf(
                        $siteHTML,
                        get_the_title(),
                        get_the_content()
                    );
                endwhile;
                rewind_posts();
            endif;
        printf('</div>');
    printf('</div>');
    get_footer();