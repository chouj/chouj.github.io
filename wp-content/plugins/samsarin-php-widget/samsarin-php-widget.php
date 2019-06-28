<?php
/*
Plugin Name:    Samsarin PHP Widget
Plugin URI:     http://samsarin.com/samsarin-php-widget
Description:    A text widget with support for including PHP.
Author:         Chris Pettitt
Version:        2.0b1
Author URI:     http://samsarin.com

2.0b1 Add support for WP 2.8, drop support for anything earlier.
1.3.2 Add an options panel to reset all Samsarin PHP widgets.
1.2   Increase max widgets to 25
1.1   Workaround bug widget compatibility bug in WP 2.2
1.0   Initial Release

A text widget with support for including PHP.

Copyright (C) 2007-2009 Chris Pettitt (http://samsarin.com). All rights reserved.

This software is free to use. It may be redistributed provided the
copyright is included. The author provides this software with no warranty and
cannot be held liable for any results occurring from its use or misuse.
*/

class SamsarinPhpWidget extends WP_Widget {
    function SamsarinPhpWidget() {
        $widget_ops = array('classname' => 'samsarin_php_widget', 'description' => 'A text widget with support for including PHP');
        $control_ops = array('width' => 400, 'height' => 350);
        $this->WP_Widget('samsarin_php_widget', 'Samsarin PHP Widget', $widget_ops, $control_ops);
    }

    function widget($args, $instance) {     
        extract($args);

        $title = $instance['title'];

        $body = $instance['body'];
        if (empty($body)) {
            $body = '&nbsp;';
        }

        print $before_widget;

        if (!empty($title)) {
            print $before_title;
            eval(" ?> $title <?php ");
            print $after_title;
        }

        eval(" ?> $body <?php ");
        print $after_widget;
    }

    function update($new_instance, $old_instance) {             
        return $new_instance;
    }

    function form($instance) {              
        $title = $instance['title'];
        $body = $instance['body'];

        $title_id = $this->get_field_id('title');
        $title_name = $this->get_field_name('title');

        $body_id = $this->get_field_id('body');
        $body_name = $this->get_field_name('body');

?>
        <p>
            <label for="<?php echo $title_id; ?>">Title:</label>
            <input class="widefat" id="<?php echo $title_id; ?>" name="<?php echo $title_name; ?>"
                   type="text" value="<?php echo esc_attr($title); ?>"/>
        </p>
        <p>
            <textarea class="widefat" id="<?php echo $body_id; ?>" name="<?php echo $body_name; ?>"
                      rows="16" cols="20"><?php echo htmlspecialchars($body); ?></textarea>
        </p>
<?php 
    }

}

add_action('widgets_init', create_function('', 'return register_widget("SamsarinPhpWidget");'));
