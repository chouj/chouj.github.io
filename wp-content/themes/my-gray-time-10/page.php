<?php get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="post" id="post-<?php the_ID(); ?>">
<h2><?php the_title(); ?></h2>
<?php the_content(); ?>
<?php link_pages('<p><strong>'.__('Pages:').'</strong> ', '</p>', 'number'); ?>
</div>
<?php endwhile; ?>
<?php else : ?>
<div class="post">
<h2>Not found</h2>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
</div>
<?php endif; ?>
<?php get_footer(); ?>
