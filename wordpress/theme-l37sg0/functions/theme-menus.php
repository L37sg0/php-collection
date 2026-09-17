<?php

/**
 * Register Theme Menus
 */
if (!function_exists('l37sg0_theme_menus')) {

    function l37sg0_theme_menus()
    {
        $locations = [
            'primary' => 'Top Navbar'
        ];
        register_nav_menus($locations);
    }
}
add_action('after_setup_theme', 'l37sg0_theme_menus');
