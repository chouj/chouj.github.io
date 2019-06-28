<?php
function custom_pings($comment, $args, $depth) {$GLOBALS['comment'] = $comment; ?>
<li <?php comment_class(); ?> id="comment-<?php comment_ID( ); ?>">
<?php _e('Trackback from', 'blank'); ?>
<em><?php comment_author_link() ?></em>
<br /><small><?php comment_date('l, j F, Y') ?></small>
<br /><?php comment_text() ?>
<?php edit_comment_link( __('Edit', 'blank'),'<br /> &nbsp;|&nbsp; ',''); ?>
<?php } ?>
<?php
add_filter('get_comments_number', 'comment_count', 0);

function comment_count( $count ) {
global $id;
$comments_by_type = &separate_comments(get_comments('post_id=' . $id));
return count($comments_by_type['comment']);
}

?>