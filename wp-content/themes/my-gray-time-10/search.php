<?php get_header(); ?>
<?php if (have_posts()) : ?>
<h2><?php _e("Search"); ?>: " <?php echo $_GET['s']; ?> "</h2>
<?php while (have_posts()) : the_post(); ?>
<div class="post ricerca" id="post-<?php the_ID(); ?>">
<h3><a class="red" href="<?php the_permalink() ?>" rel="bookmark" title="Permalink: <?php the_title(); ?>"><?php the_title(); ?></a> &raquo; <small><?php the_time('F j, Y') ?></small></h3>
<?php the_excerpt(); ?>
<p><a class="red" href="<?php the_permalink() ?>" rel="bookmark" title="Permalink: <?php the_title(); ?>"><?php _e('(more...)'); ?></a></p>
</div>
<?php endwhile; ?>
<div class="navigation">
<?php posts_nav_link('', '<span class="alignleft">'. __('&laquo; Previous Page') .'</span>', '<span class="alignright">'. __('Next Page &raquo;').'</span>'); ?>
</div>
<?php else : ?>
<div class="post">
<h2>Not found</h2>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
</div>
<?php endif; ?>
<?php get_footer(); ?>
