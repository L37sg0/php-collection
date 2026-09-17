<?php

/**
 * Plugin Name: l37sg0 Text Widget
 * Description: This plugin provides a basic Text Widget clone complete with widget options
 * Version: 1.0
 * Author: Petar Ivanov
 * Author URI: https://l37sg0.com
 * Text Domain: text-widget
 */

class l37sg0_Text_Widget extends WP_Widget
{
    public function __construct()
    {
        $id_base = 'l37sgo_text_widget';
        $name = 'l37sg0 Text Widget';
        $widget_options = [
            'className' => 'l37sg0_text_widget',
            'description' => 'This widget is a clone of the Text Widget'
        ];
        $control_options = [
            'width' => 400
        ];
        parent::__construct($id_base, $name, $widget_options, $control_options);
    }

    /**
     * @param $instance
     * @return string|void
     */
    public function form($instance)
    {
        $instance = wp_parse_args($instance, [
            'title' => '',
            'text'  => ''
        ]);
        extract($instance);

        require_once __DIR__ . '/form.php';
    }

    /**
     * @param $new_instance
     * @param $old_instance
     * @return array
     */
    public function update($new_instance, $old_instance)
    {
        $instance = [
            'title' => strip_tags($new_instance['title']),
            'text'  => $new_instance['text']
        ];

        return $instance;
    }

    /**
     * @param $args
     * @param $instance
     * @return void
     */
    public function widget($args, $instance)
    {
        extract($args);
        extract($instance);
        $title = apply_filters('widget_title', $title, $instance, $this->id_base);

        echo $before_widget;
        if (!empty($title)) {
            echo $before_title . $title . $after_title;
        }
        echo $text;
        echo $after_widget;
    }
}

function l37sg0_register_text_widget()
{
    register_widget('l37sg0_Text_Widget');
}
add_action('widgets_init', 'l37sg0_register_text_widget');
