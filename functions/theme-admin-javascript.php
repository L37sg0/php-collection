<?php

/**
 * Register Theme Admin JS
 */
if (!function_exists('l37sg0_theme_admin_javascript')) {

    function l37sg0_theme_admin_javascript()
    {
        $themeVersion = wp_get_theme()->get('Version');
        $versionString = is_string($themeVersion) ? $themeVersion : false;

        wp_register_script('l37sg0-theme-admin-fontawesome-js',
            get_template_directory_uri() . '/assets/js/fontawesome.all.min.js',
            array(),
            $versionString,
            true
        );

        wp_enqueue_script('l37sg0-theme-admin-fontawesome-js');
    }
}
add_action('admin_enqueue_scripts', 'l37sg0_theme_admin_javascript');