<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h2 class="entry-title"><?php the_title(); ?></h2><br />
<div class="entry-title-meta-left"></div><div class="entry-title-meta"><span class="date"><?php the_time('Y年 n月 j日'); ?></span> <span class="category"><?php the_category(','); ?></span> <?php comments_popup_link( __( '0 Comments', 'blank' ), __( '1 Comment', 'blank' ), __( '% Comments', 'blank' ), 'entry-header-comments', __('-', 'blank')); ?>
</div><div class="entry-title-meta-right"></div>

<div class="post clear" id="post-<?php the_ID(); ?>">

<div class="entry-content">
<?php the_content(''); ?>
</div>


</div><!-- end .post -->

<?php endwhile; endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>