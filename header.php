<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Meta -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Load Description and Keywords for SEO -->
    <!-- <meta name="description" content="<?php 
        /*
        if (is_archive('projects')) {
            echo get_theme_mod('setting_meta_description_projects');
        }
        if (is_home()) {
            $custom = get_post_custom();
            if(isset($custom['description'])) {
                echo $custom['description'][0];
            }
        }
 
        if (is_singular('projects')) {
            echo get_the_excerpt();
        } elseif (is_singular('post')) {
            echo get_the_excerpt();
        } elseif (is_singular()) {
            echo "page";
            $custom = get_post_custom();
            if(isset($custom['description'])) {
                echo $custom['description'][0];
            }
        }
        */
    ?>"> -->
    <?php wp_head(); ?>
</head>
<body>