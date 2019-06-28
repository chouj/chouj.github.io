<?php get_header(); ?>	
	<div id="content">
		<!-- Primary content: Stuff that goes in the primary content column (by default, the left column) -->
		<div id="primarycontainer">
			<div id="primarycontent">
				<div id="contentarea"><!-- Primary content area start -->
				<?php if (have_posts()) : ?>
				<h2 class="pagetitle">Search Results for "<?php echo $s;?>"</h2>
				<?php while (have_posts()) : the_post(); ?>
				
				<div class="post" id="post-<?php the_ID(); ?>">
						<h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h4>
						<div class="contentarea">
							<?php the_excerpt(); ?>	<small><a href="<?php the_permalink() ?>">Continue Reading &raquo;</a> </small>						
						</div>
					</div>		
	
		<?php endwhile; ?>

		<p align="center"><?php posts_nav_link(' - ','&#171; Prev','Next &#187;') ?></p>
		
	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
	<?php endif; ?>
</div><!-- primarycontent end -->
		</div><!-- primarycontainer end -->
	</div><!--content end -->
<?php get_sidebar(); ?>
<?php get_footer();?>