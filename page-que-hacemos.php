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
                    <a class="btn" href="">Cotizar Este Producto</a>
                </div>
                <div class="product__item">
                    <img src="/img/recordatorio.png" alt="recordatorio"/>
                </div>
                <div class="product__item">
                    <h2>%s</h2>
                    <p>%s</p>
                    <a class="btn" href="">saber mas</a>
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
                
                // The Loop Posts
                if(have_posts()):
                    while(have_posts()):
                        the_post();
                        printf(
                            $articlesContentHTML,
                            get_the_title(),
                            get_the_excerpt()
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