	</div>

       <hr />
</div>
</div>

<div id="footer">
<h1>Footer</h1>

<?php // START WIDGET BAR ?>
<div id="footerbar">
<ul>
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>
   <li><h2>存档检索</h2>
			<ul>
				<?php wp_get_archives('type=monthly&limit=10'); ?>
				</ul>
  </li>
<li>
   <h2>最新日志</h2>
			<ul>
				<?php get_recent_posts($no_posts = 15); ?>
				</ul>
  </li>
  <li>
   <h2>最近留言</h2>
    <ul><?php if (function_exists('get_recent_comments')) { get_recent_comments($no_comments = 8); } ?></ul>
  </li>
  <li>
   <h2>标签云</h2>
   <ul><?php if (function_exists("UTW_ShowWeightedTagSet")) { 
               UTW_ShowWeightedTagSet("coloredsizedtagcloud"); 
            } ?> </ul>
  </li> 
<?php endif; ?>
</ul>
<hr class="clear" />
</div>
<hr class="clear" />
<?php // END WIDGET BAR ?>

<p class="first"><a href="<?php echo get_settings('home'); ?>/" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> is proudly powered by <a href="http://wordpress.org/">WordPress</a> and <a href="http://www.idsg.it/" title="ShinRa House">SH</a><br>本站采用<a href="http://creativecommons.org/licenses/by-nc-sa/2.5/cn/" rel="license">知识共享署名-非商业性使用-相同方式共享2.5中国大陆许可协议</a>进行许可。</p>
<?php akst_share_form(); ?>
<p class="incima"><a href="#" class="to-the-top">Top</a></p>
</div>

<a id="global-feed" href="http://feed.xuchi.name/" title="<?php _e('欢迎订阅哦！'); ?>"><span>Feed</span></a>

<?php wp_footer(); ?>

</body>
</html>