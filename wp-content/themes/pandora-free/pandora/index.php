<?php get_header(); ?>

<?php global $options; foreach ($options as $value) {if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }} ?>

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>

<?php if (in_category($theme_featured_category)) continue; ?>

<h2 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2><br />
<div class="entry-title-meta-left"></div><div class="entry-title-meta"><span class="date"><?php the_time('Y年 n月 j日'); ?></span> <span class="category"><?php the_category(','); ?></span><span class="plusone"><g:plusone count="true" href="<?php the_permalink() ?>" size="small"></g:plusone></span> <span class="views"><?php if(function_exists('the_views')) { the_views(); } ?></span><?php comments_popup_link( __( '0 Comments', 'blank' ), __( '1 Comment', 'blank' ), __( '% Comments', 'blank' ), 'entry-header-comments', __('-', 'blank')); ?>
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
<?php if(function_exists('wp_page_numbers')) : wp_page_numbers(); endif; ?>
</div>
        
<?php else : ?>

<h2><?php _e('This page has no posts on it, please try another or return to the homepage.', 'blank'); ?></h2>

<div class="search-404">
    <?php _e('Do you want to search for it?', 'blank'); ?><br />
    <?php include (TEMPLATEPATH . "/searchform.php"); ?>
</div>
        
<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>