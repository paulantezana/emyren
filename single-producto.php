<?php get_header(); ?>
    <div class="main">
        <div class="main__item">
            <div class="site">
            
                <div class="site__item">
                    <?php 
                    if(have_posts()): while(have_posts()): the_post(); 
                    edit_post_link( __( 'Edit', 'emyren' ), '<div class="post__edit">', '</div>' ); ?>

                        <div class="singleProduct">
                            <div class="singleProduct__thumbnails">
                                <img src="<?php has_post_thumbnail() ? the_post_thumbnail_url() : ''?>" alt="<?php the_title()?>"/>
                            </div>
                            <div class="singleProduct__content"><?php the_content()?></div>
                        </div>

                    <?php 
                    printf('<div class="post__navigation"> <div class="post__navigation__prev">'); previous_post_link();
                    printf('</div><div class="post__navigation__next">'); next_post_link(); printf('</div></div>');
                    endwhile;  rewind_posts(); endif; ?>
                </div>
                <div class="site__item">
                    <?php dynamic_sidebar( 'productos' );?>
                </div>

            </div>
        </div>
        <div class="main__item">
            <section class="contact-container">
                <header class="contact__header">
                    <h1 class="contact__header__title"></h1>
                    <div class="contact__header__subtitle"></div>
                </header>
                <?php require_once get_template_directory() . '/template/contact.php'; ?>
            </section>
        </div>
    </div>
<?php get_footer(); ?>