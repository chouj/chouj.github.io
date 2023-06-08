<?php get_header(); ?>

  <div id="content">
	<div id="maincol">
		<div class="col-inner">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	  
	    <div class="post" id="post-<?php the_ID(); ?>">
		  <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>

		  <div class="entry">
			<?php the_content('点此查看全文 &raquo;'); ?>
		  </div>

		  <div class="post-meta">
			<small><?php the_time('F jS, Y') ?> by <?php the_author() ?> </small><small><?php if(function_exists('the_views')) { the_views(); } ?></small><small class="post-cat"><?php the_category(', ') ?></small><small class="post-comments"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></small>
		  </div>
		</div>
		
		<?php endwhile; ?>
		
		<div class="navigation">
		  <span class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></span><span class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></span>
		</div>
		
		<?php else : ?>
		
			<h3>Not Found</h3>
			<p>Sorry, but you are looking for something that isn't here.</p>
			
		<?php endif; ?>
		</div>
	</div>

	<?php get_sidebar(); ?>

  </div><!-- end #content -->

<?php include (TEMPLATEPATH . '/extra.php'); ?>

<?php get_footer(); ?>