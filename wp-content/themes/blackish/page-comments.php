<?php /*
	Template Name: Page Template with Comments
*/ ?>

<?php get_header(); ?>

<div id="content">
  <div id="maincol">
	  <div class="col-inner">
 		  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		    <div class="post" id="post-<?php the_ID(); ?>">
		        <h3><?php the_title(); ?></h3>
		        <div class="entry">
					<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
		
					<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
		        </div>
		    </div>
			
		  <?php endwhile; endif; ?>
		  <?php comments_template(); ?>
	  </div>
  </div>

  <?php get_sidebar(); ?>

</div><!-- end #content -->

<?php include (TEMPLATEPATH . '/extra.php'); ?>

<?php get_footer(); ?>