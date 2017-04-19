<?php
    $singleProductHTML = '
        <div class="singleProduct">
            <div class="singleProduct__thumbnails"> <img src="%s" alt="%s"> </div>
            <div class="singleProduct__content">%s</div>
        </div>
     ';
    get_header();
    printf('<div class="main">');
        printf('<div class="main__item">');

            printf('<div class="producto-container">');

                // SHOW POST
                printf('<div class="producto__main">');
                    if(have_posts()):
                        while(have_posts()): the_post();
                            edit_post_link( __( 'Edit', 'fonera' ), '<div class="post__edit">', '</div>' );
                            printf(
                                $singleProductHTML,
                                has_post_thumbnail() ? get_the_post_thumbnail_url() : '',
                                get_the_title(),
                                get_the_content(null, false)
                            );
                            printf('<div class="post__navigation"> <div class="post__navigation__prev">'); previous_post_link();
                            printf('</div><div class="post__navigation__next">'); next_post_link(); printf('</div></div>');
                        endwhile;
                        rewind_posts();
                    endif;
                printf('</div>');
                
                // SIDEBAR POST
                printf('<div class="producto__sidebar">');
                    require_once get_template_directory() . '/template/productos-category.php';
                printf('</div>');
                // 
            printf('</div>');

        printf('</div>');
    printf('</div>');
    get_footer();