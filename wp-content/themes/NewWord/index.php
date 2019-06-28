<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<?php wp_head();?>
<link type="image/vnd.microsoft.icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png" rel="shortcut icon">
<link href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" rel="stylesheet"/>
<!--[if lt IE 9]>
<script src="//cdn.bootcss.com/html5shiv/r29/html5.min.js"></script>
<script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<?php flush(); //顶部预加载 ?>
</head>
<body>

<header id="header">
<h1 class="title">
<a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
<span class="desc"><?php bloginfo('description'); ?></span>
</h1>
<nav class="nav">
<?php echo str_replace("</ul></div>", "", ereg_replace("<div[^>]*><ul[^>]*>", "", wp_nav_menu(array('theme_location' => 'header_nav', 'echo' => false)) )); ?>
</nav>
</header>

<main id="main">
<div class="pjax">
			<section class="blockGroup">
		<?php if (is_single()||is_page()) { ?>
		<section class="post" itemscope="" itemtype="http://schema.org/BlogPosting">
			<h2 itemprop="name headline"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
			<article class="single" itemscope itemtype="http://schema.org/BlogPosting">
				<?php if (have_posts()) { while (have_posts()) {
					the_post();
					the_content();
				} }; ?>
			</article>
		</section>
		<?php comments_template(); }
		else{?>
			<?php if (have_posts()):
					while (have_posts()): the_post();
						get_template_part('content', 'list');
					endwhile;
				endif;?>
		<?php };?>
			</section>
			<nav class="navigator">
				<?php echo load_postlist_button();?>
			</nav>
			<div class="clearer"></div>
</div>
<div class="clearer"></div>
<footer id="footer">
<section class="links_adlink">
<ul>
<li><a target="_blank" href="http://asheblog.org/">AsheBlog</a></li>
<li><a target="_blank" href="http://www.cmhello.com/">倡萌的自留地</a></li>
<li><a target="_blank" href="http://www.bgbk.org/">斌果博客</a></li>
<li><a target="_blank" href="http://da.ji8.me/">基吧</a></li>
<li><a target="_blank" href="http://www.zuifengyun.com/">醉风云</a></li>
<li><a target="_blank" href="http://zhuweisheng.com.cn/">碎碎念</a></li>
<li><a target="_blank" href="http://qiukong.com">秋空</a></li>
<li><a target="_blank" href="http://www.oreshura.com">不破草堂</a></li>
<li><a target="_blank" href="http://199508.com/">nob太雄</a></li>
<li><a target="_blank" href="http://fatesinger.com">大发</a></li>
<li><a target="_blank" href="https://www.qionglu.pw">穹庐</a></li>
<li><a target="_blank" href="https://tumutanzi.com/">土木坛子</a></li>
<li><a target="_blank" href="https://eiray.com">Eiray</a></li>
<li><a target="_blabk" href="http://www.endskin.com/">EndSkin</a></li>
<li><a target="_blank" href="http://www.rcek.net/">Mr'H</a></li>
<li><a target="_blabk" href="http://www.chaui.org/">Rich's</a></li>
<li><a target="_blank" href="http://icedme.com/">ICED Works</a></li>

<li><a target="_blank" href="http://www.isweetnight.com/ ">sweetnight床垫怎么样</a></li>
<li><a target="_blank" href="http://www.ilangzi.com/">朗姿官网</a></li>
<li><a target="_blank" href="http://www.imengjie.com/">梦洁家纺旗舰店</a></li>
<li><a target="_blank" href="http://www.bidegaidi.net/">彼德盖帝皮鞋官网</a></li>
<li><a target="_blank" href="http://www.zhuoshini.org/">卓诗尼官方旗舰店</a></li>
</ul>
</section>
Theme is <a target="_blank" href="https://www.idevs.cn/">NewWord</a></br>
&copy; <?php echo date('Y'); ?> <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a><?php if(get_option( 'zh_cn_l10n_icp_num' )){?> . <?php echo get_option( 'zh_cn_l10n_icp_num' );}?>
</footer>
</main>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/functions.js"></script>
<?php wp_footer(); ?>
</body>
</html>