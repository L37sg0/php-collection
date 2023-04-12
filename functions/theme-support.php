<?php

/**
 * Register Theme Support Options
 */
if (!function_exists('l37sg0_theme_support')) {

    function l37sg0_theme_support()
    {
        $features = [
            'title-tag' => [],
            'custom-logo' => [],
            'custom-header' => [],
            'post-thumbnails' => []
        ];
        foreach ($features as $feature => $args) {
            add_theme_support($feature, $args);
        }
    }
}
add_action('after_setup_theme', 'l37sg0_theme_support');