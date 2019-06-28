<?php
function src_simple_recent_comments($src_count=7, $src_length=60, $pre_HTML='<li><h2>Recent Comments</h2>', $post_HTML='</li>') { 
global $wpdb;

$sql = "SELECT DISTINCT ID, post_title, post_password, comment_ID, comment_post_ID, comment_author, comment_date_gmt, comment_approved, comment_type,
SUBSTRING(comment_content,1,$src_length) AS com_excerpt
FROM $wpdb->comments
LEFT OUTER JOIN $wpdb->posts ON ($wpdb->comments.comment_post_ID = $wpdb->posts.ID)
WHERE comment_approved = '1' AND comment_type = '' AND post_password = ''
ORDER BY comment_date_gmt DESC
LIMIT $src_count";

$comments = $wpdb->get_results($sql);
$output = $pre_HTML;
$output .= "\n<ul class=\"recentcomments\">";

foreach ($comments as $comment) {
$output .= "\n\t<li><a href=\"" . get_permalink($comment->ID) . "#comment-" . $comment->comment_ID . "\" title=\"on " . $comment->post_title . "\">" . $comment->comment_author . ": <span>" . strip_tags($comment->com_excerpt) . "...</span></a></li>";
}
$output .= "\n</ul>";
$output .= $post_HTML;
echo $output;
}

register_sidebar_widget ( 'ajaxwidget', 'ajax_widget' );

function ajax_widget(){
?>

<div class="widget ajaxbg">
<div class="ajaxtop"></div>
<ul class="ajax-titles">
<li><a href="javascript: ajaxrecentposts();" id="recentposts3" class="ajax-widget-title ajax-widget-title-selected">Posts</a></li>
<li><a href="javascript: ajaxrecentcomments();" id="recentcomments3" class="ajax-widget-title">Comments</a></li>
<li><a href="javascript: ajaxtags();" id="tags3" class="ajax-widget-title">Tags</a></li>
</ul>
<div class="clear" style="height: 0; width: 0;"></div>
<div id="recentpostsdisplay">
<div class="widget-bg">
<ul>
<?php global $post; $myposts = get_posts('numberposts=5'); foreach($myposts as $post) :?>
<li><a href="<?php the_permalink(); ?>"><?php the_title();?></a></li>
<?php endforeach; ?>
</ul>
</div>
</div>
	  
<div id="recentcommentsdisplay" style="display: none;">
<div class="widget-bg">
<?php if (function_exists('src_simple_recent_comments')) {
src_simple_recent_comments(5, 20, '', '');
}
?>
</div>
</div>
<div id="tagsdisplay" style="display: none;">
<div class="widget-bg">
<ul class="tagcloud"><li><?php wp_tag_cloud(''); ?></li></ul>
</div>
</div>
	  

</div>
<div class="widget-footer"></div>
<?php } ?>