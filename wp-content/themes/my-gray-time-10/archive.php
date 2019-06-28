<?php get_header(); ?>
<?php if (have_posts()) : ?>
<?php $post = $posts[0]; ?>
<?php if (is_category()) { ?>
<h2> ' <?php echo single_cat_title(); ?> '</h2>
<?php } elseif (is_day()) { ?>
<h2><?php _e('Archives:'); ?> <?php the_time('j F Y'); ?></h2>
<?php } elseif (is_month()) { ?>
<h2><?php _e('Archives:'); ?> <?php the_time('F Y'); ?></h2>
<?php } elseif (is_year()) { ?>
<h2><?php _e('Archives:'); ?> <?php the_time('Y'); ?></h2>
<?php } elseif (is_search()) { ?>
<h2><?php _e("Search"); ?></h2>
<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
<h2><?php _e('Archives:'); ?></h2>
<?php } ?>
<div class="post">
<ul class="recenti">
<?php while (have_posts()) : the_post(); $loopcounter++; ?>
<li class="sinistro"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permalink: <?php the_title(); ?>"><?php the_title(); ?></a> # <?php comments_popup_link(0, 1, '%','no-back',0); ?></li>
<li class="destro"><?php the_time('F j, Y') ?></li>
<?php endwhile; ?>
</ul>
<br class="clear" />
</div>
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
