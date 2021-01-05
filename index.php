<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */ 
?>

<?php get_header(); ?>

    <?php get_template_part('template-parts/header', 'navigation-bar'); ?>

    <div class="body-container">
        <h1 style="color: white; text-align: center;"><?php single_post_title(); ?></h1>
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