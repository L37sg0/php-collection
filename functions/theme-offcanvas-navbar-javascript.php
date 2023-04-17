<?php

/**
 * Register Theme JS
 */
if (!function_exists('l37sg0_theme_offcanvas_navbar_javascript')) {

    function l37sg0_theme_offcanvas_navbar_javascript()
    {
        $themeVersion = wp_get_theme()->get('Version');
        $versionString = is_string($themeVersion) ? $themeVersion : false;

        wp_register_script(
            'l37sg0-theme-offcanvas-navbar-js',
            get_template_directory_uri() . '/assets/js/offcanvas-navbar.js',
            array(),
            $versionString,
            true
        );

        wp_enqueue_script('l37sg0-theme-offcanvas-navbar-js');
    }
}
add_action('wp_enqueue_scripts', 'l37sg0_theme_offcanvas_navbar_javascript');