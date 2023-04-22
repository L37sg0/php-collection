<?php

/**
 * Register Theme JS
 */
if (!function_exists('l37sg0_theme_contact_form_javascript')) {

    function l37sg0_theme_contact_form_javascript()
    {
        $themeVersion = wp_get_theme()->get('Version');
        $versionString = is_string($themeVersion) ? $themeVersion : false;

        wp_register_script(
            'l37sg0-theme-contact-form-js',
            get_template_directory_uri() . '/functions/contact-form/assets/js/l37sg0-contact-form-ajax.js',
            array(),
            $versionString,
            true
        );

        if (is_front_page()) {
            wp_enqueue_script('l37sg0-theme-contact-form-js');
        }
    }
}
add_action('wp_enqueue_scripts', 'l37sg0_theme_contact_form_javascript');