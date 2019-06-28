<?php
/*
Plugin Name: 中文 Dashboard
Plugin URI: http://fairyfish.net/2008/01/31/dashboard-chinese/
Description: 把 incomming links 改成 Technorati，把 Development Blog 改成 WordPress 中文团队博客，把 Other WordPress News 改成 WordPress 火星。
Version:3.0
Author: Denis
Author URI: http://fairyfish.net/
*/
$change_incomming_link = 0;
$change_development_blog = 0;
$change_other_wordpress_news = 1;

$widget_options = get_option( 'dashboard_widget_options' );

if($widget_options){
	if($change_incomming_link && $widget_options['dashboard_incoming_links']){
		$widget_options['dashboard_incoming_links']['link'] = "http://www.technorati.com/search/".trailingslashit(get_option('home'));
		$widget_options['dashboard_incoming_links']['url'] = "http://feeds.technorati.com/cosmos/rss/?url=".trailingslashit(get_option('home'));
	}
	if($change_development_blog && $widget_options['dashboard_primary']){
		$widget_options['dashboard_primary']['link'] = "http://www.wpcng.com/";
		$widget_options['dashboard_primary']['url'] = "http://www.wpcng.com/feed/";
		$widget_options['dashboard_primary']['title'] = "WordPress 中文团队";
	}
	if($change_other_wordpress_news && $widget_options['dashboard_secondary']){
		$widget_options['dashboard_secondary']['link'] = "http://fairyfish.net/planet/";
		$widget_options['dashboard_secondary']['url'] = "http://feed.feedsky.com/WordPressChinesePlanet";
		$widget_options['dashboard_secondary']['title'] = "WordPress 火星";
	}
	
	update_option( 'dashboard_widget_options', $widget_options );
}

function technorati_incoming_feed($notused) {
	return "http://feeds.technorati.com/cosmos/rss/?url=".trailingslashit(get_option('home'));
}
function technorati_incoming_link($notused) {
	return "http://www.technorati.com/search/".trailingslashit(get_option('home'));
}
if($change_incomming_link){
	add_filter('dashboard_incoming_links_feed','technorati_incoming_feed');
	add_filter('dashboard_incoming_links_link','technorati_incoming_link');
}

function chinese_primary_feed($notused) {
	return "http://www.wpcng.com/feed/";
}
function chinese_primary_link($notused) {
	return "http://www.wpcng.com/";
}
function chinese_primary_title($notused) {
	return "WordPress 中文团队";
}
if($change_development_blog){
	add_filter('dashboard_primary_link','chinese_primary_link');
	add_filter('dashboard_primary_feed','chinese_primary_feed');
	add_filter('dashboard_primary_title','chinese_primary_title');
}

function chinese_secondary_feed($notused) {
	return "http://feed.feedsky.com/WordPressChinesePlanet";
}
function chinese_secondary_title($notused) {
	return "WordPress 火星";
}
function chinese_secondary_link($notused) {
	return "http://fairyfish.net/planet/";
}

if($change_other_wordpress_news){
	add_filter('dashboard_secondary_feed','chinese_secondary_feed');
	add_filter('dashboard_secondary_title','chinese_secondary_title');
	add_filter('dashboard_secondary_link','chinese_secondary_link');	
}

function show_wcp($items = 20,$style="full"){
	include_once(ABSPATH . WPINC . '/rss.php');
	$wcp_rss = fetch_rss('http://feed.feedsky.com/WordPressChinesePlanet');
	if(empty($wcp_rss))	return -1;
	if(empty($wcp_rss->items))	return -1;
	$wcp_items = array_slice($wcp_rss->items, 0, $items);
	$output = '';
	if($style=="full"){
		foreach ($wcp_items as $wcp_item){
			$output .=	'<div class="wcp">';
			$output .=	'<h3><a href="'.$wcp_item['link'].'" title="'.$wcp_item['title'].'">'.$wcp_item['title'].'</a></h3>';
			$output .=	'<p>'.$wcp_item['description'].' <br /><a href="'.$wcp_item['link'].'" class="more-link"><span class="moretext"> 查看全文... </span></a></p>';
			$output .=	'<p class="info"><em class="date">'.date('F jS, Y - h:ia',strtotime($wcp_item["pubdate"])).'</em><em class="author">'.$wcp_item['author'].'</em></p>';
			$output .=	'</div>';
		}
	} else {
		$output .=	'<ul class="wcp">';
		foreach ($wcp_items as $wcp_item){
			$output .=	'<li><a href="'.$wcp_item['link'].'" title="'.$wcp_item['title'].'">'.$wcp_item['title'].'</a></li>';
		}
		$output .=	'</ul>';
	}
	echo $output;
}
function show_wcp_users(){
	echo '<ul class="wcp_users">';
?>
<script type="text/javascript" src="http://fairyfish.net/?planet=users"></script>
<?php	
	echo '</ul>';
}
?>