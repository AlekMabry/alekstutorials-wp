<?php
    function alekstutorials_customize_register( $wp_customize ) {
        $wp_customize->add_section('pdn_home_section', array(
            'title' => 'Theme-Specific Features',
            'description'   => 'Update homepage images.'
        ));

        $wp_customize->add_setting('pdn_home_left_img_settings', array(

        ));

        $wp_customize->add_setting('pdn_home_right_img_settings', array(

        ));

        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'pdn_home_left_img_control', array(
            'label' => 'Edit Left Image',
            'settings'  => 'pdn_home_left_img_settings',
            'section'   => 'pdn_home_section'
        ) ));

        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'pdn_home_right_img_control', array(
            'label' => 'Edit Right Image',
            'settings'  => 'pdn_home_right_img_settings',
            'section'   => 'pdn_home_section'
        ) ));

        $wp_customize->add_setting('pdn_home_footer_settings', array(
            'default' => get_bloginfo('name')
        ));

        $wp_customize->add_setting('pdn_home_search_navbar_settings', array(
            'default' => 'Search ...'
        ));

        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pdn_home_footer_control', array(
            'label' => 'Footer Copyright Holder',
            'settings'  => 'pdn_home_footer_settings',
            'section'   => 'pdn_home_section'
        )) );

        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pdn_home_search_navbar_control', array(
            'label' => 'Navigation Bar Search Placeholder',
            'settings'  => 'pdn_home_search_navbar_settings',
            'section'   => 'pdn_home_section'
        )) );
    }

    add_action('customize_register', 'alekstutorials_customize_register');
?>