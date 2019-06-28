<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head profile="http://gmpg.org/xfn/11">
	<title><?php if( is_search() ) { $ser = $_GET['s']; ?><?php _e('Search'); ?><?php echo " &quot;" . wp_specialchars($ser, 1) . "&quot;"; } ?><?php wp_title(''); ?><?php if( ! is_home() ) { ?> | <?php } ?><?php bloginfo('name'); ?></title>
<meta name="author" content="徐驰,抽筋,xc,xuchi,chris,xcchris" />
<meta name="description" content="抽筋,xc,xcchris,chris,话语权,徐驰,www.xuchi.name" />
<meta name="keywords" content="抽筋儿,徐驰,原创,技术,生活,公益,学习,教学,音乐,读书,互联网,IT,社会,GOOGLE,话语权,博客,blog,个人" />
<meta name="verify-v1" content="8SB1QkQwxZcT+BiavoEEz4D/gYjdkUWVw6UARAs61N4=" />
<META NAME="ROBOTS" CONTENT="INDEX,FOLLOW">
<link rel="shorcut icon" type="image/x-ico" href="http://www.xuchi.name/favicon.ico" />

	<link rel="stylesheet" type="text/css" media="screen, projection" href="<?php bloginfo('stylesheet_url'); ?>" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/print.css" type="text/css" media="print" />

	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> (using RSS 2.0)" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="<?php bloginfo('name'); ?> (using RSS .92)" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> (using Atom 0.3)" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_head(); ?>
	<?php wp_get_archives('type=monthly&format=link'); ?>
</head>

<body>

<div id="wrap">
  <div id="nav">
    <ul>
	  <li class="<?php if (((is_home()) && !(is_paged())) or (is_archive()) or (is_single()) or (is_paged()) or (is_search())) { ?>current_page_item<?php } else { ?>page_item<?php } ?>"><a href="<?php echo get_settings('home'); ?>">Home</a></li>
      <?php wp_list_pages('sort_column=menu_order&depth=1&title_li='); ?>
    </ul>
  </div>

  <div id="header"><div id="header-inner">
    <h1><a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a></h1>
    <p class="description"><?php bloginfo('description'); ?></p>

  </div></div><!-- #header -->