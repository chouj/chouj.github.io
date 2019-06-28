<?php get_header(); ?>

<div id="content">
  <div id="maincol">
	  <div class="col-inner">
		  <h2 class="pagetitle">Search Results for '<?php echo $s; ?>'</h2>
		  
		  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		  <div class="post" id="post-<?php the_ID(); ?>">
			
		    <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
			<div class="entry">
			  <?php the_excerpt(); ?>
			</div>
		  </div>
			
		  <?php endwhile; ?>
			
		  <div class="navigation">
		    <span class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></span> <span class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></span>
		  </div>
			
		  <?php else : ?>
		  	<h3>不好意思, 没搜到，换个关键词再搜馊吧.</h3>
		  <?php endif; ?>
	  </div>
  </div>

  <?php get_sidebar(); ?>

</div><!-- end #content -->

<?php include (TEMPLATEPATH . '/extra.php'); ?>

<?php get_footer(); ?>