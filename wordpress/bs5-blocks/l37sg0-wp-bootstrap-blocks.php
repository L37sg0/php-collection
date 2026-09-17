<?php
/**
 * Plugin Name: l37sg0 WordPress Bootstrap Blocks
 * Description: Custom Bootstrap 5 blocks
 * TO DO put other things like author etc
 */

const L37SG0_BLOCK_REGISTER = [
    'company-contact' => [
        'handle' => 'l37sg0_company_contact',
        'src' => 'company-contact/block.js',
        'deps' => ['wp-blocks', 'wp-i18n', 'wp-editor'],
        'ver' => true,
        'in_footer' => false
    ],
    'carousel' => [
        'handle' => 'l37sg0_carousel',
        'src' => 'carousel/block.js',
        'deps' => ['wp-blocks', 'wp-i18n', 'wp-editor'],
        'ver' => true,
        'in_footer' => false
    ],
];

function l37sg0_wp_bootstrap_blocks_register() {
    foreach (L37SG0_BLOCK_REGISTER as $block) {
        wp_enqueue_script(
            $block['handle'],
            plugin_dir_url(__FILE__) . $block['src'],
            $block['deps'],
            $block['ver'],
            $block['in_footer']
        );
    }
}
add_action('enqueue_block_editor_assets', 'l37sg0_wp_bootstrap_blocks_register');