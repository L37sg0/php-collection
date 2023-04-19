<?php

//if (!function_exists('l37sg0_theme_custom_post_permalink_structure')) {
//
//    function l37sg0_theme_custom_post_permalink_structure()
//    {
////        add_permastruct('category_post', '/blog/%category%/%postname%', true, 1);
//        $default_permalink_structure = get_option('permalink_structure');
//
//        switch ($default_permalink_structure) {
//            case '':
//            case '/%postname%/':
//                $new_permalink_structure = '/blog/%category%/%postname%';
//                add_rewrite_tag('%category%', '([^/]+)', 'category_name=');
//                break;
//            case '/blog/%category%/%postname%/':
//                // Permalink structure is already set to the desired format
//                return;
//            default:
//                // Prompt the user to change the permalink structure
//                echo 'Please update your permalink structure to "/blog/%category%/%postname%".';
//                return;
//        }
//
//        add_permastruct('category_post', $new_permalink_structure, true, 1);
//    }
//}
//add_action('init', 'l37sg0_theme_custom_post_permalink_structure');


if (!function_exists('l37sg0_theme_permalink_prompt')) {

    function l37sg0_theme_permalink_prompt()
    {
        $permalink_structure = get_option('permalink_structure');
        if ($permalink_structure != '/blog/%category%/%postname%/') {
            ?>
            <div class="notice notice-error is-dismissible">
                <h1>
                    <?php _e('Your permalink structure is not properly set. 
                For proper functioning of the theme, please change it to "Custom Structure"
                 and set it to "/blog/%category%/%postname%/"', 'l37sg0-theme'); ?>
                </h1>
            </div>
            <?php
        }
    }
}
add_action('admin_notices', 'l37sg0_theme_permalink_prompt');


if (!function_exists('l37sg0_theme_custom_post_permalink')) {

    function l37sg0_theme_custom_post_permalink($permalink, $post, $leavename)
    {
        if ($post->post_type == 'post' && !empty(get_the_category())) {
            $permalink = str_replace('%category%', get_the_category()[0]->slug, $permalink);
        }

        return $permalink;
    }
}
add_filter('post_link', 'l37sg0_theme_custom_post_permalink', 10, 3);