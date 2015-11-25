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
        wp_enqueue_script('jonathans_scrollto_widget_scripts', plugin_dir_url(__FILE__) . 'jonathans_scrollto_widget_scripts.js', array(
            'jquery'
        ), '', true);
        // Plugin CSS
        wp_enqueue_style('prefix-font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css', array(), '4.0.3');
        wp_enqueue_style('jonathans_scrollto_widget_style', plugin_dir_url(__FILE__) . 'jonathans_scrollto_widget_style.css');
    }

    /**
     *
     * @param unknown $instance            
     */
    function form($instance)
    {
        
        // Check values
        if ($instance) {
            $title = esc_attr($instance['title']);
            $text = esc_attr($instance['text']);
            $textarea = esc_textarea($instance['textarea']);
        } else {
            $title = '';
            $text = '';
            $textarea = '';
        }
        ?>
<p>
    <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Widget Title', 'jonathans_scrollto_widget'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
</p>
<?php
    }

    /**
     * * * @param unknown $new_instance * @param unknown $old_instance
     */
    function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        // Fields
        $instance['title'] = strip_tags($new_instance['title']);
        return $instance;
    }

    /**
     * * * @param unknown $args * @param unknown $instance
     */
    function widget($args, $instance)
    {
        extract($args);
        // these are the widget options
        if (! empty($instance['title'])) {
            $title = $instance['title'];
        }
        // Display the widget
        echo '<div class="jonathans-scrollto-widget">';
        // echo '<img src="' . plugin_dir_url(__FILE__) . 'anchor.png' . '">';
        echo '<span class="fa fa-chevron-down"></span>';
        if (! empty($title)) {
            echo '<span class="jonathans-scrollto-widget-title">' . $title . '</span>';
        }
        echo '</div>';
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
    wp_enqueue_script('jonathans_scrollto_widget_scripts', plugin_dir_url(__FILE__) . 'jonathans_scrollto_widget_scripts.js', array(
        'jquery'
    ), '', true);
    // Plugin CSS
    wp_enqueue_style('prefix-font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css', array(), '4.0.3');
    wp_enqueue_style('jonathans_scrollto_widget_style', plugin_dir_url(__FILE__) . 'jonathans_scrollto_widget_style.css');
}


