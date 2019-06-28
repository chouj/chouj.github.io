<?php get_header(); ?>

<div id="content">
  <div id="maincol">
	  <div class="col-inner">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="navigation">
			<span class="alignleft"><?php previous_post_link('&laquo; %link') ?></span>
			<span class="alignright"><?php next_post_link('%link , &raquo;') ?></span>
		</div>
	  
	    <div class="post" id="post-<?php the_ID(); ?>">
		  <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
		  <div class="post-meta">
			<small><?php the_time('F jS, Y') ?> by <?php the_author() ?> </small><small><?php if(function_exists('the_views')) { the_views(); } ?></small><small class="post-cat"><?php the_category(', ') ?></small><small class="post-comments"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></small>
		  </div>

		  <div class="entry">
<script type="text/javascript"><!--
google_ad_client = "pub-5281256931958529";
/* xuchi234x60, 创建于 08-5-23 */
google_ad_slot = "6776738933";
google_ad_width = 234;
google_ad_height = 60;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
		    <?php the_content('点此查看全文 &raquo;'); ?>

<p>转载原创文章请注明，转载自：<strong><?php bloginfo('name'); ?></strong>[<a href="<?php echo get_settings('home'); ?>"><?php echo get_settings('home'); ?></a>]<br>本文链接: <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_permalink(); ?></a><br>订阅本站：<a href="http://feed.xuchi.name" title="本站FEED">RSS Feed</a></p>


			<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>		
			<?php edit_post_link('Edit', '', ''); ?>
		  </div>		
		
		  <?php comments_template(); ?>
				
		  <?php endwhile; else: ?>
		
		  <p>Sorry, no posts matched your criteria.</p>
		
		<?php endif; ?>
	  </div>
    </div>
  </div>

  <?php get_sidebar(); ?>

</div><!-- end #content -->

<?php include (TEMPLATEPATH . '/extra.php'); ?>

<?php get_footer(); ?>