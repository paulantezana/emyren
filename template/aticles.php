<section class="customAticle-container">
    <header class="customAticle-header">
        <h2 class="customAticle-title">Articulos personalizados</h2>
    </header>
    <div class="customAticle-content" id="customAticle">
        <?php
            $articles = new WP_Query([
                'post_type' => 'producto',  'not_found_rows' => true,
                'update_post_term_cache'    => false, 'post_per_post' => 50,
            ]);
            if($articles->have_posts()):
                while($articles -> have_posts()): $articles -> the_post();?>

            <article class="customAticle">
                <a href="<?php the_permalink(); ?>" class="customAticle__img">
                    <img src="<?php has_post_thumbnail() ? the_post_thumbnail_url() : '';?>" alt="<?php the_title();?>"/>
                </a>
                <div class="customAticle__content">
                    <h3 class="customAticle__title"> <a href="<?php the_permalink(); ?>"><?php the_title();?></a> </h3>
                    <p class="customAticle__text"><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="customAticle__cotizar">Saber mas</a>
                </div>
            </article>
        <?php endwhile; rewind_posts(); endif; ?>
    </div>
</section>