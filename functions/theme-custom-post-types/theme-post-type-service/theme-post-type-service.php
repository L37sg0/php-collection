<?php

/**
 * Register custom post type
 */
if (!function_exists('l37sg0_theme_register_services')) {

    function l37sg0_theme_register_services()
    {
        $labels = [
            'name' => __('Services', 'l37sg0_services'),
            'singular_name' => __('Service', 'l37sg0_services'),
            'add_new' => __('Add New', 'l37sg0_services'),
            'add_new_item' => __('Add New Service', 'l37sg0_services'),
            'edit_item' => __('Edit Services', 'l37sg0_services'),
            'new_item' => __('New Service', 'l37sg0_services'),
            'view_item' => __('View Service', 'l37sg0_services'),
            'search_items' => __('Search Service', 'l37sg0_services'),
            'not_found' => __('No Services Found', 'l37sg0_services'),
            'not_found_in_trash' => __('No Services Found in Trash', 'l37sg0_services'),
            'parent_item_colon' => __('Parent Service:', 'l37sg0_services'),
            'menu_name' => __('Services', 'l37sg0_services'),
        ];

        $args = [
            'menu_icon' => 'dashicons-randomize',
            'labels' => $labels,
            'hierarchical' => true,
            'description' => __('Add your services here.', 'l37sg0_services'),
            'supports' => ['title', 'editor'],
            'public' => true,
            'show_ui' => true,
            'show_in_nav_menus' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'has_archive' => true,
            'query_var' => true,
            'can_export' => true,
            'rewrite' => true,
            'capability_type' => 'post'
        ];

        register_post_type('l37sg0_services', $args);
    }
}
add_action('init', 'l37sg0_theme_register_services');