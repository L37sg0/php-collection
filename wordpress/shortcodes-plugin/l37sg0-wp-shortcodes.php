<?php

/**
 * Plugin Name: l37sg0 WordPress Shortcodes
 * Description: This plugin provides the button and code shortcodes.
 * Version: 1.0
 * Author: Petar Ivanov
 * Author URI: https://l37sg0.com
 * Text Domain: shortcodes
 */

function l37sg0_button_shortcode($atts, $content = null) {
    $values = shortcode_atts([
        'url'       => '#',
        'target'    => '_blank',
    ], $atts);

    $url = esc_url($values['url']);
    $target = esc_url($values['target']);

    return "<a href=\"$url\" target=\"$target\" class=\"button\">$content</a>";
}
add_shortcode('button', 'l37sg0_button_shortcode');

function l37sg0_code_shortcode($atts, $content = '') {
    if (empty($content)) return '';

    $atts = shortcode_atts([
        'lang' => ''
    ], $atts);
    extract($atts);

    $replaceRules = [
        "</p>\n<p>" => "\n\n",
        "<p>"       => "",
        "</p>"      => "",
        "<br />"    => "",
        "<?"        => "&lt;?",
        "?>"        => "?&gt;"
    ];
    foreach ($replaceRules as $search => $replace) {
        $content = str_replace($search, $replace, $content);
    }

    $style = "white-space:pre; overflow:auto;";
    $style .= " font:\"Courier New\",Courier,Fixed;";

    if ("php" == $lang) {
        $style .= " background-color:#8BD2FF; color:#FFF; padding:10px;";
    } elseif ("css" == $lang) {
        $style .= " background-color:#DFE0B0; color:#333;";
    } else {
        $style .= " background-color:#EEE; color:#000;";
    }

    return "<pre class='$lang' style='$style'>$content</pre>";
}
add_shortcode('code', 'l37sg0_code_shortcode');