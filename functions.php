<?php
if (! function_exists('theme1_styles')) :
/**
* Enqueue styles.
* @return void
*/
function theme1_styles() {
// Register theme stylesheet
$theme_version = wp_get_theme()->get('Version');

$version_string = is_string($theme_version) ? $theme_version :false;
wp_register_style(
'theme1-style',
get_template_directory_uri() . '/style.css',
array(),
$version_string
);

// Enqueue theme stylesheet.
wp_enqueue_style('theme1-style');
wp_enqueue_style('theme1-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css", array(), '5.0.2', 'all');
wp_enqueue_style('theme1-font-awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css", array(), '6.1.2', 'all');

}
endif;
add_action('wp_enqueue_scripts', 'theme1_styles');

if (! function_exists('theme1_javascript')) :
/**
* Enqueue javascript.
* @return void
*/
function theme1_javascript() {
wp_enqueue_script('theme1-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js", array(), '5.0.2', true);
wp_enqueue_script('theme1-popper', "https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js", array(), '2.9.2', true);
wp_enqueue_script('theme1-jquery', "https://code.jquery.com/jquery-3.6.0.slim.js", array(), '3.6.0', true);
}
endif;
add_action('wp_enqueue_scripts', 'theme1_javascript');

function theme1_theme_support()
{
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'theme1_theme_support');

function theme1_menus()
{
    $locations = array(
        'primary' => 'Top Navbar'
    );
    register_nav_menus($locations);
}

add_action('after_setup_theme', 'theme1_menus');
/**
 * Register Custom Navigation Walker
 */
function register_navwalker()
{
    if (!file_exists(get_template_directory() . '/class-wp-bootstrap-navwalker.php')) {
        // File does not exist... return an error.
        return new WP_Error('class-wp-bootstrap-navwalker-missing', __('It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker'));
    } else {
        // File exists... require it.
        require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
    }
}

add_action('after_setup_theme', 'register_navwalker');

add_filter('nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3);
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function prefix_bs5_dropdown_data_attribute($atts, $item, $args)
{
    if (is_a($args->walker, 'WP_Bootstrap_Navwalker')) {
        if (array_key_exists('data-toggle', $atts)) {
            unset($atts['data-toggle']);
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}

function slug_provide_walker_instance($args)
{
    if (isset($args['walker']) && is_string($args['walker']) && class_exists($args['walker'])) {
        $args['walker'] = new $args['walker'];
    }
    return $args;
}

add_filter('wp_nav_menu_args', 'slug_provide_walker_instance', 1001);