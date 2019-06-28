<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<meta name="author" content="@chouj,抽筋儿" />

<meta name="description" content="抽筋儿的话语权和RSS相关" />

<meta name="keywords" content="@chouj,抽筋儿,生活,互联网,话语权,blog,个人,RSS相关" />

<meta name="google-site-verification" content="IbfnQg6Y-2E1loByNtDYT65gFLoq62dwdkgs66D2Eqs" />

<META NAME="ROBOTS" CONTENT="INDEX,FOLLOW">

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-559717-4']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<?php if(is_single()){?>
    <link rel="canonical" href="<?php echo get_permalink($post->ID);?>" />
<?php } ?>

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link href='http://www.xuchi.name/favicon.ico' rel='icon' type='image/x-icon'/><link href='http://www.xuchi.name/favicon.ico' rel='shortcut icon' type='image/x-icon'/>
<title><?php if (is_home()) {echo bloginfo('name');} elseif (is_category()) {echo __('Category &raquo; ', 'blank'); wp_title('&laquo; @ ', TRUE, 'right');	echo bloginfo('name');} elseif (is_tag()) {	echo __('Tag &raquo; ', 'blank'); wp_title('&laquo; @ ', TRUE, 'right'); echo bloginfo('name');} elseif (is_search()) {	echo __('Search results &raquo; ', 'blank'); echo the_search_query(); echo '&laquo; @ '; echo bloginfo('name');} elseif (is_404()) { echo '404 '; wp_title(' @ ', TRUE, 'right'); echo bloginfo('name');} else {echo wp_title(' @ ', TRUE, 'right'); echo bloginfo('name');} ?></title>

<?php global $options; foreach ($options as $value) {if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }} ?>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<script type="text/javascript">
var template = "<?php bloginfo('template_url'); ?>";
</script>
<script src="<?php bloginfo('template_url'); ?>/js/javascript.js" type="text/javascript"></script>
<!--[if lte IE 6]><style type="text/css"></style><![endif]-->
<!--[if IE 7]><style type="text/css">.topbars { padding-top: 12px; }</style><![endif]-->
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); //leave for plugins ?>
</head>
<script type="text/javascript" src="http://apis.google.com/js/plusone.js">
  {lang: 'zh-CN'}
</script>
<body>

<div style="width: 0; height: 0;">
<img src="<?php bloginfo('template_url'); ?>/images/recent-comments-active.gif" style="display: none;" alt="preload" />
<img src="<?php bloginfo('template_url'); ?>/images/recent-posts-inactive.gif" style="display: none;" alt="preload" />
<img src="<?php bloginfo('template_url'); ?>/images/tags-active.gif" style="display: none;" alt="preload" />
<img src="<?php bloginfo('template_url'); ?>/images/widget-hover.gif" style="display: none;" alt="preload" />
</div>

<div class="banner">
<div class="marginauto">
<div class="logo">
<a href="<?php echo get_option('home'); ?>"></a>
<span class="slogan"><?php bloginfo('description'); ?></span>

<form method="get" id="searchform-header" action="<?php bloginfo('url'); ?>/">
<div><input type="text" value="<?php the_search_query(); ?>" name="s" id="s-header" /></div>
<div><input type="submit" id="searchsubmit-header" value="<?php _e(''); ?>" /></div>
</form>

</div>

<div class="topbars">
<ul class="topnav"><li<?php if (is_home()){ echo " class=\"page_item current_page_item\"";} else { echo " class=\"page_item\"";}?>><a style="padding-left: 34px;" href="<?php echo get_option('home'); ?>">首页</a></li><li<?php if (is_home()){ echo " class=\"page_item current_page_item\"";} else { echo " class=\"page_item\"";}?>><a href="../category/aboutrss/" >RSS相关</a></li><li<?php if (is_home()){ echo " class=\"page_item current_page_item\"";} else { echo " class=\"page_item\"";}?>><a href="../410/" >留言板</a></li>
<?php wp_list_pages('sort_column=menu_order&title_li=' ); ?></ul>
</div><!-- end.topbars -->

</div><!-- end.marginauto -->
</div><!-- end.banner -->

<div class="wrap"><!-- ends in footer.php -->
<div class="contentwrap">
<div class="posts-wrap"><!-- ends in sidebar.php -->