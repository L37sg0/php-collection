<?php
/**
 * Register Theme Offcanvas Navbar Styles
 */
if (!function_exists('l37sg0_theme_offcanvas_navbar_styles')) {

    function l37sg0_theme_offcanvas_navbar_styles()
    {
        $themeVersion = wp_get_theme()->get('Version');
        $versionString = is_string($themeVersion) ? $themeVersion : false;

        wp_register_style(
            'l37sg0-theme-offcanvas-navbar-style',
            get_template_directory_uri() . '/assets/css/offcanvas-navbar.css',
            array(),
            $versionString
        );

        if (strpos($_SERVER['REQUEST_URI'], '/blog') === 0) {
            wp_enqueue_style('l37sg0-theme-offcanvas-navbar-style');
        }
    }
}
add_action('wp_enqueue_scripts', 'l37sg0_theme_offcanvas_navbar_styles');