<?php if ('open' == $post->comment_status) : ?>
<div id="respond_box">
<div id="respond">
<div id="real-avatar">
<?php if(isset($_COOKIE['comment_author_email_'.COOKIEHASH])) : ?>
<?php echo get_avatar($comment_author_email, 40);?>
<?php else :?>
<?php global $user_email; echo get_avatar($user_email, 40); ?>
<?php endif;?>
</div>
<h3>发表评论</h3>
<div class="cancel-comment-reply">
<small><?php cancel_comment_reply_link(); ?></small>
</div>
<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p style="margin: 0 0 20px 0;line-height: 20px;float:right;">您必须<a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>"> [ 登录 ] </a>才能发表留言！</p>
<?php else : ?>
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
<?php if ( $user_ID ) : ?>
<p style="margin: 0 0 20px 0;line-height: 20px;float:right;">当前用户：
<a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>&nbsp;&nbsp;
<a href="<?php echo wp_logout_url(get_permalink()); ?>" title="退出登陆" date-ajax=false><?php print '[ 退出登陆 ]'; ?></a>
</p>
<?php elseif ( '' != $comment_author ): ?>
<p style="margin: 0 0 20px 0;line-height: 20px;float:right;"><?php printf(__('欢迎回来 <strong>%s</strong>'), $comment_author); ?>
<a href="javascript:toggleCommentAuthorInfo();" id="toggle-comment-author-info" date-ajax=false>[ 更改 ]</a></p>
<script type="text/javascript" charset="utf-8">
var changeMsg = "[ 更改 ]";
var closeMsg = "[ 隐藏 ]";
function toggleCommentAuthorInfo() {
jQuery('#comment-author-info').slideToggle('slow', function(){
if ( jQuery('#comment-author-info').css('display') == 'none' ) {
jQuery('#toggle-comment-author-info').text(changeMsg);
} else {
jQuery('#toggle-comment-author-info').text(closeMsg);
}
});
}
jQuery(document).ready(function(){
jQuery('#comment-author-info').hide();
});
</script>

<?php endif; ?>

<?php if ( ! $user_ID ): ?>
<div id="comment-author-info">
<span><label for="author">签名</label><input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="14" tabindex="1" /><em>*</em></span>
<span><label for="email">邮箱</label><input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="25" tabindex="2" /><em>*</em></span>
<span><label for="url">网址</label><input type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="36" tabindex="3" /></span>
</div>
<?php endif; ?>
<div class="clear"></div>
<p><textarea name="comment" id="comment" tabindex="4" cols="50" rows="5"></textarea></p>
<p>
<input class="submit" name="submit" type="submit" id="submit" tabindex="5" value="提 交" />
<input class="reset" name="reset" type="reset" id="reset" tabindex="6" value="重 置" />
<?php comment_id_fields(); ?>
</p>
<script type="text/javascript">
jQuery(document).keypress(function(e){
if(e.ctrlKey && e.which == 13 || e.which == 10) { 
jQuery(".submit").click();
document.body.focus();
} else if (e.shiftKey && e.which==13 || e.which == 10) {
jQuery(".submit").click();
}
})
</script>
<?php do_action('comment_form', $post->ID); ?>
</form>
<div class="clear"></div>
<?php endif;?>
</div>
</div>
<?php endif;?>​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​

<?php // Do not delete these lines
if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
die ('Please do not load this page directly. Thanks!');
if (!empty($post->post_password)) {
if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {
?>
<p style="margin:20px 0 40px;text-align:center;">Use the password to view comments.</p>
<?php
return;
}
}
$oddcomment = '';
if ($comments) : ?>
<div id="comments"><span><?php comments_number('0', '1', '%' );?> Comments</span></div>
<ol class="commentlist">
<?php wp_list_comments('avatar_size=60'); ?>  
</ol>
<nav class="pagination"><?php paginate_comments_links('prev_text=«&next_text=»');?></nav>
<?php else : if ('open' == $post->comment_status) : ?>
<p style="margin:20px 0 40px;text-align:center;">Looking forward to your comments.</p>
 <?php else : ?>
<p style="margin:20px 0 40px;text-align:center;">Comments feature has been turned off.</p>
<?php endif; ?>
<?php endif; ?>
<?php //get_archives('postbypost', 10); ?>