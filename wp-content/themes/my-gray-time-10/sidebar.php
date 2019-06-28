<div id="sidebar">

	<h1>Sidebar</h1>

	<ul>
		<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>
		
			<li>
				<?php include (TEMPLATEPATH . '/searchform.php'); ?>
			</li>
		
                        <li><h2>如何订阅</h2>
<p><a href="http://feed.xuchi.name" target="_blank" /><img src="http://www.feedsky.com/images/icon_sub_c1s15_d.gif" border ="0" margin="0" padding="0" alt="本站feed" /></a><br /><a href="http://aboutrss.cn/2007/02/24/zhuaxia/" target="_blank" title="不知道的赶紧点这里！">如何使用抓虾订阅blog</a><br>
<a href="http://aboutrss.cn/2007/02/21/google-reader/" target="_blank" title="不知道的赶紧点这里！">如何使用Google Reader订阅blog</a></p>
                        </li>

<li><h2>语录中国</h2>
<script type="text/javascript" charset="UTF-8" src="http://www.yulu.info/javascript.asp"></script>
</li>

                         <li><h2>热文排行</h2>
   <ul>
   <?php akpc_most_popular($limit = 10); ?>
   </ul>
</li>

                         <li><h2>请您参考</h2>
   <script type="text/javascript" src="http://www.google.com/reader/ui/publisher.js"></script>
<script type="text/javascript" src="http://www.google.com/reader/public/javascript/user/08043002813480376908/state/com.google/broadcast?n=5&callback=GRC_p(%7Bc%3A'-'%2Ct%3A''%2Cs%3A'false'%7D)%3Bnew%20GRC"></script>
</li>

                         <li><h2>我的网摘</h2>
   <ul>
<script type="text/javascript" src="http://del.icio.us/feeds/js/xcchris?count=5"></script>
<noscript><a href="http://del.icio.us/xcchris">my del.icio.us</a></noscript>
   </ul>
</li>
			<li><h2><?php _e('Categories:'); ?></h2>
				<ul>
				<?php
					if ( function_exists( wp_list_categories ) ) {
						wp_list_categories('title_li=&orderby=name&hierarchical=1');
					}
					else {
						wp_list_cats('sort_column=name&optioncount=0&title_li=');
					}
				?>
				</ul>
			</li>
<li><h2>最近访客</h2>
<script type="text/javascript" src="http://pub.mybloglog.com/comm2.php?mblID=2007040606403789&amp;c_width=240&amp;c_sn_opt=n&amp;c_rows=3&amp;c_img_size=h&amp;c_heading_text=&amp;c_color_heading_bg=FFFFFF&amp;c_color_heading=999999&amp;c_color_link_bg=FFFFFF&amp;c_color_link=005A94&amp;c_color_bottom_bg=FFFFFF"></script>
</li>
<li>
   <h2>友情链接</h2>
    <ul>
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
     <?php get_links('-1', '<li>', '</li>', '', FALSE, 'id', FALSE, 
FALSE, -1, FALSE); ?>
    </ul>
   </li>
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-559717-4";
urchinTracker();
</script>


			<li><h2><?php _e('Meta:'); ?></h2>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<li><a href="http://validator.w3.org/check/referer" title="<?php _e('This page validates as XHTML 1.0 Transitional'); ?>"><?php _e('Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr>'); ?></a></li>
					<li><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS 2.0'); ?>"><?php _e('Entries <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
					<li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
					<?php wp_meta(); ?>
				</ul>
			</li>

<li><h2>状态</h2>
<p><a href="http://wordpresstheme.cn/"><img src="http://www.xuchi.name/wpt-logo-125-hei.gif" alt="WordPress主题中文站" border="0"></a></p>
<p><script src="http://widgets.technorati.com/t.js" type="text/javascript"> </script>
<a href="http://technorati.com/blogs/www.xuchi.name/blog?sub=tr_authority_t_ns" class="tr_authority_t_js" style="color:#4261DF">View blog authority</a>
<script type="text/javascript" src="http://embed.technorati.com/embed/nwnxp8w73.js"></script></p>
<p><a href="http://bpopulr.com/I/142184481"><img src="http://we.bpopulr.com/142184481.gif" alt="" border=0></a></p>
<p><object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="240" height="400"><param name="allowScriptAccess" value="sameDomain" /><param name="wmode" value="transparent" /><param name="movie" value="http://www.blogool.com/new_images/swf/widgetbox2.swf" /><param name="quality" value="high" /><param name="flashvars" value="setHeight=400&setWidth=240&pastTime=1185450980234&userid=3j001-egtxvh-f3ncfzdi-1-f3pd2cbz-28j9&style=black" /><embed src="http://www.blogool.com/new_images/swf/widgetbox2.swf" width=240 height="400" flashvars="setHeight=400&setWidth=240&pastTime=1185450980234&userid=3j001-egtxvh-f3ncfzdi-1-f3pd2cbz-28j9&style=black" quality="high" scale="noborder" align="middle" allowScriptAccess="SameDomain" wmode="transparent" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" /></object></p>
</li>
<?php endif; ?>

	</ul>
</div>
