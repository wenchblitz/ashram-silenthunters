<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 */
?>

<aside id="sidebar">

	<?php include("user-control-panel.php"); ?>
                
        <div class="clear"></div>

    <div class="recently-active-members">
        <h1 class="sidebar-header">Recently Active Members</h1>
        <div class="small-holder">
            
            <div class="recent-active-wrapper">
            	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : else : ?><?php endif; ?>
			</div><!--recent-active-wrapper-->                
            
        </div>
        <div class="small-shadow"></div>
    </div>
    
        <div class="clear"></div>                       
                
    <div class="likebox">
        <h1 class="sidebar-header">Like Box</h1>
            <div class="small-holder">
            <!--########## HOLDER ##########-->
            
              <div class="fb-like-box" data-width="290" data-height="490" data-href="http://www.facebook.com/ashram.silenthunters" data-border-color="#F5F5F5" data-show-faces="true" data-stream="false" data-header="false">
              </div>
              
            <!--########## HOLDER ##########-->
            </div>
            <div class="small-shadow"></div>  
                   
            <div id="fb-root"></div>
            <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
            </script>
    </div><!--like-->         
    
    <?php include("chatango.php"); ?>
                  
</aside><!--sidebar-->