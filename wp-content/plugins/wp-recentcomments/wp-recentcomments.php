<?php
/*
Plugin Name: WP-RecentComments
Plugin URI: http://www.neoease.com/plugins/
Description: Show the recent comments in your WordPress sidebar.
Version: 2.2.7
Author: mg12
Author URI: http://www.neoease.com/
*/

/* core functions */
/* ------------------------------------------------------------ */
include ('core.php');
/* ------------------------------------------------------------ */
/* core functions */

/* l10n */
/* ------------------------------------------------------------ */
load_plugin_textdomain('wp-recentcomments', '/wp-content/plugins/wp-recentcomments/languages/');
/* ------------------------------------------------------------ */
/* l10n */

/* widget */
/* ------------------------------------------------------------ */
/**
 * Display the wrap of recent comment list.
 */
function wp_recentcomments() {
	echo get_wp_recentcomments();
}

/**
 * Retrieve the wrap of recent comment list.
 */
function get_wp_recentcomments() {
	$loading_text = __('Loading', 'wp-recentcomments');
	$html = '<li class="rc-navi rc-clearfix"><span class="rc-loading">' . __('Loading', 'wp-recentcomments') . '...</span></li>';
	$html .= '<li id="rc-comment-temp" class="rc-item rc-comment rc-clearfix"><div class="rc-info"></div><div class="rc-timestamp"></div><div class="rc-excerpt"></div></li>';
	$html .= '<li id="rc-ping-temp" class="rc-item rc-ping rc-clearfix"><span class="rc-label"></span></li>';

	return $html;
}

/**
 * Define widget.
 */
function wp_widget_recentcomments($args) {
	if ( '%BEG_OF_TITLE%' != $args['before_title'] ) {
		if ( $output = wp_cache_get('widget_recentcomments', 'widget') ) {
			return print($output);
		}
		ob_start();
	}

	extract($args);
	$options = get_option('widget_recentcomments');
	$title = empty($options['title']) ? __('Recent Comments', 'wp-recentcomments') : $options['title'];

	echo $before_widget;
	echo $before_title . $title . $after_title;
	echo '<ul>';
	wp_recentcomments();
	echo '</ul>';
	echo $after_widget;

	if ( '%BEG_OF_TITLE%' != $args['before_title'] ) {
		wp_cache_add('widget_recentcomments', ob_get_flush(), 'widget');
	}
}

/**
 * Clear cache.
 */
function wp_delete_recentcomments_cache() {
	wp_cache_delete( 'widget_recentcomments', 'widget' );
}
add_action( 'comment_post', 'wp_delete_recentcomments_cache' );
add_action( 'wp_set_comment_status', 'wp_delete_recentcomments_cache' );

/**
 * Widget options.
 */
function wp_widget_recentcomments_control() {

	// Retrieve the options.
	$options = $newOptions = get_option('widget_recentcomments');

	// Default options.
	if (!is_array($options)) {
		$options['title'] = '';
	}

	// Override the defaults.
	if ( $_POST["recentcomments-submit"] ) {
		$newOptions['title'] = strip_tags(stripslashes($_POST["recentcomments-title"]));

		$options = $newOptions;
		update_option('widget_recentcomments', $options);
		wp_delete_recentcomments_cache();
	}

	// Final options.
	$title = attribute_escape($options['title']);

	// Display on WordPress Widgets page.
?>
	<p>
		<label for="recentcomments-title">
			<?php _e('Title: ', 'wp-recentcomments'); ?>
			<input class="widefat" id="recentcomments-title" name="recentcomments-title" type="text" value="<?php echo $title; ?>" />
		</label>
	</p>

	<input type="hidden" id="recentcomments-submit" name="recentcomments-submit" value="1" />
<?php
}

/**
 * Widget initialization.
 */
function wp_widgets_recentcomments_init() {
	if ( !is_blog_installed() ) {
		return;
	}

	$widget_ops = array('classname' => 'widget_recentcomments', 'description' => __("The most recent comments", 'wp-recentcomments') );
	wp_register_sidebar_widget('recentcomments', __('WP-RecentComments', 'wp-recentcomments'), 'wp_widget_recentcomments', $widget_ops);
	wp_register_widget_control('recentcomments', __('WP-RecentComments', 'wp-recentcomments'), 'wp_widget_recentcomments_control' );
}
add_action('widgets_init', 'wp_widgets_recentcomments_init');
/* ------------------------------------------------------------ */
/* widget */

/* options */
/* ------------------------------------------------------------ */
class WPRecentCommentsOptions {

	function getOptions() {
		$options = get_option('wp_recentcomments_options');
		if (!is_array($options)) {
			$options['use_css']			= true;
			$options['js_type']			= 'normal';
			$options['jquery_url']		= '';

			$options['limit']			= 5;
			$options['length']			= 50;
			$options['post']			= true;
			$options['ping']			= true;
			$options['avatar']			= true;
			$options['avatar_size']		= 32;
			$options['avatar_position']	= 'left';
			$options['navi']			= true;
			$options['admin']			= true;
			$options['smilies']			= true;
			$options['content']			= true;
			$options['external']		= true;
			$options['timestamp']		= false;

			update_option('wp_recentcomments_options', $options);
		}
		return $options;
	}

	function add() {
		if(isset($_POST['wp_recentcomments_save'])) {
			$options = WPRecentCommentsOptions::getOptions();

			// use_css
			if(!$_POST['use_css']) {
				$options['use_css'] = (bool)false;
			} else {
				$options['use_css'] = (bool)true;
			}

			// js_type
			$options['js_type'] = $_POST['js_type'];

			// jquery_url
			$options['jquery_url'] = stripslashes($_POST['jquery_url']);

			// limit (1-20)
			$options['limit'] = (int)$_POST['limit'];
			if($options['limit'] < 1) {
				$options['limit'] = 1;
			} else if($options['limit'] > 20) {
				$options['limit'] = 20;
			}

			// length (10-200)
			$options['length'] = (int)$_POST['length'];
			if($options['length'] < 10) {
				$options['length'] = 10;
			} else if($options['length'] > 200) {
				$options['length'] = 200;
			}

			// post
			if(!$_POST['post']) {
				$options['post'] = (bool)false;
			} else {
				$options['post'] = (bool)true;
			}

			// ping
			if(!$_POST['ping']) {
				$options['ping'] = (bool)false;
			} else {
				$options['ping'] = (bool)true;
			}

			// avatar
			if(!$_POST['avatar']) {
				$options['avatar'] = (bool)false;
			} else {
				$options['avatar'] = (bool)true;
			}

			// avatar_size
			$options['avatar_size'] = (int)$_POST['avatar_size'];

			// avatar_position
			$options['avatar_position'] = $_POST['avatar_position'];

			// navi
			if(!$_POST['navi']) {
				$options['navi'] = (bool)false;
			} else {
				$options['navi'] = (bool)true;
			}

			// admin
			if(!$_POST['admin']) {
				$options['admin'] = (bool)false;
			} else {
				$options['admin'] = (bool)true;
			}

			// smilies
			if(!$_POST['smilies']) {
				$options['smilies'] = (bool)false;
			} else {
				$options['smilies'] = (bool)true;
			}

			// content
			if(!$_POST['content']) {
				$options['content'] = (bool)false;
			} else {
				$options['content'] = (bool)true;
			}

			// external
			if(!$_POST['external']) {
				$options['external'] = (bool)false;
			} else {
				$options['external'] = (bool)true;
			}

			// timestamp
			if($_POST['timestamp']) {
				$options['timestamp'] = (bool)true;
			} else {
				$options['timestamp'] = (bool)false;
			}

			update_option('wp_recentcomments_options', $options);

		} else {
			WPRecentCommentsOptions::getOptions();
		}

		add_options_page(__('WP-RecentComments', 'wp-recentcomments'), __('WP-RecentComments', 'wp-recentcomments'), 10, basename(__FILE__), array('WPRecentCommentsOptions', 'display'));
	}

	function display() {
		$options = WPRecentCommentsOptions::getOptions();
?>

<div class="wrap">
	<div class="icon32" id="icon-options-general"><br /></div>
	<h2><?php _e('WP-RecentComments Options', 'wp-recentcomments'); ?></h2>

	<?php if(!empty($_POST)) : ?>
		<div class='updated fade'><p><?php _e('Settings <strong>saved</strong>.', 'wp-recentcomments'); ?></p></div>
	<?php endif; ?>

	<div id="poststuff" class="has-right-sidebar">
		<div class="inner-sidebar">
			<div id="donate" class="postbox" style="border:2px solid #080;">
				<h3 class="hndle" style="color:#080;cursor:default;"><?php _e('Donation', 'wp-recentcomments'); ?></h3>
				<div class="inside">
					<p><?php _e('If you like this plugin, please donate to support development and maintenance!', 'wp-recentcomments'); ?></p>

					<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<div>
							<input type="hidden" name="cmd" value="_s-xclick" />
							<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----" />
							<input style="border:none;" type="image" src="https://www.paypal.com/en_GB/i/btn/btn_donate_LG.gif" name="submit" alt="" />
							<img alt="" src="https://www.paypal.com/zh_XC/i/scr/pixel.gif" style="height:1px;width:1px;" />
						</div>
					</form>
				</div>
			</div>

			<div class="postbox">
				<h3 class="hndle" style="cursor:default;"><?php _e('About Author', 'wp-recentcomments'); ?></h3>
				<div class="inside">
					<ul>
						<li><a href="http://www.neoease.com/"><?php _e('Author Blog', 'wp-recentcomments'); ?></a></li>
						<li><a href="http://www.neoease.com/plugins/"><?php _e('More Plugins', 'wp-recentcomments'); ?></a></li>
					</ul>
				</div>					
			</div>
		</div>

		<div id="post-body">
			<div id="post-body-content">

<form action="#" method="POST" enctype="multipart/form-data" name="wp_recentcomments_form">
		<table class="form-table">
			<tbody>

				<tr valign="top">
					<th scope="row"><?php _e('CSS', 'wp-recentcomments'); ?></th>
					<td>
						<label>
							<input name="use_css" type="checkbox" <?php if($options['use_css']) echo 'checked="checked"'; ?> />
							 <?php _e('Use wp-recentcomments.css.', 'wp-recentcomments'); ?>
						</label>
					</td>
				</tr>

				<tr valign="top">
					<th scope="row"><?php _e('JavaScript Library', 'wp-recentcomments'); ?></th>
					<td>
						<label style="margin-right:20px;">
							<input name="js_type" type="radio" value="normal" <?php if($options['js_type'] != 'custom_jquery' && $options['js_type'] != 'wp_jquery') echo "checked='checked'"; ?> />
							 <?php _e('Use normal JavaScript library that is supported by this plugin.', 'wp-recentcomments'); ?>
						</label>
						<br />
						<label>
							<input name="js_type" type="radio" value="wp_jquery" <?php if($options['js_type'] == 'wp_jquery') echo "checked='checked'"; ?> />
							 <?php _e('Use jQuery library that is supported by WordPress.', 'wp-recentcomments'); ?>
						</label>
						<br />
						<label>
							<input name="js_type" type="radio" value="custom_jquery" <?php if($options['js_type'] == 'custom_jquery') echo "checked='checked'"; ?> />
							 <?php _e('Custom jQuery.', 'wp-recentcomments'); ?>
						</label>
						 <label>
							<?php _e('Please input the URL of jQuery:', 'wp-recentcomments'); ?>
							 <input type="text" name="jquery_url" class="regular-text code" value="<?php echo($options['jquery_url']); ?>" />
						</label>
					</td>
				</tr>

				<tr valign="top">
					<th scope="row"><?php _e('Comment List', 'wp-recentcomments'); ?></th>
					<td>
						<input type="text" name="limit" class="small-text" value="<?php echo($options['limit']); ?>">
						 <?php _e('comments per page.', 'wp-recentcomments'); ?>

						 <br />
						<label>
							<input name="admin" type="checkbox" <?php if($options['admin']) echo 'checked="checked"'; ?> />
							 <?php _e('Show the comments from administrators.', 'wp-recentcomments'); ?>
						</label>

						 <br />
						<label>
							<input name="ping" type="checkbox" <?php if($options['ping']) echo 'checked="checked"'; ?> />
							 <?php _e('Show pingback and trackback comments.', 'wp-recentcomments'); ?>
						</label>

						 <br />
						<label>
							<input name="navi" type="checkbox" <?php if($options['navi']) echo 'checked="checked"'; ?> />
							 <?php _e('Show navigation bar.', 'wp-recentcomments'); ?>
						</label>
					</td>
				</tr>

				<tr valign="top">
					<th scope="row"><?php _e('Comment Items', 'wp-recentcomments'); ?></th>
					<td>
						<input type="text" name="length" class="small-text" value="<?php echo($options['length']); ?>">
						 <?php _e('characters per comment.', 'wp-recentcomments'); ?>

						 <br />
						<label>
							<input name="post" type="checkbox" <?php if($options['post']) echo 'checked="checked"'; ?> />
							 <?php _e('Show post titles.', 'wp-recentcomments'); ?>
						</label>

						 <br />
						<label>
							<input name="content" type="checkbox" <?php if($options['content']) echo 'checked="checked"'; ?> />
							 <?php _e('Show the expand button when mouse over excerpts.', 'wp-recentcomments'); ?>
						</label>

						 <br />
						<label>
							<input name="external" type="checkbox" <?php if($options['external']) echo 'checked="checked"'; ?> />
							 <?php _e('Open external pages in a new tab/window.', 'wp-recentcomments'); ?>
						</label>

						 <br />
						<label>
							<input name="timestamp" type="checkbox" <?php if($options['timestamp']) echo 'checked="checked"'; ?> />
							 <?php _e('Show timestamps.', 'wp-recentcomments'); ?>
						</label>

						<br />
						<label>
							<input name="avatar" type="checkbox" <?php if($options['avatar']) echo 'checked="checked"'; ?> />
							 <?php _e('Show avatars on', 'wp-recentcomments'); ?>
						</label>
						 <select name="avatar_position" size="1">
							<option value="left" <?php if($options['avatar_position'] != right) echo ' selected '; ?>><?php _e('left', 'blocks'); ?></option>
							<option value="right" <?php if($options['avatar_position'] == right) echo ' selected '; ?>><?php _e('right', 'blocks'); ?></option>
						</select>
						 <?php _e(', size is', 'wp-recentcomments'); ?>
						 <input type="text" name="avatar_size" class="small-text" value="<?php echo($options['avatar_size']); ?>">
						 <?php _e('pixels', 'wp-recentcomments'); ?>

						<br />
						<label>
							<input name="smilies" type="checkbox" <?php if($options['smilies']) echo 'checked="checked"'; ?> />
							 <?php _e('Show smilies as graphic icons.', 'wp-recentcomments'); ?>
						</label>
					</td>
				</tr>

			</tbody>
		</table>

		<p class="submit">
			<input class="button-primary" type="submit" name="wp_recentcomments_save" value="<?php _e('Save Changes', 'wp-recentcomments'); ?>" />
		</p>
</form>
			</div>
		</div>

	</div>
</div>

<?php
	}
}

add_action('admin_menu', array('WPRecentCommentsOptions', 'add'));
/* ------------------------------------------------------------ */
/* options */

/* style & script */
/* ------------------------------------------------------------ */
function rc_footer() {
	$options = get_option('wp_recentcomments_options');
?>
<script>
/* <![CDATA[ */
var rcGlobal = {
	serverUrl		:'<?php bloginfo('url'); ?>',
	infoTemp		:'<?php _e('%REVIEWER% on %POST%', 'wp-recentcomments'); ?>',
	loadingText		:'<?php _e('Loading', 'wp-recentcomments'); ?>',
	noCommentsText	:'<?php _e('No comments', 'wp-recentcomments'); ?>',
	newestText		:'<?php _e('&laquo; Newest', 'wp-recentcomments'); ?>',
	newerText		:'<?php _e('&laquo; Newer', 'wp-recentcomments'); ?>',
	olderText		:'<?php _e('Older &raquo;', 'wp-recentcomments'); ?>',
	showContent		:'<?php echo $options['content']; ?>',
	external		:'<?php echo $options['external']; ?>',
	avatarSize		:'<?php echo $options['avatar_size']; ?>',
	avatarPosition	:'<?php echo $options['avatar_position']; ?>',
	anonymous		:'<?php _e('Anonymous', 'wp-recentcomments'); ?>'
};
/* ]]> */
</script>
<?php
}
add_action('wp_footer', 'rc_footer');

function rc_load_static() {
	$options = get_option('wp_recentcomments_options');
	$plugins_version = '2.2.7';
	$plugins_url = plugins_url('wp-recentcomments');
	$plugins_css_url = $plugins_url . '/css';
	$plugins_css_media = 'screen';
	$plugins_js_url = $plugins_url . '/js';

	// CSS
	if($options['use_css']) {
		if(file_exists(TEMPLATEPATH . '/wp-recentcomments.css')){
			wp_enqueue_style('wp-recentcomments-custom', get_bloginfo('template_url') . '/wp-recentcomments.css', array(), $plugins_version, $plugins_css_media);
		} else {
			wp_enqueue_style('wp-recentcomments', $plugins_css_url . '/wp-recentcomments.css', array(), $plugins_version, $plugins_css_media);
		}
	}

	// JavaScript
	if($options['js_type'] == 'normal') {
		wp_enqueue_script('wp-recentcomments', $plugins_js_url . '/wp-recentcomments.js', array(), $plugins_version, true);

	} else {
		if($options['js_type'] == 'custom_jquery') {
			if($options['jquery_url'] != '') {
				wp_enqueue_script('wp-recentcomments-lib', $options['jquery_url'], array(), $plugins_version, true);
			}
			wp_enqueue_script('wp-recentcomments-jquery', $plugins_js_url . '/wp-recentcomments-jquery.js', array(), $plugins_version, true);
		} else {
			wp_enqueue_script('wp-recentcomments-jquery-with-lib', $plugins_js_url . '/wp-recentcomments-jquery.js', array('jquery'), $plugins_version, true);
		}
	}
}
add_action('template_redirect', 'rc_load_static');
/* ------------------------------------------------------------ */
/* style & script */
?>
