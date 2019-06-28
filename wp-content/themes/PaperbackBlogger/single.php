<?php get_header(); ?>	
		<div id="content">		
		<!-- Primary content: Stuff that goes in the primary content column (by default, the left column) -->
		<div id="primarycontainer">
			<div id="primarycontent">
				<div id="contentarea"><!-- Primary content area start -->
				<?php if ($posts) {
					foreach($posts as $post)
					{
						start_wp();
					?>
					<div class="post" id="post-<?php the_ID(); ?>">
						<h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h4>
						<div class="contentarea">
							<p class="details"><span class="date"><?php the_time('F jS, Y') ?></span></p>	
							<div class="postcontent">
							<?php the_content('Continue Reading &raquo;'); ?>
<p>转载原创文章请注明，转载自：<strong><?php bloginfo('name'); ?></strong>[<a href="<?php echo get_settings('home'); ?>"><?php echo get_settings('home'); ?></a>]<br>本文链接: <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_permalink(); ?></a><br>订阅本站：<img src="http://www.xuchi.name/blog/wp-content/themes/PaperbackBlogger/images/rss_chicklet.png" border="0"> <a href="http://feed.xuchi.name" title="本站FEED">RSS Feed</a></img><br>收藏本文：<?php akst_share_link(); ?></p>
							<ul class="controls">
								<span class="more"><li class="more">Posted by  <?php the_author_posts_link() ?></span> <li class="tag">Category: <?php the_category(' , ') ?>   </li>				
								<!--<li class="comments"><?php comments_popup_link('Comments(0)', 'Comments(1)', 'Comments(%)'); ?></li>		------>							
							</ul>
							</div><!--postcontent end-->
						</div>
					</div>

					<?php if (function_exists('link_to_me_textbox')) link_to_me_textbox(''); ?><br/><br/>
					<?php comments_template();?>					
					<?php
					} /* end for "for-each" */
				}/* end for "if posts" */
				else
				{
					echo '<p>Sorry, No Posts matched your criteria.</p>';
				}
				?>
				<p align="center"><?php posts_nav_link(' - ','&#171; Prev','Next &#187;') ?></p>
				
			</div><!-- primarycontent end -->
		</div><!-- primarycontainer end -->
	</div><!--content end -->
<?php get_sidebar(); ?>
<?php get_footer();?>