<?php get_header(); ?>	
	<div id="content">
		<!-- Primary content: Stuff that goes in the primary content column (by default, the left column) -->
		<div id="primarycontainer">
			<div id="primarycontent">
				<div id="contentarea"><!-- Primary content area start -->
<?php if (have_posts()) : ?>
	<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
    
    <?php /* If this is a category archive */ if (is_category()) { ?>				
		<h2 class="pagetitle">Archive for the '<?php echo single_cat_title(); ?>' Category</h2>
		
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h2>
		
	 <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h2>

		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>
		
	  <?php /* If this is a search */ } elseif (is_search()) { ?>
		<h2 class="pagetitle">Search Results</h2>
		
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pagetitle">Author Archive</h2>

		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle">Blog Archives</h2>

		<?php } ?>
		<?php while (have_posts()) : the_post(); ?>
				
			<div class="post" id="post-<?php the_ID(); ?>">
						<h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h4>
						<div class="contentarea">
							<p class="details"><span class="date"><?php the_category(' , ') ?></span> | <span class=""><?php the_time('F jS, Y') ?></span></p>	
							<?php the_excerpt('Continue Reading &raquo;'); ?> <!--<?php the_content('Continue Reading &raquo;'); ?>-->                           <small>     <a href="<?php the_permalink() ?>">Continue Reading &raquo;</a>  </small>
							<!--<ul class="controls">
								<li class="more"><?php the_author_posts_link() ?> </li>				
								<li class="comments"><?php comments_popup_link('Comments(0)', 'Comments(1)', 'Comments(%)'); ?></li>									
							</ul>-->
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