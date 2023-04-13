<?php

const L37SG0_THEME_SOCIAL_LINKS = [
    'facebook' => 'Facebook',
    'twitter' => 'Twitter',
    'linkedin' => 'LinkedIn',
    'github' => 'Github'
];

if (!function_exists('l37sg0_theme_customize_register_custom_social_links')) {

    function l37sg0_theme_customize_register_custom_social_links($wp_customize)
    {
        $wp_customize->add_section(
            'l37sg0_theme_custom_social_links',
            [
                'title' => __('Custom Social Links', 'theme'),
                'description' => __('Add Custom Social Links to Theme.', 'theme'),
                'priority' => 130
            ]
        );

        foreach (L37SG0_THEME_SOCIAL_LINKS as $key => $label) {
            $wp_customize->add_setting(
                'l37sg0_theme_' . $key . '_link',
                [
                    'sanitize_callback' => 'esc_url_raw'
                ]
            );

            $wp_customize->add_control(
                'l37sg0_theme_' . $key . '_link',
                [
                    'label' => __($label . ' Link', 'theme'),
                    'section' => 'l37sg0_theme_custom_social_links',
                    'type'  => 'text'
                ]
            );
        }
    }
}
add_action('customize_register', 'l37sg0_theme_customize_register_custom_social_links');