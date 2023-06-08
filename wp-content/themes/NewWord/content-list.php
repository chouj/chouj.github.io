<article class="post" itemscope="" itemtype="http://schema.org/BlogPosting">
<h2 itemprop="name headline"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
<img src="<?php echo esc_url( Bing_crop_thumbnail( get_content_first_image(get_the_content()), 180, 120 ) ) ; ?>"/>
<p><?php echo mb_strimwidth(strip_shortcodes(strip_tags(apply_filters('the_content', $post->post_content))), 0, 200,"...");?></p>
<div class="clearfix"></div>
<div class="info">
<div class="time"><?php the_date('Y-m-d') ?></div>
<div class="tags"><?php comments_number('0', '1', '%' );?> Comments</div>
</div>
<div class="clearfix"></div>
</article>