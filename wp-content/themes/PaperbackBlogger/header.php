<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php if( is_search() ) { $ser = $_GET['s']; ?><?php _e('Search'); ?><?php echo " &quot;" . wp_specialchars($ser, 1) . "&quot;"; } ?><?php wp_title(''); ?><?php if( ! is_home() ) { ?> | <?php } ?><?php bloginfo('name'); ?></title>
<meta name="author" content="徐驰,抽筋,xc,xuchi,chris,xcchris" />
<meta name="description" content="抽筋,xc,xcchris,chris,话语权,徐驰,www.xuchi.name" />
<meta name="keywords" content="抽筋儿,徐驰,原创,技术,生活,公益,学习,教学,音乐,读书,互联网,IT,社会,GOOGLE,话语权,博客,blog,个人" />
<meta name="verify-v1" content="8SB1QkQwxZcT+BiavoEEz4D/gYjdkUWVw6UARAs61N4=" />
<META NAME="ROBOTS" CONTENT="INDEX,FOLLOW">
<link rel="shorcut icon" type="image/x-ico" href="http://www.xuchi.name/favicon.ico" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php
global $page_sort;	
	if(get_settings('fallseason_sortpages')!='')
	{ 
		$page_sort = 'sort_column='. get_settings('fallseason_sortpages');
	}	
	global $pages_to_exclude;
	
	if(get_settings('fallseason_excludepages')!='')
	{ 
		$pages_to_exclude = 'exclude='. get_settings('fallseason_excludepages');
	}	
?>
<?php wp_head(); ?>

</head>
<body>
 <div id="bg"></div>

<div id="outer">


	<div id="header">
		<div id="headercontent">
			<h1><a href="<?php bloginfo('siteurl');?>/" title="<?php bloginfo('name');?>"><?php bloginfo('name');?></a></h1>
			<h2><?php bloginfo('description');?></h2>
		</div>
	</div>



	<div id="headerpic"></div>

	
	<div id="menu">
		<ul>
			<li <?php if(is_home()){echo 'class="first current_page_item"';}?>><a href="<?php bloginfo('siteurl'); ?>/" title="Home">Home</a></li>
			<?php wp_list_pages('title_li=&depth=1&'.$page_sort.'&'.$pages_to_exclude)?>
		</ul>
	</div>
	<!-- <div id="menubottom"></div> -->