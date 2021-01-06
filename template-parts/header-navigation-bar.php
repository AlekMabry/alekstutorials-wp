<div class="navigation-container">
    <div class="navigation-bar">
        <!-- Left Navigation Bar Items (For Brand) -->
        <div class="navigation-brand">
            <?php
                if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                }
            ?>
        </div>
        <!-- Right Navigation Bar Items (For Links) -->
        <div class="navigation-items">
            <?php
                /* Expanded Navigation Bar. */
                wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'container' => '',
                        'theme_location' => 'primary',
                        'items_wrap' => '<ul class="expanded-navigation-links">%3$s</ul>'
                    )
                );
            ?>
            <div class="navigation-search-container">
                <button class="navigation-search-button"><img style="height: 1em; border: none;" alt="Search Icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-search.svg"></button>
                <div class="navigation-search-bar">
                    <?php get_search_form(); ?>
                </div>
            </div>
            <button class="hamburger-button">
        </div>
    </div>
</div>
<?php
    /* Hamburger Navigation Bar. */
    wp_nav_menu(
        array(
            'menu' => 'primary',
            'container' => '',
            'theme_location' => 'primary',
            'items_wrap' => '<ul class="hamburger-navigation-links">%3$s</ul>'
        )
    );
?>