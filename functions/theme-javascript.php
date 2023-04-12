<?php

/**
 * Register Theme JS
 */
if (!function_exists('l37sg0_theme_javascript')) {

    function l37sg0_theme_javascript()
    {
        $themeVersion = wp_get_theme()->get('Version');
        $versionString = is_string($themeVersion) ? $themeVersion : false;

        wp_register_script(
            'l37sg0-bootstrap-js',
            get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js',
            array(),
            $versionString,
            true
        );

        wp_register_script(
            'l37sg0-jquery',
            get_template_directory_uri() . '/assets/js/jquery-3.6.3.min.js',
            array(),
            $versionString,
            true
        );

        wp_enqueue_script('l37sg0-bootstrap-js');
        wp_enqueue_script('l37sg0-jquery');
    }
}
add_action('wp_enqueue_scripts', 'l37sg0_theme_javascript');