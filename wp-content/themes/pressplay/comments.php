<?php

// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die (__('Please do not load this page directly. Thanks!', 'pressplay'));

	if ( post_password_required() ) { ?>
		<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.', 'pressplay'); ?></p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
	<h3 id="comments"><?php comments_number(__('No Responses', 'pressplay'), __('One Response', 'pressplay'), __('% Responses', 'pressplay')) ;?> <?php _e('to', 'pressplay'); ?> &#8220;<?php the_title(); ?>&#8221;</h3>

	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link(__('&larr; Older Comments', 'pressplay')) ?></div>
		<div class="alignright"><?php next_comments_link(__('Newer Comments &rarr;', 'pressplay')) ?></div>
		<div class="divclear"></div>
	</div>

	<ol class="commentlist">
	<?php wp_list_comments('reply_text=Respond'); ?>
	</ol>

	<div class="navigation">
			<div class="alignleft"><?php previous_comments_link(__('&larr; Older Comments', 'pressplay')) ?></div>
			<div class="alignright"><?php next_comments_link(__('Newer Comments &rarr;', 'pressplay')) ?></div>
		<div class="divclear"></div>
	</div>
 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<?php if (is_page()){ } else { ?>
		<p>Comments are closed.</p>
		<?php } ?>

	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>

<div id="respond">

<h3><?php comment_form_title(__('Leave a Response', 'pressplay'), __('Leave a Response to %s', 'pressplay')); ?></h3>

<div class="cancel-comment-reply">
	<small><?php cancel_comment_reply_link(); ?></small>
</div>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p><?php _e('You must be', 'pressplay'); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>"><?php _e('logged in', 'pressplay'); ?></a> <?php _e('to post a comment.', 'pressplay'); ?></p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<p><?php _e('Logged in as', 'pressplay'); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _e('Log out of this account', 'pressplay'); ?>"><?php _e('Log out', 'pressplay'); ?> &raquo;</a></p>

<?php else : ?>

<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
<label for="author"><small><?php _e('Name', 'pressplay'); ?> <?php if ($req) _e('(required)', 'pressplay'); ?></small></label></p>

<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
<label for="email"><small><?php _e('Mail (will not be shared)', 'pressplay'); ?> <?php if ($req) _e('(required)', 'pressplay'); ?></small></label></p>

<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
<label for="url"><small><?php _e('Website', 'pressplay'); ?></small></label></p>

<?php endif; ?>

<!--<p><small><?php _e('<strong>XHTML:</strong> You can use these tags: ','pressplay');?><code><?php echo allowed_tags(); ?></code></small></p>-->

<p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>

<p><input name="submit" type="submit" id="submit" tabindex="5" value="<?php _e('Submit Comment', 'pressplay'); ?>" />
<?php comment_id_fields(); ?>
</p>
<p><?php do_action('comment_form', $post->ID); // for plugins ?></p>

</form>

<?php endif; // If registration required and not logged in ?>
</div>

<?php endif; // if you delete this the sky will fall on your head ?>
