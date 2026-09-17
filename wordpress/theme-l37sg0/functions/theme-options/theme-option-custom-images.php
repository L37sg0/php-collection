<?php

if (!function_exists('l37sg0_theme_customize_register_custom_images')) {
    
    function l37sg0_theme_customize_register_custom_images($wp_customize)
    {
        $wp_customize->add_section(
            'l37sg0_theme_custom_images',
            [
                'title' => __('Custom Theme Images', 'theme'),
                'description' => __('Change Theme Images.', 'theme'),
                'priority' => 120,
            ]
        );

        /**
         * Settings for desktop header image
         */
        $wp_customize->add_setting(
            'l37sg0_theme_header_image_desktop',
            [
                'sanitize_callback' => 'esc_url_raw',
            ]
        );

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'l37sg0_theme_header_image_desktop',
                [
                    'label' => __('Header Image Desktop', 'theme'),
                    'section' => 'l37sg0_theme_custom_images',
                    'settings' => 'l37sg0_theme_header_image_desktop'
                ]
            )
        );

        /**
         * Settings for mobile header image
         */
        $wp_customize->add_setting(
            'l37sg0_theme_header_image_mobile',
            [
                'sanitize_callback' => 'esc_url_raw',
            ]
        );

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'l37sg0_theme_header_image_mobile',
                [
                    'label' => __('Header Image Mobile', 'theme'),
                    'section' => 'l37sg0_theme_custom_images',
                    'settings' => 'l37sg0_theme_header_image_mobile'
                ]
            )
        );

        /**
         * Settings for api section image
         */
        $wp_customize->add_setting(
            'l37sg0_theme_api_section_image',
            [
                'sanitize_callback' => 'esc_url_raw',
            ]
        );

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'l37sg0_theme_api_section_image',
                [
                    'label' => __('API Section Image', 'theme'),
                    'section' => 'l37sg0_theme_custom_images',
                    'settings' => 'l37sg0_theme_api_section_image'
                ]
            )
        );
    }
}
add_action('customize_register', 'l37sg0_theme_customize_register_custom_images');