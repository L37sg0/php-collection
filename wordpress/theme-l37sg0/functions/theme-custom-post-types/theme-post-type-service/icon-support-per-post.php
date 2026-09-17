<?php

/**
 * Add icon support per each service post
 */

if (!function_exists('l37sg0_add_icon_support_to_services')) {

    function l37sg0_service_icon_callback($post)
    {
        wp_nonce_field(basename(__FILE__), 'l37sg0_service_icon_nonce');

        $icon_value = get_post_meta(
            $post->ID,
            '_l37sg0_service_icon',
            true
        );

        require_once 'icon-support-template.php';
    }

    function l37sg0_add_icon_support_to_services()
    {
        add_meta_box(
            'l37sg0_service_icon',
            'Icon',
            'l37sg0_service_icon_callback',
            'l37sg0_services',
            'side',
            'default',
        );
    }
}
add_action('add_meta_boxes', 'l37sg0_add_icon_support_to_services');

if (!function_exists('l37sg0_save_service_icon')) {

    function l37sg0_save_service_icon($post_id)
    {
        if (
            !isset($_POST['l37sg0_service_icon_nonce'])
            || !wp_verify_nonce($_POST['l37sg0_service_icon_nonce'], basename(__FILE__))
        ) {
            return;
        }

        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
            return;
        }

        if (isset($_POST['post_type']) && 'l37sg0_services' == $_POST['post_type']) {
            if (current_user_can('edit_post', $post_id)) {
                if (isset($_POST['l37sg0_service_icon'])) {
                    update_post_meta(
                        $post_id,
                        '_l37sg0_service_icon',
                        sanitize_text_field($_POST['l37sg0_service_icon'])
                    );
                }
            }
        }
    }
}
add_action('save_post', 'l37sg0_save_service_icon');