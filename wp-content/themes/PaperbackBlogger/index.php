<?php get_header(); ?>	
	<div id="content">
	<!--<div class="borderline"></div> -->
		<!--<?php include_once(TEMPLATEPATH.'/flasher.php');?>--> 
		<!-- Primary content: Stuff that goes in the primary content column (by default, the left column) -->
		<div id="primarycontainer">
			<div id="primarycontent">
				<div id="contentarea"><!-- Primary content area start -->
				<?php if ($posts) {
					$AsideId = get_settings('fallseason_asideid');
					function stupid_hack($str)
					{
						return preg_replace('|</ul>\s*<ul class="asides">|', '', $str);
					}
					ob_start('stupid_hack');
					foreach($posts as $post)
					{
						start_wp();
					?>
					<?php if ( in_category($AsideId) && !is_single() ) : ?>
						<ul class="asides">
							<li id="p<?php the_ID(); ?>">
								<?php echo wptexturize($post->post_content); ?>							
								<br/>
								<?php comments_popup_link('(0)', '(1)','(%)')?>  | <a href="<?php the_permalink(); ?>" title="Permalink: <?php echo wptexturize(strip_tags(stripslashes($post->post_title), '')); ?>" rel="bookmark">#</a> <?php edit_post_link('(edit)'); ?>
							</li>						
						</ul>
						<?php else: // If it's a regular post or a permalink page ?>
						<div class="post" id="post-<?php the_ID(); ?>">
							<h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h4>
							<div class="contentarea">
								<p class="details"><span class="date"><?php the_time('F jS, Y') ?></span></p>	
								<div class="postcontent">
								<?php the_content('Continue Reading &raquo;'); ?>  
								<?php wp_link_pages(); ?>
								<ul class="controls">
									<li class="more">  Posted by <span class="user"><?php the_author_posts_link() ?></span>  under <?php the_category(' , ') ?> <?php edit_post_link('Edit'); ?></li>				
									<li class="comments"><?php comments_popup_link('Comments(0)', 'Comments(1)', 'Comments(%)'); ?></li>									
								</ul>
								</div><!--postcontent end-->
							</div>
						</div>													
						<?php endif; // end if in category ?>
					<?php
					}
				}
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