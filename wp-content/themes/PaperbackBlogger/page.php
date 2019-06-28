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
							<p class="details"><span class="more"></span> <span class="date"><?php the_time('F jS, Y') ?></span></p>	
							<div class="postcontent"><?php the_content('Continue Reading &raquo;'); ?>
							<ul class="controls">
										
									
							</ul>
							</div><!--postcontent end-->
						</div>
					</div>		
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