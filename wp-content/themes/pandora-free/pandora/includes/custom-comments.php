<?php function custom_comment($comment, $args, $depth) { $GLOBALS['comment'] = $comment; ?>

<li <?php comment_class(); ?> id="comment-<?php comment_ID( ); ?>">

<div class="gravatar-wrap"><?php echo get_avatar( $comment, $size = '44', $default = 'images/gravatar.gif');  ?></div>

<span class="left-meta left">
  <span class="comment-author"><?php comment_author_link(); ?></span><br />
  <span class="comment-meta"><?php comment_date('G:i') ?> on <?php comment_date('F jS, Y') ?></span>
</span>
<span class="reply right">
  <?php echo comment_reply_link(array('reply_text' => __('Reply to comment', 'blank'), 'depth' => $depth, 'max_depth' => $args['max_depth']));  ?>
</span>

<?php comment_text() ?>

<?php if ($comment->comment_approved == '0') : //message if comment is held for moderation ?>
  <em><?php _e('Your comment is awaiting moderation', 'blank'); ?>.</em>
<?php endif; ?>

<?php }?>