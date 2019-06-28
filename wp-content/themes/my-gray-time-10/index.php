<?php get_header(); ?>

<?php if (have_posts()) : ?>

<?php $post = $posts[0]; // Hack. Setta la variabile $post in modo che la funzione the_date() venga eseguita correttamente. ?>

	<?php while (have_posts()) : the_post(); $loopcounter++; ?>

		<div class="post" id="post-<?php the_ID(); ?>">

			<p class="post-date"><?php the_time('n-j Y'); ?></p><h2><p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2></p>
			
				<p class="details_small">
					<?php the_category(', ') ?> 
					<?php edit_post_link(__('Edit This'), '| ',''); ?>
					
					<?php comments_popup_link(__('Comments (0)'), __('Comments (1)'), __('Comments (%)')); ?>
					
				</p>
			

			<?php the_content(); ?>

		</div>

		
<?php endwhile; ?>

		<div class="navigation">
			<?php { wp_pagenavi(); } ?>
		</div>

<?php else : ?>

	<h2 class="center">Not found</h2>
	<p class="center"><?php _e('对不起，没有搜索到相关文章。'); ?></p>
	
<?php endif; ?>

<?php get_footer(); ?>
