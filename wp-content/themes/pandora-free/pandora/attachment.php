<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="post" id="post-<?php the_ID(); ?>">
   
<div class="entry-header"><h2 class="entry-title"><a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment"><?php echo get_the_title($post->post_parent); ?></a> &raquo; <?php the_title(); ?></h2></div>   
<div class="entry">
            
<p class="attachment"><a href="<?php echo wp_get_attachment_url($post->ID); ?>"><?php echo wp_get_attachment_image( $post->ID, 'medium' ); ?></a></p>
<div class="caption"><?php if ( !empty($post->post_excerpt) ) the_excerpt(); // this is the "caption" ?></div>

<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

<div class="navigation">
	<div class="alignleft"><?php previous_image_link() ?></div>
	<div class="alignright"><?php next_image_link() ?></div>
</div>
	
<div class="entry-footer" id="entry-meta-attach">
              
              	 <?php the_tags( __('Tags ', 'blank'), ", ", " " ) ?>
                 <?php _e('This attachment was posted', 'blank'); ?>
                 <?php the_time('l, F j, Y') ?> <?php _e('at ', 'blank'); ?> <?php the_time() ?>	
                 <?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
			     // Both Comments and Pings are open ?>
				 <?php _e('You can ', 'blank'); ?><a href="#respond"> <?php _e('leave a response ', 'blank'); ?></a> <?php _e('or', 'blank'); ?> <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> <?php _e('from your own site', 'blank'); ?>.
                 <?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
                 // Only Pings are Open ?>
                 <?php _e('Responses are currently closed, but you can', 'blank'); ?> <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> <?php _e('from your own site', 'blank'); ?>.
                 <?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
                 // Comments are open, Pings are not ?>                            
                 <?php _e(' You can skip to the end and leave a response. Pinging is currently not allowed.', 'blank'); ?>
                 <?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
                 // Neither Comments, nor Pings are open ?>
                 <?php _e('Both comments and pings are currently closed.', 'blank'); ?>
                 <?php } edit_post_link( __('Edit'), ' | ', ''); ?>
</div> <!-- end .entry-meta -->
				
</div><!-- end .post -->		

<?php comments_template(); ?>

<?php endwhile; else: ?>

<p>Sorry, no attachments matched your criteria.</p>

<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
