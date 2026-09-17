<?php

/**
 * Plugin Name: l37sg0 WordPress User Widget
 * Description: This plugin provides a widget that shows the name of the logged-in user.
 * Version: 1.0
 * Author: Petar Ivanov
 * Author URI: https://l37sg0.com
 * Text Domain: user-widget
 */

class l37sg0_User_Widget extends WP_Widget
{

    public function __construct()
    {
        $widget_options = array(
            'classname' => 'l37sg0_user_widget',
            'description' => 'This widget shows the name of the logged-in user.',
        );
        parent::__construct('l37sg0_user_widget', 'l37sg0 User Widget', $widget_options);
    }

    /**
     * @param $args
     * @param $instance
     * @return void
     */
    public function widget($args, $instance)
    {
        $message = 'Welcome Guest';
        $user = wp_get_current_user();
        if (isset($user->user_nicename)) {
            $message = "You are logged in as {$user->user_nicename}";
        }

        echo $args['before_widget'];
        echo "<p>$message</p>";
        echo $args['after_widget'];
    }
}

function l37sg0_register_user_widget()
{
    register_widget('l37sg0_User_Widget');
}
add_action('widgets_init', 'l37sg0_register_user_widget');
