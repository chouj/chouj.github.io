<!-- sidebar: Stuff that goes in the sidebar column (by default, the narrower right column) -->
<div id="sidebar">
<ul><?php if(is_home()) { ?>

<?php } ?>
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : else : ?>




	
		
  <div class="bigchic">			
			
		<a href="<?php bloginfo('rss2_url'); ?>" title="Subscribe to this blog's feed" target="_blank"><img src="<?php bloginfo('stylesheet_directory');?>/images/chicklet_big.gif" class="" alt="Subscribe to this blog's feed" border="0" height="80" width="54"  /> </a><br>
<a href="http://aboutrss.cn/2007/02/24/zhuaxia/" target="_blank" title="不知道的赶紧点这里！">如何使用抓虾订阅blog</a><br>
<a href="http://aboutrss.cn/2007/02/21/google-reader/" target="_blank" title="不知道的赶紧点这里！">如何使用Google Reader订阅blog</a>
  </div>		
	
<li class="boxsearch">

	<h6><?php _e('Search'); ?></h6>
		
			<!-- search box -->
		<form id="searchform" method="get" action="<?php bloginfo('siteurl')?>/index.php">
			<label for="s" id="lblSearch"></label>
			<input type="text" class="text" value="Type and hit Enter" name="s" id="s" onfocus="if (this.value == 'Type and hit Enter') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Type and hit Enter';}" />
        </form>
</li>

<li class="box">
        <h6>语录中国</h6>
<script type="text/javascript" charset="UTF-8" src="http://www.yulu.info/javascript.asp"></script>
</li>

<script type="text/JavaScript"> 
var alimama_pid="mm_10034808_374568_593764"; 
var alimama_titlecolor="0000FF"; 
var alimama_descolor ="000000"; 
var alimama_bgcolor="FFFFFF"; 
var alimama_bordercolor="E6E6E6"; 
var alimama_linkcolor="008000"; 
var alimama_bottomcolor="FFFFFF"; 
var alimama_anglesize="0"; 
var alimama_bgpic="0"; 
var alimama_icon="0"; 
var alimama_sizecode="32"; 
var alimama_width=250; 
var alimama_height=300; 
var alimama_type=2; 
</script> 
<script src="http://p.alimama.com/inf.js" type=text/javascript> 
</script>

<li class="box"><h6>热文排行</h6>
<ul>
   <?php akpc_most_popular($limit = 5); ?>
</ul>
</li>

<li class="box">
	<h6><?php _e('最新文章'); ?></h6>
<ul>
					<?php query_posts('showposts=5'); ?>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<li><a href="<?php the_permalink() ?>"><?php the_title() ?></a>  <span class="quick_date"><?php the_time('m.j') ?></span></li>
					<?php endwhile; endif; ?>
				</ul>
</li>

<li class="box">
	<h6><?php _e('Categories'); ?></h6>
	<ul>
		<?php wp_list_cats('optioncount=1');    ?>
	</ul>		
</li>

<li class="box">
	<h6><?php _e('Archives'); ?></h6>
	<ul><?php wp_get_archives('type=monthly&show_post_count='); ?></ul>
</li>

<script type='text/javascript' src='http://track3.mybloglog.com/js/jsserv.php?mblID=2007040606403789'></script>

<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-559717-4";
urchinTracker();
</script>

<?php if(is_home()) { ?>

<li class="box">
   <h6>最近留言</h6>
    <ul><?php if (function_exists('get_recent_comments')) { get_recent_comments($no_comments = 5); } ?></ul>
  </li>

<li class="box">
	<h6><?php _e('友情链接'); ?></h6>
	<ul><?php get_links_list('name'); ?> 
<table border="0" cellspacing="2" cellpadding="2">
                                <tr> 
                                  <td> 
                                    <div align="center"><a href="http://www.spreadfirefox.com/?q=affiliates&amp;id=202500&amp;t=218"><img border="0" alt="Firefox 2" title="Firefox 2" src="http://sfx-images.mozilla.org/affiliates/Buttons/firefox2/ff2o80x15.gif"/></a></div>                                  </td>
                                  <td> 
                                    <div align="center"><a href="http://www.palacan.com" target="_blank"><img src="http://www.palacan.com/palacan_min.gif" alt="Palacan!部落格聯播" border="0" longdesc="http://www.palacan.com" /></a></div>                                  </td>
                                </tr>
                                <tr> 
                                  <td> 
                                    <div align="center"><a href="http://forum.chinabloggernetwork.com/?fromuid=35"><img
src="http://chinabloggernetwork.com/images/spread_logo_88x31.jpg"
border="0" alt="CBN Forum"></a></div>                                  </td>
                                  <td> 
                                    <div align="center"><a href="http://www.365bloglink.com" target="_blank"><img src="http://files.365bloglink.com/img_2/logolink.gif" alt="365bloglink - 博邻" width="88" height="31" border="0"/></a></div>                                  </td>
                                </tr></table>
</ul>		
</li>

<li class="box"><h6>状态</h6>
<p><a href="http://wordpresstheme.cn/"><img src="http://www.xuchi.name/wpt-logo-125-hei.gif" alt="WordPress主题中文站" border="0"></a></p>
<p><script src="http://widgets.technorati.com/t.js" type="text/javascript"> </script>
<a href="http://technorati.com/blogs/www.xuchi.name/blog?sub=tr_authority_t_ns" class="tr_authority_t_js" style="color:#4261DF">View blog authority</a>
<script type="text/javascript" src="http://embed.technorati.com/embed/nwnxp8w73.js"></script></p>
<p><a href="http://bpopulr.com/I/142184481"><img src="http://we.bpopulr.com/142184481.gif" alt="" border=0></a></p>
</li>

<li class="box">
	<h6><?php _e('Meta'); ?></h6>
	<ul>
		<?php wp_register(); ?>
		<li><?php wp_loginout(); ?></li>
		<li><a href="http://wordpress.org/" title="Powered by WordPress">WordPress</a></li>
		<?php wp_meta(); ?>
	</ul>	
</li>

<li class="box">
	<h6>RSS</h6>
	<ul class="feeds">
		<li>
			<a href="<?php bloginfo('rss2_url'); ?>" title="Posts RSS">Posts</a>
		</li>
		<li>
			<a href="<?php bloginfo('comments_rss2_url'); ?>" title="Comments RSS">Comments</a>
		</li>
	</ul>
</li>

<?php }?>
  <?php endif; ?>
</ul>


</div><!-- sidebar area end -->
