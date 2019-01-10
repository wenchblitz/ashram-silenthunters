<div class="panels">  
    <ul class="tabs">
        <li><a href="#">Comment Box</a></li>
        <li><a href="#">Recent Comments</a></li>  
        <li><a href="#">Guest Comments</a></li>                       
        <!--<li><a href="#">Video Sample</a></li>-->
    </ul>
      
    <div class="panes">

        <section>
            <div class="guestcomments">
                <div class="fb-comments" data-href="http://ashram-silenthunters.x10.mx/" data-num-posts="50" data-width="620"></div>
            </div><!--SHguestcomments-wrapper-->                    
        </section><!--tab-blocks-->                
        
        <section class="pane-recent-comments">
            <nav>
                <ul>                            
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
                        <figure><?php echo get_avatar( $comment, '90' ); ?></figure>
                        <div class="comment-wrapper">
                            <span class="footer_comm_author">
                            <?php echo ("<strong>".$comment->comment_author."</strong>")?></span> on <a href="<?php echo($comm_link)?>" title="<?php //comment_excerpt(); ?>" class="post_title"><?php echo $comm_title?></a>
                            <br /><a href="#comment-<?php comment_ID() ?>" class="timestamp"><time><?php comment_date('F j, Y') ?><?php _e(' at '); ?><?php comment_time('h:i A') ?></time></a>
                            <br/><?php echo wp_html_excerpt( $comment->comment_content, 300 ); ?>...
                            <!--<a href="<?php //echo($comm_link)?>" title="<?php //echo $comm_title?>">...</a>-->
                        </div><!--comment-wrapper-->                               
                    </li> 
                    
                    <?php } ?>
                    
                    <?php if($true_comment_count == 10) {break;} ?>
                    <?php endforeach;?>
                </ul>
            </nav>                   
        </section><!--tab-blocks-->            
                
        <section class="guest-comments">                    
            <iframe width="638" height="819" frameborder="0" src="http://silenthunters.123guestbook.com/"></iframe>
        </section><!--tab-blocks-->         
        
        <!--<section>
            <div style="margin: 0 auto; padding: 5px; text-align: center;">Coming Soon...</div>	
        </section><!--tab-blocks-->               
             
    </div><!--panes-->       
</div><!--panel-->
<div class="large-shadow-panes"></div>
<div class="clear"></div>