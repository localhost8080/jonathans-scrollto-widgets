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


class jonathans_scrollto_widget extends WP_Widget {

    // constructor
    function __construct()() {
    /* ... */
}

// widget form creation
function form($instance)
{
    /* ... */
}

// widget update
function update($new_instance, $old_instance)
{
    /* ... */
}

// widget display
function widget($args, $instance)
{
    /* ... */
}
}

// register widget
add_action('widgets_init', create_function('', 'return register_widget("jonathans_scrollto_widget");'));