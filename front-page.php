<?php get_header(); ?>

    <div class="background-images">
        <img id="homepage-left-image" src="<?php echo get_theme_mod('pdn_home_left_img_settings'); ?>">
        <img id="homepage-right-image" src="<?php echo get_theme_mod('pdn_home_right_img_settings'); ?>">
    </div>

    <div class="landing-container">
        <?php get_template_part('template-parts/header', 'navigation-bar'); ?>

        <div class="landing-content-container">
            <article class="about-box">
                <?php
                    if (have_posts()) {
                        while(have_posts()) {
                            the_post();
                            the_content();
                        }
                    }
                ?>
            </article>
        </div>
    </div>
    
<?php get_footer(); ?>