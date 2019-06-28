<?php get_header(); ?>

<?php global $options; foreach ($options as $value) {if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }} ?>

<?php if (have_posts()) : ?>

<div id="searchresults"><h2 id="search"><?php _e('Search results:', 'blank'); ?> </h2></div>
        
<?php while (have_posts()) : the_post(); ?>
	
<div class="post post-index" id="post-<?php the_ID(); ?>">

<div class="post-date">
      <div class="day"><?php the_time('d') ?></div>
	  <div class="month"><?php the_time('M') ?></div>
</div>

<div class="postpadding">

<h2 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
<div class="entry-header">
<span><strong>Categories: </strong><?php the_category(', '); ?>&nbsp; | &nbsp;</span>
<?php comments_popup_link( __( 'No Comments', 'blank' ), __( 'Comments(1)', 'blank' ), __( 'Comments(%)', 'blank' ), 'comments-style', __('-', 'blank')); ?>
</div>

<div class="entry-content entry-content-index">
<?php the_content(''); ?>
</div>

<a class="readmore" href="<?php the_permalink(''); ?>"></a>

</div><!-- end .postpadding -->
<div class="hr"></div>
</div><!-- end .post -->
        
<?php endwhile; ?>
        
<div class="navigation navigation-index">
  <div class="nav-prev"><?php next_posts_link( __('&laquo; Older Entries', 'blank')) ?></div>
  <div class="nav-next"><?php previous_posts_link( __('Newer Entries &raquo;', 'blank')) ?></div>
</div>

		

<?php else : ?>

	
<div id="searchnone"><h2 id="search"><?php _e('Nothing found. Try a different search?', 'blank'); ?></h2></div>
<div class="searchnothingfound">
  
  <form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
  <div><input type="text" value="<?php the_search_query(); ?>" name="s" id="s" /></div>
  <div><input type="submit" id="searchsubmit" value="<?php _e('Search'); ?>" /></div>
  </form>
  
</div>

<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>