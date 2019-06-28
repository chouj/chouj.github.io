<?php get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="post" id="post-<?php the_ID(); ?>">
<p class="post-date"><?php the_time('n-j Y'); ?></p><h2><p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2></p>
<p class="details_small">
<?php the_category(', ') ?> 
</p>
<?php the_content(); ?>
<?php link_pages('<p><strong>'.__('Pages:').'</strong> ', '</p>', 'number'); ?>
<p>转载原创文章请注明，转载自：<strong><?php bloginfo('name'); ?></strong>[<a href="<?php echo get_settings('home'); ?>"><?php echo get_settings('home'); ?></a>]<br>本文链接: <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_permalink(); ?></a><br>订阅本站：<a href="http://feed.xuchi.name" title="本站FEED">RSS Feed</a><br>收藏本文：<?php akst_share_link(); ?></p>

</div>
<div class="navigation">
<span class="alignleft"><?php previous_post_link('&laquo; %link') ?></span>
<span class="alignright"><?php next_post_link('%link &raquo;') ?></span>
</div>
<?php comments_template(); ?>
<?php endwhile; ?>
<?php else : ?>
<div class="post">
<h2>Not found</h2>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
</div>	
<?php endif; ?>
<?php get_footer(); ?>
