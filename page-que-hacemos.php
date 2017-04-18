<?php
    $articlesHeaderHTML = '
        <div class="customArticles__header">
            <h2>ARTÍCULOS PERSONALIZADOS</h2>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem atque fuga, temporibus laudantium, corrupti vero repudiandae accusantium explicabo ab accusamus quos, aperiam totam illum fugiat facere officia sapiente quae odio!</p>
        </div>
    ';

    $articlesContentHTML = '
        <article class="customArticles__item product">
            <div class="product__content">
                <div class="product__callToAction">
                    <a class="btn icon-price" href="%s">Cotizar Este Producto</a>
                </div>
                <div class="product__item">
                    <img src="%s" alt="recordatorio"/>
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
            printf('<div class="section customArticles">');

                // The Loop Header Post
                printf($articlesHeaderHTML);
                
                /*
                    ===========================================
                            QUERY AN SHOW PRODUCTS
                    ===========================================
                */
                $products = new WP_Query([
                    'post_type' => 'producto',  'not_found_rows' => true,
                    'update_post_term_cache'    => false, 'post_per_post' => 50,
                ]);


                // The Loop Posts
                if($products -> have_posts()):
                    while($products -> have_posts()):
                        $products -> the_post();
                        printf(
                            $articlesContentHTML,
                            get_template_directory_uri() . '/contacto',
                            has_post_thumbnail() ? get_the_post_thumbnail_url() : '',
                            get_the_title(),
                            get_the_excerpt(),
                            get_the_permalink()
                        );
                    endwhile;
                     rewind_posts();
                else:
                    printf('no hay post');
                endif;
                // End The Loop Posts

            printf('</div>');
        printf('</div>');
    printf('</div>');
    get_footer();