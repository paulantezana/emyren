<?php
    $articlesHeaderHTML = '
        <div class="customArticles__header">
            <h2 class="%s">%s</h2>
            <p class="%s">%s</p>
        </div>
    ';

    $articlesContentHTML = '
        <article class="customArticles__item product">
            <div class="product__content">
                <div class="product__callToAction">
                    <a class="btn icon-price" href="%s">Cotizar Este Producto</a>
                </div>
                <div class="product__item">
                    <img src="%s" alt="%s"/>
                </div>
                <div class="product__item">
                    <h2>%s</h2>
                    <p>%s</p>
                    <a class="btn" href="%s">saber mas</a>
                </div>
            </div>
        </article>
    ';

    get_header();
    printf('<div class="main">');

        printf('<div class="main__item">');
            require_once get_template_directory() . '/template/led.php';
        printf('</div>');

        printf('<div class="main__item">');
            require_once get_template_directory() . '/template/giganto.php';
        printf('</div>');

        printf('<div class="main__item">');
            printf('<div class="section customArticles">');

                // The Loop Header Post
                printf(
                    $articlesHeaderHTML,
                    'emyren_article_title',
                    get_theme_mod( 'emyren_article_title' ),
                    'emyren_article_description',
                    get_theme_mod( 'emyren_article_description' )
                );
                
                /*
                    ===========================================
                            QUERY AN SHOW PRODUCTS
                    ===========================================
                */
                // The Loop Posts
                if(have_posts()):
                    while(have_posts()): the_post();
                        printf(
                            $articlesContentHTML,
                            get_template_directory_uri() . '/contacto',
                            has_post_thumbnail() ? get_the_post_thumbnail_url() : '',
                            get_the_title(),
                            get_the_title(),
                            get_the_excerpt(),
                            get_the_permalink()
                        );
                    endwhile;
                     rewind_posts();
                else:
                    printf('no hay productos');
                endif;
                // End The Loop Posts

            printf('</div>');
        printf('</div>');
    printf('</div>');
    get_footer();