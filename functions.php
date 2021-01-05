<?php
    function alekstutorials_theme_support() {
        // Adds dynamic title tag support
        add_theme_support('title-tag');
        add_theme_support('custom-logo',
            array(
                'flex-height' => true,
                'flex-width' => true
            ));
        add_theme_support('post-thumbnails');
    }
    
    add_action('after_setup_theme', 'alekstutorials_theme_support');

    require get_template_directory().'/inc/customizer.php';
    require get_template_directory().'/inc/project-type.php';

    function alekstutorials_menus() {
        $locations = array (
            'primary' => "Navigation Bar Menu",
        );

        register_nav_menus($locations);
    }

    add_action('init', 'alekstutorials_menus');

    // $version = wp_get_theme()->get( 'Version' );

    function alekstutorials_register_styles() {
        wp_enqueue_style('alekstutorials-style', get_template_directory_uri().'/style.css', array(), '1.0', 'all');
        wp_enqueue_style('alekstutorials-headerstyle', get_template_directory_uri().'/assets/css/header.css', array('alekstutorials-style'), '1.0', 'all');
        wp_enqueue_style('alekstutorials-landingstyle', get_template_directory_uri().'/assets/css/landing.css', array('alekstutorials-style'), '1.0', 'all');
        wp_enqueue_style('alekstutorials-articlestyle', get_template_directory_uri().'/assets/css/article.css', array('alekstutorials-headerstyle'), '1.0', 'all');
        wp_enqueue_style('alekstutorials-syntaxhighlightstyle', get_template_directory_uri().'/assets/css/syntaxhighlight.css', array('alekstutorials-style'), '1.0', 'all');
        wp_enqueue_style('alekstutorials-tutorialsstyle', get_template_directory_uri().'/assets/css/tutorials.css', array('alekstutorials-style'), '1.0', 'all');
        wp_enqueue_style('alekstutorials-projectsstyle', get_template_directory_uri().'/assets/css/projects.css', array('alekstutorials-style'), '1.0', 'all');
    }

    add_action('wp_enqueue_scripts', 'alekstutorials_register_styles');

    function alekstutorials_register_scripts() {
        wp_enqueue_script('alekstutorials-jquery', "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js", array(), '3.5.1', false);
        wp_enqueue_script('alekstutorials-mainscript', get_template_directory_uri().'/assets/js/main.js', array('alekstutorials-jquery'), '1.0', true);
        wp_enqueue_script('alekstutorials-syntaxhighlight', get_template_directory_uri().'/assets/js/prettify.js', '1.0', true);
    }

    add_action( 'wp_enqueue_scripts', 'alekstutorials_register_scripts');
?>