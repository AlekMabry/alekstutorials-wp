<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">

    <input type="search" id="navigation-search-field" class="search-field" placeholder="<?php echo get_theme_mod('pdn_home_search_navbar_settings'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
    
	<button type="submit" class="search-submit"></button>
</form>