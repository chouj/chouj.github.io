<div id="sidebar">
	<ul>
	
		<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar') ) : else : ?>
	
	  <li><?php include (TEMPLATEPATH . '/searchform.php'); ?></li>

	    <?php /* Menu for subpages of current page */
	    global $notfound;
	    if (is_page() and ($notfound != '1')) {
	        $current_page = $post->ID;
	        while($current_page) {
	            $page_query = $wpdb->get_row("SELECT ID, post_title, post_status, post_parent FROM $wpdb->posts WHERE ID = '$current_page'");
 	            $current_page = $page_query->post_parent;
	        }
	        $parent_id = $page_query->ID;
	        $parent_title = $page_query->post_title;
	
	        // if ($wpdb->get_results("SELECT * FROM $wpdb->posts WHERE post_parent = '$parent_id' AND post_status != 'attachment'")) {
	        if ($wpdb->get_results("SELECT * FROM $wpdb->posts WHERE post_parent = '$parent_id' AND post_type != 'attachment'")) {
	    ?>
	
	    <li>
	      <h2 class="sidebartitle"><?php echo $parent_title; ?> <?php _e('Subpages'); ?></h2>
	      <ul class="list-page">
	        <?php wp_list_pages('sort_column=menu_order&title_li=&child_of='. $parent_id); ?>
	      </ul>
	    </li>
	
	    <?php } } ?>

<iframe frameborder="0" marginheight="0" marginwidth="0" border="0" id="alimamaifrm" name="alimamaifrm" scrolling="no" height="200px" width="200px" style="width:200px;height:200px" src="http://a.alimama.cn/cpscode.php?pid=mm_10034808_0_0&w=200&h=200&uid=12518336&m=41&t=1000&bgc=FFFFFF&bdc=E6E6E6&tc=0000FF&sc=34"></iframe>

	<li class="box">
        <h2 class="sidebartitle">语录中国</h2>
<script type="text/javascript" charset="UTF-8" src="http://www.yulu.info/javascript.asp"></script>
        </li>
<li>
        <h2 class="sidebartitle">访问排行</h2>
<?php if (function_exists('get_most_viewed')): ?>
   <ul>
      <?php get_most_viewed(); ?>
   </ul>
<?php endif; ?>
        </li>
<li>
<h2 class="sidebartitle">我的视野</h2>
<ul>
<script type="text/javascript" src="https://www.google.com/reader/ui/publisher-zh_CN.js"></script>
<script type="text/javascript" src="https://www.google.com/reader/public/javascript/user/08043002813480376908/state/com.google/broadcast?n=5&callback=GRC_p(%7Bc%3A%22-%22%2Ct%3A%22%22%2Cs%3A%22true%22%2Cb%3A%22false%22%7D)%3Bnew%20GRC"></script>
</ul>
</li>

<script type='text/javascript' src='http://track3.mybloglog.com/js/jsserv.php?mblID=2007040606403789'></script>



<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">

</script>

<script type="text/javascript">

_uacct = "UA-559717-4";

urchinTracker();

</script>

	    <li>
	      <h2 class="sidebartitle"><?php _e('Categories'); ?></h2>
	      <ul class="list-cat">
	        <?php wp_list_cats('sort_column=name&optioncount=1&hide_empty=1'); ?>
	      </ul>
	    </li>
	    <li>
	      <h2 class="sidebartitle"><?php _e('Archives'); ?></h2>
<select name="archive-dropdown" onChange='document.location.href=this.options[this.selectedIndex].value;'>  
<option value=""><?php echo attribute_escape(__('选择存档月份')); ?></option>
<?php wp_get_archives('type=monthly&format=option&show_post_count=1'); ?> </select> 
	    </li>
	    <li>
	      <h2 class="sidebartitle"><?php _e('Links'); ?></h2>
	      <ul class="list-blogroll">
	        <?php get_links('-1', '<li>', '</li>', '<br />', FALSE, 'id', FALSE, FALSE, -1, FALSE); ?>
<table border="0" cellspacing="2" cellpadding="2">

                                <tr> 

                                  <td> 

                                    <div align="center"><a href="http://www.oblogger.org/" title="原创博客联盟" target="_blank"><img src="http://www.oblogger.org/img/8831.png" alt="原创博客联盟" border="0"></a></div>       </td>

                                  <td> 

                                    <div align="center"><a href="http://www.palacan.com" target="_blank"><img src="http://www.palacan.com/palacan_small.gif" alt="Palacan!部落格聯播" border="0" longdesc="http://www.palacan.com" /></a></div>                                  </td>

                                </tr>

                                </table>

</ul>
	    </li>
<li><h2 class="sidebartitle">状态</h2>

<p><a href="http://wpchina.org/hosting/" title="完美支持 WordPress 等 php 博客程序" target="_blank"><img src="http://wpchina.org/images/w-clients-20060-1.gif" alt="WP博客主机" ></a></p>
<p><a href="http://bpopulr.com/I/142184481"><img src="http://we.bpopulr.com/142184481.gif" alt="访问量" border=0></a></p>

</li>
<li><h2 class="sidebartitle">My Pet</h2><ul>
<script language="javascript" src="http://www.doll-doll.com/jsdoll.php?dollID=0000014818" type="text/javascript"></script></ul></li>

	  <?php endif; ?>
	 </ul>
</div><!-- #sidebar -->