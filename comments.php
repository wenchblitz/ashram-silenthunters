<?php
 
// Do not delete these lines
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
die ('Please do not load this page directly. Thanks!');
 
if ( post_password_required() ) { ?>
<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
<?php
return;
}
?>
 
<!-- You can start editing here. -->
 
<?php if ( have_comments() ) : ?>
	<h3 id="comments"><?php comments_number('No Responses', 'One Response', '% Responses' );?></h3>
 
    <ol class="commentlist">
    	<?php wp_list_comments('callback=mytheme_comment'); ?>
    </ol>
    <div class="comment-shadow"></div>
     
		<div class="clear"></div><!--.clear-->
        
    <!--COMMNENTS CLOSED-->
		<?php if ('open' == $post->comment_status) : ?>
    
        <!--If comments are open, but there are no comments.-->
        <?php else : // comments are closed ?>
    
        <!--If comments are closed.-->
        <div class="nocomments">Comments are closed.</div>
        <div class="blog-shadow"></div>
        <?php endif; ?>
    <!--//COMMNENTS CLOSED-->
           
	<?php
		global $wpdb;
		$postID = get_the_ID();
		$comments = $wpdb->get_row("SELECT comment_count as count FROM wp_posts WHERE ID = '$postID'");
		$commentcount = $comments->count;
		if($commentcount <= 10): 
    ?>        
    	<!--Do Nothing-->        
    <?php else: ?>
    
        <div class="comment-navigation">  
            <?php paginate_comments_links(); ?>        
        </div><!--comment-navigation-->
        <div class="clear"></div><!--.clear-->
        
    <?php endif; ?>
    
<?php else : // this is displayed if there are no comments so far ?>
 
<?php if ('open' == $post->comment_status) : ?>
<!-- If comments are open, but there are no comments. -->
 
<?php else : // comments are closed ?>
<!-- If comments are closed. -->
<div class="nocomments">Sorry, Comments are closed!</div>
<div class="blog-shadow"></div>
 
<?php endif; ?>
<?php endif; ?>
 
<?php if ('open' == $post->comment_status) : ?>

<section id="respond">

<h3><?php comment_form_title( 'Leave a Reply', 'Leave a Reply to %s' ); ?></h3>
 
<div class="cancel-comment-reply">
	<h3><?php cancel_comment_reply_link('Cancel Reply'); ?></h3>
</div>
 
<?php if ( get_option('comment_registration') && !$user_ID ) : ?>

	<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
    
<?php else : ?>

<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
	<?php if ( $user_ID ) : ?>
     
                <p class="admin-panel">
                    Logged in as: <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a><a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account" class="right logout-link">LogOut</a>
                </p><!--.admin-panel-->
     
    <?php else : ?>
    
    <ul> 
        <li><input type="text" name="author" id="author" class="txtbox" title="Name (Required)" placeholder="Name (Required)" value="<?php echo $comment_author; ?>" size="22" tabindex="1" /></li>
        <li><input type="text" name="email" id="email" class="txtbox" title="Email (Required)" placeholder="Email (Required)" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2"/></li>
        <li><input type="text" name="url" id="url" class="txtbox" title="Website" placeholder="Website (Optional)" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" /></li>
    </ul>
     
    <?php endif; ?>
     
    <!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->
     
    <textarea name="comment" id="comment" class="txtarea" title="Message" placeholder="Message" rows="10" tabindex="4"></textarea>
    <input name="submit" type="submit" id="submit" class="submit-comment" tabindex="5" value="Submit Comment" />
    <!--<div class="gravatar"><a href="http://en.gravatar.com/" target="_new" class="en-gravatar">Gravatar</a></div><!--.gravatar-->
    
    <?php comment_id_fields(); ?><?php do_action('comment_form', $post->ID); ?>
 
</form>
 
<?php endif; // If registration required and not logged in ?>
</div><!--respond-->
 
<?php endif; // if you delete this the sky will fall on your head ?>