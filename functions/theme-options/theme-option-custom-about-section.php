<?php

if (!function_exists('l37sg0_theme_customize_register_custom_about_section')) {

    function l37sg0_theme_customize_register_custom_about_section($wp_customize)
    {
        $wp_customize->add_section(
            'l37sg0_theme_custom_about_section',
            [
                'title' => __('Custom About Section', 'theme'),
                'description' => __('Customize the About section text and avatar.', 'theme'),
                'priority' => 140
            ]
        );

        /**
         * Set up the About Section Avatar Image
         */
        $wp_customize->add_setting(
            'l37sg0_theme_about_section_avatar',
            [
                'sanitize_callback' => 'esc_url_raw',
            ]
        );

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'l37sg0_theme_about_section_avatar',
                [
                    'label' => __('About Section Avatar', 'theme'),
                    'section' => 'l37sg0_theme_custom_about_section',
                    'settings' => 'l37sg0_theme_about_section_avatar'
                ]
            )
        );

        /**
         * Set up the About Section Text
         */
        $wp_customize->add_setting(
            'l37sg0_theme_about_section_text',
            [
                'sanitize_callback' => 'wp_kses_post'
            ]
        );

//        $wp_customize->add_control(
//            'l37sg0_theme_about_section_text',
//            [
//                'label' => __('About Section Text', 'theme'),
//                'section' => 'l37sg0_theme_custom_about_section',
//                'type' => 'wp_editor',
//                'settings' => [
//                    'textarea_name' => 'about_section_text',
//                    'textarea_rows' => 20,      // Height of the editor
//                    'teeny' => true,            // "teeny" mode - only basic formatting options
//                    'media_buttons' => false,   // Hide "Add Media" button
//                    'tinymce' => [
//                        'valid_elements' => 'a[href|target],strong,b,em,i,strike,u',
//                        'wpautop' => false
//                    ]                           // Allow only certain HTML tags and attributes in the editor
//                ]
//            ]
//        );
        $wp_customize->add_control(
            'l37sg0_theme_about_section_text',
            [
                'label' => __('About Section Text', 'theme'),
                'section' => 'l37sg0_theme_custom_about_section',
                'type' => 'textarea',
            ]
        );

    }
}
add_action('customize_register', 'l37sg0_theme_customize_register_custom_about_section');