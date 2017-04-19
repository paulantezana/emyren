<?php get_header(); ?>
    <div class="main">
        <div class="main__item">
            <div class="site">
            
                <div class="site__item">
                    <?php 
                        if(have_posts()): while(have_posts()): the_post(); 
                        edit_post_link( __( 'Edit', 'emyren' ), '<div class="post__edit">', '</div>' ); ?>

                        <h1 class="site__title"><?php the_title()?></h1>
                        <div class="site__content"><?php the_content()?></div>

                    <?php 
                    printf('<div class="post__navigation"> <div class="post__navigation__prev">'); previous_post_link();
                    printf('</div><div class="post__navigation__next">'); next_post_link(); printf('</div></div>');
                    endwhile;  rewind_posts(); endif; ?>
                </div>
                <div class="site__item">
                    <?php dynamic_sidebar( 'sidebar' ); ?>
                </div>

            </div>
        </div>
    </div>
<?php get_footer(); ?>