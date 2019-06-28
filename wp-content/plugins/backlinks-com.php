<?php
/*
Plugin Name: BackLinks.com
Plugin URI: http://www.backlinks.com
Description: This plugin is adding BackLinks links block into your blog. To show off BackLinks links block just put <code>&lt;?=backlinks_links()?&gt;</code> in your template and enter your 'BackKinks Key' on "BackLinks options" section. See also our <a href="http://www.backlinks.com/WordPress/how-to-install.php">Installation guide</a>.
Author: BackLinks
Version: 1.0.1
Author URI: http://www.backlinks.com/
*/
$backlinks_key = '';

function backlinks_init() {
	global $backlinks_key;

	add_action('admin_menu', 'backlinks_config_page');
}

add_action('init', 'backlinks_init');

//add_option('BackLinks Key', '<enter your key>', 'Your BackLinks Key. You can get this key in your BackLinks.com account\'s \'installation code\' section.', 'yes');
function backlinks_config_page() {
	if ( function_exists('add_submenu_page') )
		add_submenu_page('plugins.php', __('BckLinks Configuration'), __('BackLinks Configuration'), 'manage_options', 'backlinks-key-config', 'backlinks_conf');
	
}

function backlinks_conf() {
	global $backlinks_key;

    $ms = array();

	if ( isset($_POST['submit']) ) {
		if ( function_exists('current_user_can') && !current_user_can('manage_options') )
			die(__('Cheatin&#8217; uh?'));

		$key = preg_replace( '/[^A-Z0-9\-]/', '', $_POST['key'] );

		if ( empty($key) ) {
			$key_status = 'empty';
			$ms[] = 'key_empty';
			delete_option('backlinks_key');
		} 
        else {
			$key_status = 'valid';
			update_option('backlinks_key', $key);
			update_option('backlinks_open_in_nw', intval($_POST['open_in_nw']));
        }
	}


	$messages = array (
		'key_empty' => array('color' => 'aa0', 'text' => __('Please enter a BackLinks key. (<a href="http://www.backlinks.com/login.php" style="color:#fff">Get your key.</a>)')),
		'key_valid' => array('color' => '2d2', 'text' => __('This key is valid.')) );
?>
<?php if ( !empty($_POST ) ) : ?>
<div id="message" class="updated fade"><p><strong><?php _e('Options saved.') ?></strong></p></div>
<?php endif; ?>
<div class="wrap">
<h2><?php _e('BackLinks Configuration'); ?></h2>
<div class="narrow">
<form action="" method="post" id="backlinks-conf" style="margin: auto; width: 400px; ">

<h3><label for="key"><?php _e('BacLinks.com Key'); ?></label></h3>
<?php foreach ( $ms as $m ) : ?>
	<p style="padding: .5em; background-color: #<?php echo $messages[$m]['color']; ?>; color: #fff; font-weight: bold;"><?php echo $messages[$m]['text']; ?></p>
<?php endforeach; ?>
<p><input id="key" name="key" type="text" size="15" maxlength="14" value="<?php echo get_option('backlinks_key'); ?>" style="font-family: 'Courier New', Courier, mono; font-size: 1.5em;" /> (<?php _e('<a href="http://www.backlinks.com/WordPress/istatallation-guide.php">What is this?</a>'); ?>)</p>

<p><input id="open_in_nw" name="open_in_nw" type="checkbox" value="1" <?=((!get_option('backlinks_open_in_nw'))?'':'checked')?> /> Open partner links in a new window</p>

<p class="submit"><input type="submit" name="submit" value="<?php _e('Update options &raquo;'); ?>" /></p>
</form>
</div>
</div>
<?php
}

if ( !get_option('backlinks_key') && !$backlinks_key && !isset($_POST['submit']) ) {
	function backlinks_warning() {
		echo "
		<div id='backlinks-warning' class='updated fade-ff0000'><p><strong>".__('BackLinks is almost ready.')."</strong> ".sprintf(__('You must <a href="%1$s">enter your BackLinks.com Key</a> for it to work.'), "plugins.php?page=backlinks-key-config")."</p></div>
		";
	}
	add_action('admin_notices', 'backlinks_warning');
	return;
}


function backlinks_links() {
	global $backlinks_key;

    if(!$backlinks_key) $backlinks_key = get_option('backlinks_key');

    $OpenInNewWindow = intval(get_option('backlinks_open_in_nw'));

    // # DO NOT MODIFY ANYTHING ELSE BELOW THIS LINE!
    // ----------------------------------------------
    $BLKey = $backlinks_key;

    $QueryString  = "LinkUrl=".urlencode((($_SERVER['HTTPS']=='on')?'https://':'http://').$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    $QueryString .= "&Key=" .urlencode($BLKey);
    $QueryString .= "&OpenInNewWindow=" .urlencode($OpenInNewWindow);


    if(intval(get_cfg_var('allow_url_fopen')) && function_exists('readfile')) {
        @readfile("http://www.backlinks.com/engine.php?".$QueryString); 
    }
    elseif(intval(get_cfg_var('allow_url_fopen')) && function_exists('file')) {
        if($content = @file("http://www.backlinks.com/engine.php?".$QueryString)) 
            print @join('', $content);
    }
    elseif(function_exists('curl_init')) {
        $ch = curl_init ("http://www.backlinks.com/engine.php?".$QueryString);
        curl_setopt ($ch, CURLOPT_HEADER, 0);
        curl_exec ($ch);

        if(curl_error($ch))
            print "Error processing request";

        curl_close ($ch);
    }
    else {
        print "It appears that your web host has disabled all functions for handling remote pages and as a result the BackLinks software will not function on your web page. Please contact your web host for more information.";
    }

}


?>