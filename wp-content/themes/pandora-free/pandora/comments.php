<?php // Do not delete these lines
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
   die ('Please do not load this page directly. Thanks!');
   if (!empty($post->post_password)) { // if there's a password
   if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
   ?>
   <p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments', 'blank') ?>.</p>
   <?php
   return;
   }
  }
?>
<?php if (function_exists('wp_list_comments')) : ?>

<?php if ( have_comments() ) : ?>
 
<?php if ( ! empty($comments_by_type['comment']) ) : ?>
        

<div class="commentlist-top"></div>
<ul class="commentlist">

<li style="background: none; border: none; padding: 0; margin: 0;"><h3 id="comments"><?php comments_number( __('No responses to', 'blank'), __('One response to', 'blank'), __('% responses to', 'blank'));?> <span>"<?php the_title(); ?>"</span></h3></li>
<?php wp_list_comments('callback=custom_comment&type=comment'); //'custom_comment' are edited in [themes/blank/functions.php] ?>
</ul>

<div class="navigation comment-nav">
<!-- if paged comments/pings are enabled in admin -->
<div class="nav-prev"><?php previous_comments_link() ?></div>
<div class="nav-next"><?php next_comments_link() ?></div>
</div>

<?php endif; ?>

<ul class="pinglist">
<li> </li>

<?php if ( ! empty($comments_by_type['pings']) ) : ?> 
   
<li><h3 id="pings"><?php _e('Trackbacks', 'blank') ?></h3></li>   
<?php wp_list_comments('callback=custom_pings&type=pings'); //'custom_pings' are edited in [...themes/blank/functions.php] ?>	

<?php endif; ?>

</ul>

<?php else : //If there are no comments ?>
	
	<?php if ('open' == $post->comment_status) : ?>
	<div class="commentlist-top"></div>
	<?php else : endif; ?>
	
<?php endif; ?>

<?php else : ?>	
<?php endif; ?>

<?php if ('open' == $post->comment_status) : ?>

<ul class="respond-ul">
<li id="respond">

<h2 id="leaveareply">Leave a Reply</h2>

<div id="cancel-comment-reply"><?php cancel_comment_reply_link( __('Cancel reply', 'blank')) ?></div>


<?php if ( get_option('comment_registration') && !$user_ID ) : ?><p><?php _e('You must be', 'blank'); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>"><?php _e('logged in', 'blank'); ?></a> <?php _e('to post a comment', 'blank'); ?>.</p>
<?php else : ?><form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
<?php if ( $user_ID ) : ?><p><?php _e('Logged in as', 'blank'); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<?php _e('Log out', 'blank'); ?>"><?php _e('Log out', 'blank'); ?> &raquo;</a></p>
<?php else : ?>

<span style="color: #4c93a3;">*</span><span> Required</span><br />
<span style="color: #4c93a3;">**</span><span> Your Email is never shared</span>

<div class="divform">
<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="30" tabindex="1" class="text<?php if ($req) echo ' required'; ?>" />
<label for="author"><?php _e('Name', 'blank' ) ?> <?php if ($req) echo '<span>*</span>'; ?></label>
</div>

<div class="divform">
<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="30" tabindex="2" class="text<?php if ($req) echo ' required'; ?>" />
<label for="email"><?php _e('Email', 'blank' ) ?> <?php if ($req) echo '<span>**</span> '; ?><?php _e('', 'blank' ) ?></label>
</div>

<div class="divform">
<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="30" tabindex="3" />
<label for="url"><?php _e('Website', 'blank' ) ?></label>
</div>

<?php if ( function_exists('math_comment_spam_protection') ) {
$mcsp_info = math_comment_spam_protection();
?> <p><input type="text" name="<?php echo $mcsp_info['fieldname_answer'] ?>" id="<?php echo $mcsp_info['fieldname_answer'] ?>" value="" size="22" tabindex="4" />
<label for="<?php echo $mcsp_info['fieldname_answer'] ?>">Spam protection: Sum of <?php echo $mcsp_info['operand1'] . ' + ' . $mcsp_info['operand2'] . ' ?' ?></label>
<input type="hidden" name="<?php echo $mcsp_info['fieldname_hash'] ?>" value="<?php echo $mcsp_info['result']; ?>" />
</p>
<?php } // if function_exists... ?>

<?php endif; ?>

<div class="divform">
<?php comment_id_fields(); ?>
<input type="hidden" name="redirect_to" value="<?php echo htmlspecialchars($_SERVER["REQUEST_URI"]); ?>" />
</div>

<div class="textarea-top"></div>
<div><textarea name="comment" id="comment" cols="50" rows="10" tabindex="4"></textarea></div>
<div class="textarea-bottom"></div>

<div class="submit-button">
<input style="border:none;" name="submit" type="submit" id="submit" tabindex="5" value="<?php _e(' ', 'blank') ?>" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
</div>
<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>

</li><!-- end #respond -->
</ul>
<div class="commentlist-bottom"></div>

<?php endif; // if you delete this the sky will fall on your head ?>
