<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="author" content="徐驰,抽筋,抽筋儿" />
<meta name="description" content="抽筋,话语权,徐驰,www.xuchi.name" />
<meta name="keywords" content="抽筋儿,徐驰,原创,技术,生活,公益,学习,教学,音乐,读书,互联网,IT,社会,GOOGLE,话语权,博客,blog,个人" />
<meta name="verify-v1" content="8SB1QkQwxZcT+BiavoEEz4D/gYjdkUWVw6UARAs61N4=" />
<META NAME="ROBOTS" CONTENT="INDEX,FOLLOW">
<title><?php if (is_home()) {echo bloginfo('name');} elseif (is_category()) {echo __('Category &raquo; ', 'blank'); wp_title('&laquo; @ ', TRUE, 'right');	echo bloginfo('name');} elseif (is_tag()) {	echo __('Tag &raquo; ', 'blank'); wp_title('&laquo; @ ', TRUE, 'right'); echo bloginfo('name');} elseif (is_search()) {	echo __('Search results &raquo; ', 'blank'); echo the_search_query(); echo '&laquo; @ '; echo bloginfo('name');} elseif (is_404()) { echo '404 '; wp_title(' @ ', TRUE, 'right'); echo bloginfo('name');} else {echo wp_title(' @ ', TRUE, 'right'); echo bloginfo('name');} ?></title>

<?php global $options; foreach ($options as $value) {if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }} ?>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<?php if(get_option('theme_color_scheme') == "Blue") : ?><link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/bluestyle.css" type="text/css" media="screen" />
<?php elseif(get_option('theme_color_scheme') == "Red") : ?><link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/redstyle.css" type="text/css" media="screen" />
<?php else : endif; ?>
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<script src="<?php bloginfo('template_url'); ?>/js/javascript.js" type="text/javascript"></script>
<!--[if lte IE 6]><style type="text/css"></style><![endif]-->

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?> <!-- enables nested comments in WP 2.7 -->
<?php wp_head(); //leave for plugins ?>
</head>
<body>


<div class="preload">
<img src="<?php bloginfo('template_url');?>/images/readmorehover.gif" alt="continue reading hover preload" />
<img src="<?php bloginfo('template_url');?>/images/topbar-current.gif" alt="topbar hover preload" />
<img src="<?php bloginfo('template_url');?>/images/widgethover.gif" alt="widget hover preload" />
</div><!-- Preload images so they cache before hover 'animation' -->

<div class="banner-wrap">
<div class="banner">

<div class="logowrap">
<?php if(get_option('theme_logo') == "Text") : ?>
<h1 class="logotext"><a href="<?php echo get_option('home'); ?>" title="<?php bloginfo('title'); ?>"><?php bloginfo('title'); ?></a></h1>
<?php else : ?>
<h1 class="logo"><a href="<?php echo get_option('home'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.gif" alt="<?php bloginfo('title'); ?>" /></a></h1>
<?php endif; ?>
<span class="slogan"><?php bloginfo('description'); ?></span>
</div>

<div class="topbars">
<div class="topbarleft"></div>
<div class="topbarright"></div>
<ul class="topnav"><li<?php if (is_home()){ echo " class=\"page_item current_page_item\"";} else { echo " class=\"page_item\"";}?>><a href="<?php echo get_option('home'); ?>">home</a></li>
<?php wp_list_pages('sort_column=menu_order&title_li=' ); ?>
<li style=" float: right;">
<form method="get" id="searchform2" action="<?php bloginfo('url'); ?>/">
<div><input type="text" value="<?php the_search_query(); ?>" name="s" id="s2" /></div>
<div><input type="submit" id="searchsubmit2" value="<?php _e(''); ?>" /></div>
</form>
</li>
</ul>


</div><!-- end.topbars -->
</div><!-- end.banner -->
</div><!-- end.bannerwrap -->
<div id="wrapper"><!-- content-wrapper ends in footer.php -->




<div class="posts-wrap">

