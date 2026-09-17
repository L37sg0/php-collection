<?php

if (!function_exists('l37sg0_theme_register_projects')) {

    function l37sg0_theme_register_projects()
    {
        $labels = [
            'name' => __('Projects', 'l37sg0_projects'),
            'singular_name' => __('Project', 'l37sg0_projects'),
            'add_new' => __('Add New', 'l37sg0_projects'),
            'add_new_item' => __('Add New Project', 'l37sg0_projects'),
            'edit_item' => __('Edit Projects', 'l37sg0_projects'),
            'new_item' => __('New Project', 'l37sg0_projects'),
            'view_item' => __('View Project', 'l37sg0_projects'),
            'search_items' => __('Search Project', 'l37sg0_projects'),
            'not_found' => __('No Projects Found', 'l37sg0_projects'),
            'not_found_in_trash' => __('No Projects Found in Trash', 'l37sg0_projects'),
            'parent_item_colon' => __('Parent Project:', 'l37sg0_projects'),
            'menu_name' => __('Projects', 'l37sg0_projects'),
        ];

        $args = [
            'menu_icon' => 'dashicons-laptop',
            'labels' => $labels,
            'hierarchical' => true,
            'description' => __('Add your projects here.', 'l37sg0_projects'),
            'supports' => ['title', 'editor', 'thumbnail'],
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

        register_post_type('l37sg0_projects', $args);
    }
}
add_action('init', 'l37sg0_theme_register_projects');