<?php
/*
Plugin Name: Widget_Random_Link
Plugin URI: http://zeuscn.net/
Description: add Random Link Widget in your sidebar
Version: 1.0
Author: zEUS. Tong
Author URI: http://zeuscn.net/
*/

function widget_rand_link_hook() {
function widget_rand_link($args) {
extract($args);
?>
<?php echo $before_widget; ?>
<?php echo $before_title . '随机友链' . $after_title; ?>
			<ul>
				<?php get_links(-1, '<li>', '</li>',0,0, 'rand', 0, 0, 10, 0); ?> 
			</ul>
<?php echo $after_widget; ?>
<?php
}
register_sidebar_widget('Widget_Rand_Link', 'widget_rand_link');
}
add_action('plugins_loaded', 'widget_rand_link_hook');
?>