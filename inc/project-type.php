<?php
    function create_project_type() {
        $labels = array(
            'name'                => _x( 'Projects', 'Post Type General Name' ),
            'singular_name'       => _x( 'Project', 'Post Type Singular Name' ),
            'menu_name'           => __( 'Projects' ),
            'parent_item_colon'   => __( 'Parent Project' ),
            'all_items'           => __( 'All Projects' ),
            'view_item'           => __( 'View Project' ),
            'add_new_item'        => __( 'Add New Project' ),
            'add_new'             => __( 'Add New' ),
            'edit_item'           => __( 'Edit Project' ),
            'update_item'         => __( 'Update Project' ),
            'search_items'        => __( 'Search Project' ),
            'not_found'           => __( 'Not Found' ),
            'not_found_in_trash'  => __( 'Not found in Trash' ),
        );

        $args = array(
            'label'               => __( 'projects' ),
            'description'         => __( 'Personal projects and portfolio.' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'thumbnail', 'editor', 'custom-fields', ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
        );

        register_post_type('projects', $args);

    }

    add_action('init', 'create_project_type', 0);
?>