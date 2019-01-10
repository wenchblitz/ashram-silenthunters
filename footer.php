<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	//get_sidebar( 'footer' );
?>

	</section><!--wrapper-->
</section><!--container-->

	<div class="clear"></div>

<footer id="footer">
    <div class="footer-wrapper">
    	<div class="first-layer-footer">
        	<div class="about-the-author">
            	<h1>The Maharaja</h1>
				<div><span><a href="http://www.facebook.com/wenchblitz/">author</a></span></div>
                <p><?php the_author_meta('description'); ?></p>
            </div><!--author-->
            
            <div class="contact-us">
            	<h1>contact us</h1>
                <div class="email-us"><p><strong>Email:</strong> silenthunters_2007@yahoo.com or use the form below.</p></div><!--email-us-->
                <form name="contact_form" method="post" action="<?php bloginfo('template_url');?>/mailer.php" class="contact-form" onSubmit="return evalid()">
                	<ul class="contact-elements">
                    	<li><input name="fname" type="text" placeholder="Name (Required)" title="Name (Required)" class="contact-txtbox" /></li>
                        <li><input name="mail" type="text" placeholder="Email (Required)" title="Email (Required)" class="contact-txtbox" /></li>
                        <li><textarea name="message" onKeyUp="return limitarelungime(this, 255)" class="contact-txtarea" placeholder="Message..." title="Message..."></textarea></li>
                        <li>
                        	<ul class="contact-anti-spam">
                            	<li id="anti-spam-label"><label>50 - 23 = </label></li>
                                <li id="anti-spam-txtbox"><input name="human" type="text" maxlength="2" class="contact-anti-spam-txtbox" /></li>
                                <li><input type="submit" name="Submit" value="Send Message" class="contact-submitbutton"></li>
                            </ul>
                        </li>
                   </ul>
                </form>                          
            </div><!--contact-->
            
            <div class="recent-comments">
            	<h1>recent comments</h1>
                <nav>
                    <ul class="footer-comments">
                        
                        <?php
                          $comments = get_comments('number=10&amp;amp;status=approve');                
                          $true_comment_count = 0;                
                          foreach($comments as $comment) :
                        ?>
                        
                        <?php $comment_type = get_comment_type(); ?>
                        <?php if($comment_type == 'comment') { ?>
                        
                        <?php $true_comment_count = $true_comment_count +1; ?>
                        
                        <?php $comm_title = get_the_title($comment->comment_post_ID);?>
                        <?php $comm_link = get_comment_link($comment->comment_ID);?>
                        <?php $comm_comm_temp = get_comment($comment->comment_ID,ARRAY_A);?>
                        <?php $comm_content = $comm_comm_temp['comment_content'];?>
                        
                        <li>
    						<figure><?php echo get_avatar( $comment, '60' ); ?></figure>
                            <span class="footer_comm_author">
    							<?php echo ("<strong>".$comment->comment_author."</strong>")?></span> on <a href="<?php echo($comm_link)?>" title="<?php //comment_excerpt(); ?>" class="post_title"><?php echo $comm_title?></a>
                            <br /><a href="#comment-<?php comment_ID() ?>" class="timestamp"><time><?php comment_date('F j, Y') ?><?php _e(' at '); ?><?php comment_time('h:i A') ?></time></a>
                            <?php echo wp_html_excerpt( $comment->comment_content, 35 ); ?>...
                        </li> 
                        
                        <?php } ?>
                        
                        <?php if($true_comment_count == 4) {break;} ?>
                        <?php endforeach;?>
                	</ul>
                </nav>                 
            </div><!--comments-->
   
        </div><!--1st-->
        
        <div class="second-layer-footer">
            <div class="foot-nav">
    			<nav class="footer-navigation"> 
                	<ul>
                    	<li><a href="<?php bloginfo('url');?>">Home</a></li>
                        <li><a href="<?php bloginfo('url');?>/blog">Blog</a></li>
                        <li><a href="<?php bloginfo('url');?>/members">Members</a></li>
                        <li><a href="<?php bloginfo('url');?>/pictures">Pictures</a></li>
                        <li><a href="<?php bloginfo('url');?>/about">About</a></li>
                        <li><a href="<?php bloginfo('url');?>/extras">Extras</a></li>
                    </ul>                    
                </nav>
                <div class="copyright">Copyright 2012, All Rights Reserved</div>
            </div><!--.foot-nav-->
            
            <div class="powered-by">                   	
                <div class="html5-wrapper">
                    <a href="http://www.w3.org/html/logo/" target="_blank">
                    	<figure><img src="<?php bloginfo('template_url');?>/images/html5-badge-h-css3-semantics.png" alt="HTML5 Powered with CSS3 / Styling, and Semantics" title="HTML5 Powered with CSS3 / Styling, and Semantics"></figure>
                    </a>
				</div><!--html5-wrapper--> 
                
                <div class="wordpress-buddypress-wrapper">
                	<ul>
                    	<li><a href="http://wordpress.org/" title="Wordpress.org" alt="Wordpress.org" class="wordpress_logo" target="_blank">Wordpress</a></li>
                        <li><a href="http://buddypress.org" title="Buddypress.org" alt="Buddypress.org" class="buddypress_logo" target="_blank">Buddypress</a></li>
                    </ul>
                </div><!--wordpress-wrapper--> 
                
                <div class="powered_by">Proudly Powered by:</div>                             
            </div><!--powered-by-->
        </div><!--2rd-->
    
    </div><!--footer-wrapper-->
</footer>

<!-- <script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-tools/1.2.7/jquery.tools.min.js"></script> -->
<!-- <script	src="https://code.jquery.com/jquery-1.7.1.min.js"
		integrity="sha256-iBcUE/x23aI6syuqF7EeT/+JFBxjPs5zeFJEXxumwb0="
		crossorigin="anonymous"></script> -->
<script src="<?php bloginfo('template_url');?>/jquery.tools.min.js"></script>		
<script src="<?php bloginfo('template_url');?>/coolscripts.js"></script>
<script src="<?php bloginfo('template_url');?>/jquery.bxSlider.min.js"></script>
<script src="<?php bloginfo('template_url');?>/jquery.easing.1.3.js"></script>
<script src="<?php bloginfo('template_url');?>/jquery.easing.1.3.js"></script>
<script src="<?php bloginfo('template_url');?>/jquery.inputhints.js"></script>
<script src="<?php bloginfo('template_url');?>/jquery.inputhints.min.js"></script>

<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway" type="text/css">

<!-- Prompt IE 6 users to install Chrome Frame. We suggest that you not support IE 6. chromium.org/developers/how-tos/chrome-frame-getting-started -->
<!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
<![endif]-->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */
	wp_footer();
?>

</body>
</html>