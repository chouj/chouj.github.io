<?php get_header(); ?>

<?php global $options; foreach ($options as $value) {if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }} ?>

<?php if (have_posts()) : ?>

<div id="searchresults"><h2 id="search"><?php _e('Search results:', 'blank'); ?> </h2></div>
        
<?php while (have_posts()) : the_post(); ?>

<h2 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2><br />
<div class="entry-title-meta-left"></div><div class="entry-title-meta"><span class="date"><?php the_time('jS F Y'); ?></span> <span class="category"><?php the_category(','); ?></span> <?php comments_popup_link( __( '0 Comments', 'blank' ), __( '1 Comment', 'blank' ), __( '% Comments', 'blank' ), 'entry-header-comments', __('-', 'blank')); ?>
</div><div class="entry-title-meta-right"></div>

<div class="post clear" id="post-<?php the_ID(); ?>">

<div class="entry-content">
<?php if (get_option('theme_truncate_option') == 'Disabled') : ?>
<?php the_content(''); ?>
<?php else : ?>
<?php global $more; $more = 0; ?>
<?php echo truncate($theme_post_excerpt, ' ... '); ?>
<?php endif; ?>
</div>


<a class="readmore" href="<?php the_permalink() ?>" title="Continue Reading <?php the_title(); ?>">Read More <span>&raquo;</span></a>
</div><!-- end .post -->
<div class="clear hr" style="width: 620px; height: 10px;"></div>


<?php endwhile; ?>
        
<div class="paged-navigation">
<?php 
$prevlink = '<span class="prev-link">&laquo; Previous Page</span>';
$nextlink = '<span class="next-link">Next Page &raquo;</span>'; ?>

<?php posts_nav_link(' ',$prevlink,$nextlink); ?>
</div>		

<?php else : ?>

	
<div id="searchnone">
<h2 id="search"><?php _e('Nothing found. Try a different search?', 'blank'); ?></h2>
</div>
<div class="searchnothingfound">
  
  <form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
  <div><input type="text" value="<?php the_search_query(); ?>" name="s" id="s" /></div>
  <div><input type="submit" id="searchsubmit" value="<?php _e('Search'); ?>" /></div>
  </form>
  
</div>

<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>