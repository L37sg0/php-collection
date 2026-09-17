<?php

/**
 * Create custom post type for About
 */
if (!function_exists('l37sg0_theme_register_about')) {

    function l37sg0_theme_register_about()
    {
        $labels = [
            'name' => _x('About', 'post type general name'),
            'singular_name' => _x('About Section', 'post type singular name'),
            'menu_name' => _x('About', 'admin menu'),
            'name_admin_bar' => _x('About Section', 'add new on admin bar'),
            'add_new' => _x('Add New', 'l37sg0-about'),
            'add_new_item' => __('Add New About Section'),
            'new_item' => __('New About Section'),
            'edit_item' => __('Edit About Section'),
            'view_item' => __('View About Section'),
            'all_items' => __('All About'),
            'search_items' => __('Search About'),
            'parent_item_colon' => __('Parent About:'),
            'not_found' => __('No about found.'),
            'not_found_in_trash' => __('No about found in Trash.')
        ];

        $args = [
            'menu_icon' => 'dashicons-businessman',
            'labels' => $labels,
            'description' => __('Description.'),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'l37sg0-about'),
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => null,
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt')
        ];

        register_post_type('l37sg0-about', $args);
    }
}
add_action('init', 'l37sg0_theme_register_about');

/**
 * Limit number of About posts to 1
 */
if (!function_exists('l37sg0_theme_limit_about_to_one')) {

    function l37sg0_theme_limit_about_to_one($supports, $post_type)
    {
        if ($post_type == 'l37sg0-about') {
            if (get_posts([
                'post_type' => 'l37sg0-about',
                'posts_per_page' => 1
            ])) {
                $supports['create_posts'] = false;
            }
        }
        return $supports;
    }
}
add_filter('post_type_supports', 'l37sg0_theme_limit_about_to_one', 10, 2);

/**
 * Create default About post
 */
if (!function_exists('l37sg0_theme_create_default_about')) {

    function l37sg0_theme_create_default_about()
    {
        $post_exists = get_posts([
            'post_type' => 'l37sg0-about',
            'post_status' => 'publish',
            'posts_per_page' => 1
        ]);

        if (!$post_exists) {
            $post_id = wp_insert_post([
                'post_title' => 'Default About Section',
                'post_content' => 'This is the default content of the About section. Please put here whatever you need.',
                'post_type' => 'l37sg0-about',
                'post_status' => 'publish'
            ]);
        }
    }
}
add_action('after_switch_theme', 'l37sg0_theme_create_default_about');

/**
 * Hide the Add New button from admin
 */
if (!function_exists('l37sg0_theme_about_hide_add_new')) {

    function l37sg0_theme_about_hide_add_new()
    {
        global $pagenow;

        if ($pagenow == 'edit.php' && isset($_GET['post_type']) && $_GET['post_type'] == 'l37sg0-about') {
            echo '<style>#wpbody-content .page-title-action { display: none; }</style>';
        }
    }
}
add_action('admin_head', 'l37sg0_theme_about_hide_add_new');

/**
 * Redirect to edit if Add New accessed
 */
if (!function_exists('l37sg0_theme_about_redirect_to_edit')) {

    function l37sg0_theme_about_redirect_to_edit()
    {
        global $pagenow;

        if ($pagenow == 'post-new.php' && isset($_GET['post_type']) && $_GET['post_type'] == 'l37sg0-about') {
            $about_posts = get_posts([
                'post_type' => 'l37sg0-about',
                'posts_per_page' => 1
            ]);

            if ($about_posts) {
                wp_redirect(admin_url('post.php?action=edit&post=' . $about_posts[0]->ID));
                exit;
            }
        }
    }
}
add_action('admin_init', 'l37sg0_theme_about_redirect_to_edit');

/**
 * Prevent deletion of the default About post
 */
if (!function_exists('l37sg0_theme_about_prevent_default_deletion')) {
    function l37sg0_theme_about_prevent_default_deletion($post_id)
    {
        $about_posts = get_posts([
            'post_type' => 'l37sg0-about',
            'posts_per_page' => 1
        ]);

        if (!empty($about_posts) && $post_id == $about_posts[0]->ID) {
            wp_die('You cannot delete the default post.');
        }
    }
}
add_action('wp_trash_post', 'l37sg0_theme_about_prevent_default_deletion', 10, 1);

/**
 * Hide "All About" and "Add New" submenus from admin
 */
if (!function_exists('l37sg0_theme_about_hide_submenus')) {
    
    function l37sg0_theme_about_hide_submenus()
    {
        remove_submenu_page('edit.php?post_type=l37sg0-about', 'edit.php?post_type=l37sg0-about');
        remove_submenu_page('edit.php?post_type=l37sg0-about', 'post-new.php?post_type=l37sg0-about');
    }
}
add_action('admin_menu', 'l37sg0_theme_about_hide_submenus');

///**
// * Redirect to edit Default About Post whenever About menu clicked
// */
//if (!function_exists('l37sg0_theme_about_redirect_to_edit_on_menu_click')) {
//
//    function l37sg0_theme_about_redirect_to_edit_on_menu_click()
//    {
////        $screen = get_current_screen();
////        if ($screen->post_type == 'l37sg0-about' && $screen->base == 'post' && !isset($_GET['post'])) {
////            $about_posts = get_posts([
////                'post_type' => 'l37sg0-about',
////                'posts_per_page' => 1
////            ]);
////            error_log(print_r($about_posts, true)); // debug output
////            if (!empty($about_posts)) {
////                wp_redirect(get_edit_post_link($about_posts[0]->ID), 301);
////                exit;
////            }
////        }
//
//        global $pagenow;
//
//        if ($pagenow == 'edit.php' && isset($_GET['post_type']) && $_GET['post_type'] == 'l37sg0-about') {
//            $about_posts = get_posts([
//                'post_type' => 'l37sg0-about',
//                'posts_per_page' => 1
//            ]);
//
//            if (!empty($about_posts)) {
//                wp_redirect(get_edit_post_link($about_posts[0]->ID), 301);
//                exit;
//            }
//        }
//    }
//}
//add_action('admin_menu', 'l37sg0_theme_about_redirect_to_edit_on_menu_click');
////add_action('load-post.php', 'l37sg0_theme_about_redirect_to_edit_on_menu_click');
////add_action('load-post-new.php', 'l37sg0_theme_about_redirect_to_edit_on_menu_click');

///**
// * Redirect to edit Default About Post whenever About menu clicked
// */
//if (!function_exists('l37sg0_theme_about_redirect_to_edit_on_menu_click')) {
//
//    function l37sg0_theme_about_redirect_to_edit_on_menu_click()
//    {
//        $screen = get_current_screen();
//        if ($screen->base == 'edit' && $screen->post_type == 'l37sg0-about') {
//            $about_posts = get_posts([
//                'post_type' => 'l37sg0-about',
//                'posts_per_page' => 1
//            ]);
//
//            if (!empty($about_posts)) {
//                wp_redirect(get_edit_post_link($about_posts[0]->ID), 301);
//                exit;
//            }
//        }
//    }
//}
//add_action('load-post.php', 'l37sg0_theme_about_redirect_to_edit_on_menu_click');
//add_action('load-post-new.php', 'l37sg0_theme_about_redirect_to_edit_on_menu_click');


/**
 * Remove Add New button from About default post editor
 */
if (!function_exists('l37sg0_theme_about_hide_add_new_from_editor')) {

    function l37sg0_theme_about_hide_add_new_from_editor()
    {
        global $pagenow, $post;

        $about_posts = get_posts([
            'post_type' => 'l37sg0-about',
            'posts_per_page' => 1
        ]);

        if (!empty($about_posts)
            && $pagenow == 'post.php'
            && $post->post_type == 'l37sg0-about'
            && $post->ID == $about_posts[0]->ID
        ) {
            echo '<style>#wpbody-content .page-title-action { display: none; }</style>';
        }
    }
}
add_action('admin_head', 'l37sg0_theme_about_hide_add_new_from_editor');