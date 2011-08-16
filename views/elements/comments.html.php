<fieldset>
	
<legend><?php comment_form_title( 'Leave a Reply', 'Leave a Reply to %s' ); ?></legend>

<div class="cancel-comment-reply">
	<small><?php cancel_comment_reply_link(); ?></small>
</div>

<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
	
</fieldset>
