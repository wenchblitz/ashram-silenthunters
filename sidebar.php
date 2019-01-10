<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 */
?>

<aside id="sidebar">

	<?php include("user-control-panel.php"); ?>
                
        <div class="clear"></div>

    <!--<div class="recently-active-members">
        <h1 class="sidebar-header">Recently Active Members</h1>
        <div class="small-holder">
            
            <div class="recent-active-wrapper">
            	<?php //if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : else : ?><?php //endif; ?>
			</div>--><!--recent-active-wrapper--><!--               
            
        </div>
        <div class="small-shadow"></div>
    </div>
    
        <div class="clear"></div>-->
                       
	<div class="categories">
        <h1 class="sidebar-header">Categories</h1>
        <div class="small-holder">
            
            <ul>
            	<?php wp_list_cats('sort_column=name'); ?>
            </ul>
            
        </div>
        <div class="small-shadow"></div>        
    </div>        
        
        <div class="clear"></div>
        
	<div class="archives">
        <h1 class="sidebar-header">Archives</h1>
        <div class="small-holder">
            <nav>
                 <ul>
                	<?php wp_get_archives('type=monthly'); ?>
                 </ul>
             </nav>            
        </div>
        <div class="small-shadow"></div>        
    </div>        
        
        <div class="clear"></div>
        
	<div class="recent-articles">
        <h1 class="sidebar-header">Articles</h1>
        <div class="small-holder">
            <nav>
                <ul>
                    <?php query_posts($query_string . 'showposts=4&cat=-3'); ?>                
                    <?php while (have_posts()) : the_post(); ?>                
                        <li><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>" alt="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(array(118,118)); ?></a></li>                
                    <?php endwhile;?>
                </ul>
            </nav>           
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