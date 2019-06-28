<?php

if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) die ('Access denied.');

if (!empty($post->post_password)) 
{
	if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) { ?>

		<p class="nocomments"><?php _e('Enter your password to view comments.'); ?></p>
				
	<?php
		return;
	}
}
$oddcomment = 'alt';

?>

<?php if ($comments) : ?>

	<h3 id="comments"><?php comments_number(__('No Comments'), __('1 Comment'), __('% Comments')); ?></h3>
	<ol class="commentlist">

		<?php foreach ($comments as $comment) : ?>

			<li class="<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">
				<?php
					if ( function_exists('gravatar') ) {
						gravatar_image_link(); 
					}
					else {
						if ( function_exists( sh_avatar ) ) {
							sh_avatar();
						}
					}
				?>
				<big><?php comment_author_link() ?></big>
				<?php if ($comment->comment_approved == '0') : ?>
					<span class="await_mod">Await Moderation</span>
				<?php endif; ?>
				
				<span class="comment_data"><a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('F j, Y') ?> @ <?php comment_time() ?></a> <?php edit_comment_link(__("Edit This"), '# ',''); ?></span>

				<?php comment_text() ?>

			</li>

			<?php	
				if ('alt' == $oddcomment) $oddcomment = '';
				else $oddcomment = 'alt';
			?>

		<?php endforeach; ?>

	</ol>

<?php else : ?>

  <?php if ('open' == $post-> comment_status) : ?> 
		
	<?php else : ?>

		<p class="nocomments"><?php _e('Sorry, the comment form is closed at this time.'); ?></p>
		
	<?php endif; ?>

<?php endif; ?>

<?php if ('open' == $post-> comment_status) : ?>

	<h3 id="respond"><?php _e("Leave a comment"); ?></h3>

	<?php if ( get_option('comment_registration') && !$user_ID ) : ?>

		<p><a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">Login</a></p>

	<?php else : ?>

		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

		<?php if ( $user_ID ) : ?>

			<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<?php _e('Log out of this account') ?>">Logout</a></p>

		<?php else : ?>

			<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
			<label for="author"><small>大名: <?php if ($req) _e('(必需)'); ?></small></label></p>
			<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
			<label for="email"><small>电邮: (不会公开) <?php if ($req) _e('(必需)'); ?></small></label></p>
			<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
			<label for="url"><small>网址</small></label></p>
		
		<?php endif; ?>
<?php 
/****** Math Comment Spam Protection Plugin ******/
if ( function_exists('math_comment_spam_protection') ) { 
	$mcsp_info = math_comment_spam_protection();
?> 	<p><input type="text" name="mcspvalue" id="mcspvalue" value="" size="22" tabindex="4" />
	<label for="mcspvalue"><small>麻烦您给出算数题的答案（必需）： <?php echo $mcsp_info['operand1'] . ' + ' . $mcsp_info['operand2'] . ' = ?' ?></small></label>
	<input type="hidden" name="mcspinfo" value="<?php echo $mcsp_info['result']; ?>" />
</p>
<?php } // if function_exists... ?>
		<p class="allowed-tags"><small><strong>XHTML:</strong>  <?php _e('You can use these tags:'); ?> <?php echo allowed_tags(); ?></small></p>

		<p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>
		<p><input name="submit" type="submit" id="submit" tabindex="5" value="<?php _e("Leave a comment"); ?>"/>
		<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></p>

		<?php do_action('comment_form', $post->ID); ?>

		</form>

	<?php endif; ?>

<?php endif; ?>
