<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		       
<div class="post" id="post-single">

<div class="post-date">
      <div class="day"><?php the_time('d') ?></div>
	  <div class="month"><?php the_time('M') ?></div>
</div>

<div class="postpadding">

<h2 class="entry-title"><?php the_title(); ?></h2>
<div class="entry-header">
<span><strong>Categories: </strong><?php the_category(', '); ?>&nbsp; | &nbsp;<strong>Tags: </strong><?php the_tags(''); ?></span>
</div>


<div class="entry-content" id="entry-content-single">
<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
                
</div><!-- end .entry-content -->

</div><!-- end .postpadding -->
</div><!-- end .post -->

<div class="navigation" id="nav-single">
	<div class="nav-prev nav-prev-single"><?php previous_post_link('&laquo; %link') ?></div>
	<div class="nav-next" id="nav-next-single"><?php next_post_link('%link &raquo;') ?></div>
</div>
<?php comments_template('', true); ?>

<?php endwhile; else: ?>

<?php _e('Sorry, no posts matched your criteria', 'blank'); ?>.

<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
