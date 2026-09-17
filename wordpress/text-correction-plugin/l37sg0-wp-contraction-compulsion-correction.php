<?php

/**
 * Plugin Name: l37sg0 WordPress Contraction Compulsion Correction
 * Description: This plugin cannot solve your contraction issues,but it can hide them by fixing them on the fly
 * Version: 1.0
 * Author: Petar Ivanov
 * Author URI: https://l37sg0.com
 * Text Domain: contraction
 * Example:
 * * Create a post on your site with this text:
 * Isn't it grand that we'll soon be sailing on the ocean blue?
 * You'll see.
 * We'll have a great time.
 * I can't wait.
 *
 * Activate this plugin and the words the contractions: Isn't, We'll, You'll,
 * I'll and Can’t get replaced with full words (is not, we will, you will, i
 * will, cannot).
 */

//function l37sg0_filter_the_content($content) {
//    $content = "<h1>Test content replacement.</h1>";
//    return $content;
//}
//add_filter('the_content', 'l37sg0_filter_the_content');


function l37sg0_filter_the_content($content) {
    // Convert any HTML entities to characters
    $content = html_entity_decode($content);

    // List of contractions to replace.
    $contractions = [
        "’"         => "'",
        "isn't"     => "is not",
        "we'll"     => "we will",
        "you'll"    => "you will",
        "can't"     => "cannot",
        "i'll"      => "i will",
        "It’s"      => "it is",
        "I’m"       => "i am",
        "Gotham"    => "<span style=\"background-color: pink;\">Gotham</span>"
    ];

    // Loop through both uppercase and lowercase words and replace.
    foreach ($contractions as $search => $replace) {
        $content = str_replace(ucfirst($search), ucfirst($replace), $content);
        $content = str_ireplace($search, $replace, $content);
    }

    // Return updated content
    return $content;
}
add_filter('the_content', 'l37sg0_filter_the_content');