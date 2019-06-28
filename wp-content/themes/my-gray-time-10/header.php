<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php if( is_search() ) { $ser = $_GET['s']; ?><?php _e('Search'); ?><?php echo " &quot;" . wp_specialchars($ser, 1) . "&quot;"; } ?><?php wp_title(''); ?><?php if( ! is_home() ) { ?> | <?php } ?><?php bloginfo('name'); ?></title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="徐驰,抽筋,xc,xuchi,chris,xcchris" />
<meta name="description" content="抽筋,xc,xcchris,chris,话语权,徐驰,www.xuchi.name" />
<meta name="keywords" content="抽筋儿,徐驰,原创,技术,生活,公益,学习,教学,音乐,读书,互联网,IT,社会,GOOGLE,话语权,博客,blog,个人" />
<meta name="verify-v1" content="8SB1QkQwxZcT+BiavoEEz4D/gYjdkUWVw6UARAs61N4=" />
<META NAME="ROBOTS" CONTENT="INDEX,FOLLOW">
<link rel="shorcut icon" type="image/x-ico" href="http://www.xuchi.name/favicon.ico" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css"  media="screen"/>
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>

</head>
<body>
<div id="site_content"><a href="http://www.wpthemesfree.com/" title="Wordpress Themes">Wordpress Themes</a></div>
<div id="wrapper">

	<div id="header">

		<h1>Home Page</h1>

		<h2><a href="<?php echo get_settings('home'); ?>/" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h2>
		<div class="description"><a href="<?php echo get_settings('home'); ?>/"><?php bloginfo('description'); ?></a>

<div class="TopMenu">
   <ul>
     <li><a class="TopMenu1" href="/">首页</a></li> 
     <li><a class="TopMenu2" href="/blog/sitemap/">站点地图</a></li>
     <li><a class="TopMenu3" href="/blog/douban/">我的豆瓣</a></li>
    <li><a class="TopMenu4" href="/blog/fanfou/">我的饭否</a></li>
    <li><a class="TopMenu5" href="/blog/about/">关于这里</a></li>
   </ul>
  </div>
        </div>
	</div>
<div id="sub-wrapper">

	<hr />

	<?php get_sidebar(); ?>

	<hr />

	<div id="content">
	
		<h1>Main Contents</h1>
