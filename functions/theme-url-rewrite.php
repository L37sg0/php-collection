<?php

function l37sg0_theme_rewrite_flush()
{
    flush_rewrite_rules();
}

add_action('after_switch_theme', 'l37sg0_theme_rewrite_flush');

if (!function_exists('l37sg0_blog_rewrite_rule')) {

    function l37sg0_blog_rewrite_rule()
    {
        add_rewrite_rule(
            'blog/([^/]*)/page/([0-9]+)?',
            'index.php?category_name=$matches[1]&paged=$matches[2]',
            'top'
        );
    }
}
add_action('init', 'l37sg0_blog_rewrite_rule', 10, 0);
