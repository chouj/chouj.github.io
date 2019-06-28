<?php function custom_comment($comment, $args, $depth) { $GLOBALS['comment'] = $comment; ?>

<li <?php comment_class(); ?> id="comment-<?php comment_ID( ); ?>">

<div class="comment-meta">
  <span class="right">Comment posted on <?php comment_date('jS F Y'); ?> at <?php comment_date('G:i'); ?></span>
  <span class="author"><?php comment_author_link(); ?></span>
</div>


<div class="gravatar-text">
<div class="gravatar-wrap">
<?php echo get_avatar( $comment, $size = '45', $default = 'images/gravatar.gif');  ?>
</div>
<?php comment_text() ?>
<?php if ($comment->comment_approved == '0') : //message if comment is held for moderation ?>
  <em><?php _e('Your comment is awaiting moderation', 'blank'); ?>.</em>
<?php endif; ?>
</div>

<div class="comment-reply">
<?php echo comment_reply_link(array('reply_text' => __('Reply to Comment', 'blank'), 'depth' => $depth, 'max_depth' => $args['max_depth']));  ?>
</div>


<div class="prop"></div>

<?php }?>