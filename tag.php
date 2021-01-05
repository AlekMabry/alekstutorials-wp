<?php get_header(); ?>

    <?php get_template_part('template-parts/header', 'navigation-bar'); ?>

    <div class="body-container">
        <h1 style="color: white; text-align: center;"><?php echo single_tag_title(); ?> Tutorials</h1>
        <div class="tutorial-options-container">
            <?php get_search_form(); ?>
        </div>

        <div class="tutorial-container">
			<?php
				if (have_posts()) {
					while(have_posts()) {
						the_post();
						
						get_template_part('template-parts/content', 'archive');
					}
				}
			?>
        </div>
	</div>
	
	<?php the_posts_pagination(); ?>

<?php get_footer(); ?>