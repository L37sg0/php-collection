<?php
/**
 * Register Theme Styles
 */
if (!function_exists('l37sg0_theme_styles')) {

    function l37sg0_theme_styles()
    {
        $themeVersion = wp_get_theme()->get('Version');
        $versionString = is_string($themeVersion) ? $themeVersion : false;

        wp_register_style(
            'l37sg0-theme-style',
            get_template_directory_uri() . '/style.css',
            array(),
            $versionString
        );
        wp_register_style(
            'l37sg0-theme-bootstrap',
            get_template_directory_uri() . '/assets/css/bootstrap.min.css',
            array(),
            $versionString
        );

        wp_enqueue_style('l37sg0-theme-style');
        wp_enqueue_style('l37sg0-theme-bootstrap');
    }
}
add_action('wp_enqueue_scripts', 'l37sg0_theme_styles');