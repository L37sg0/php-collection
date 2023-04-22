<?php

if (!function_exists('l37sg0_theme_register_messages')) {

    function l37sg0_theme_register_messages()
    {
        $labels = [
            'name' => __('Messages', 'l37sg0_contact_msgs'),
            'singular_name' => __('Message', 'l37sg0_contact_msgs'),
            'add_new' => __('Add New', 'l37sg0_contact_msgs'),
            'add_new_item' => __('Add New Message', 'l37sg0_contact_msgs'),
            'edit_item' => __('Edit Messages', 'l37sg0_contact_msgs'),
            'new_item' => __('New Message', 'l37sg0_contact_msgs'),
            'view_item' => __('View Message', 'l37sg0_contact_msgs'),
            'search_items' => __('Search Message', 'l37sg0_contact_msgs'),
            'not_found' => __('No Messages Found', 'l37sg0_contact_msgs'),
            'not_found_in_trash' => __('No Messages Found in Trash', 'l37sg0_contact_msgs'),
            'parent_item_colon' => __('Parent Message:', 'l37sg0_contact_msgs'),
            'menu_name' => __('Messages', 'l37sg0_contact_msgs'),
        ];

        $args = [
            'menu_icon' => 'dashicons-email',
            'labels' => $labels,
            'hierarchical' => true,
            'description' => __('Messages from contact form appear here.', 'l37sg0_contact_msgs'),
            'supports' => ['title', 'editor', 'comments'],
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

        register_post_type('l37sg0_contact_msgs', $args);

    }
}
add_action('init', 'l37sg0_theme_register_messages');