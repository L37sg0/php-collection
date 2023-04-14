<?php
/**
 * Register Theme Admin Styles
 */
if (!function_exists('l37sg0_theme_admin_styles')) {

    function l37sg0_theme_admin_styles()
    {
        $themeVersion = wp_get_theme()->get('Version');
        $versionString = is_string($themeVersion) ? $themeVersion : false;

        wp_register_style(
            'l37sg0-theme-admin-fontawesome',
            get_template_directory_uri() . '/assets/css/fontawesome.all.min.css',
            array(),
            $versionString
        );

        wp_enqueue_style('l37sg0-theme-admin-fontawesome');
    }
}
add_action('admin_enqueue_scripts', 'l37sg0_theme_admin_styles');