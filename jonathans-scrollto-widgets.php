<?php

/*
 * Plugin Name: Jonathans Scrollto Widget
 * Plugin URI: https://github.com/localhost8080/jonathans-scrollto-widgets
 * Description: fixed position anchor links on side of page with animated scroll and drag and drop widget for page-builders
 * Version: 1.0
 * Author: jonathan
 * Author URI: https://jonathansblog.co.uk
 * License: GPL2
 */
class jonathans_scrollto_widget extends WP_Widget
{

    /**
     */
    function __construct()
    {
        parent::__construct(false, $name = __('jonathans scrollto widget', 'jonathans_scrollto_widget'));
        // Plugin JS
        wp_enqueue_script('jonathans_scrollto_widget_scripts', plugin_dir_url(__FILE__) . 'jonathans_scrollto_widget_scripts.js');
        // Plugin CSS
        wp_enqueue_style('jonathans_scrollto_widget_style', plugin_dir_url(__FILE__) . 'jonathans_scrollto_widget_style.css');
    }

    /**
     *
     * @param unknown $instance            
     */
    function form($instance)
    {
        // dont need to do anything here
    }

    /**
     * * * @param unknown $new_instance * @param unknown $old_instance
     */
    function update($new_instance, $old_instance)
    {
        // dont have anything to update
    }

    /**
     * * * @param unknown $args * @param unknown $instance
     */
    function widget($args, $instance)
    {
        extract($args);
        $this_widget_id = $this->id;
        echo $before_widget;
        // Display the widget
        echo '<div class="jonathans-scrollto-widget" id="' . $this_widget_id . '">';
        echo '<img src="' . plugin_dir_url(__FILE__) . 'anchor.png' . '">';
        echo '</div>';
        echo $after_widget;
    }
}

add_action('widgets_init', function ()
{
    register_widget('jonathans_scrollto_widget');
});

add_action('siteorigin_panel_enqueue_admin_scripts', 'jonathans_stw_scripts');

function jonathans_stw_scripts()
{
    // Plugin JS
    wp_enqueue_script('jonathans_scrollto_widget_scripts', plugin_dir_url(__FILE__) . 'jonathans_scrollto_widget_scripts.js');
    // Plugin CSS
    wp_enqueue_style('jonathans_scrollto_widget_style', plugin_dir_url(__FILE__) . 'jonathans_scrollto_widget_style.css');
}


