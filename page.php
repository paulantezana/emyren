<?php get_header(); ?>
    <div class="main">
        <div class="main__item">
            <div class="site">

                <?php  if(have_posts()): while(have_posts()): the_post(); ?>

                    <h1 class="site__title">        <?php the_title();?>    </h1>
                    <div class="site__content">     <?the_content();?>      </div>

                <?php endwhile; rewind_posts(); endif; ?>

            </div>
        </div>
    </div>
<?php get_footer();