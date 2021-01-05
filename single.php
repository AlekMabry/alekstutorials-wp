<?php get_header(); ?>

    <?php get_template_part('template-parts/header', 'navigation-bar'); ?>

    <div class="body-container">
        <article>
            <h1 style="color: white; text-align: center;"><?php the_title(); ?></h1>
            <div class="article-container">
            <?php
                if (have_posts()) {
                    while(have_posts()) {
                        the_post();
                        
                        get_template_part('template-parts/content', 'article');
                    }
                }
            ?>
            </div>
        </article>
    </div>

<?php get_footer(); ?>