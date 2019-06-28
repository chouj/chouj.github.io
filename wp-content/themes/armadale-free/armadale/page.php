<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="post" id="page">

<div class="post-date">
      <div class="day"><?php the_time('d') ?></div>
	  <div class="month"><?php the_time('M') ?></div>
</div>

<div class="postpadding">
<h2 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

<div class="entry-content" id="page-content">
<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
</div><!-- end #page-content -->

</div><!-- end .postpadding -->
</div><!-- end #page -->

<?php endwhile; endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>