<?php

if (!function_exists('l37sg0_theme_custom_post_permalink_structure')) {

    function l37sg0_theme_custom_post_permalink_structure()
    {
        add_permastruct('category_post', 'blog/%category%/%postname%', true, 1);
    }
}
add_action('init', 'l37sg0_theme_custom_post_permalink_structure');


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