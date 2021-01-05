<?php get_header(); ?>

    <?php get_template_part('template-parts/header', 'navigation-bar'); ?>

    <div class="body-container">
        <h1 style="color: white; text-align: center;">Projects</h1>

        <div class="project-container">
			<?php
				if (have_posts()) {
					while(have_posts()) {
						the_post();
						
						get_template_part('template-parts/content', 'archive-project');
					}
				}
			?>
        </div>
	</div>
	
	<?php the_posts_pagination(); ?>

<?php get_footer(); ?>