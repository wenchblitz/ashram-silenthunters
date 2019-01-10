<?php
/** 
	Template Name: picturepage 
**/

get_header(); ?>
		
    <div id="main">
    <!--START PUTTING CONTENT HERE--> 
    	<article id="post-<?php the_ID(); ?>" <?php post_class();?>>       
            <div class="entry-content">
            <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
            <!--INSERT ANYTHING HERE-->            
            	
                <div class="photogallery-wrapper">
                	<ul>
                    	<li id="album-one"><a href="http://ashram-silenthunters.x10.mx/pictures/album-1/" alt="The Dawn of ¤ Silent Hunters ¤" title="The Dawn of ¤ Silent Hunters ¤">Album 1</a></li>
                        <li id="album-two"><a href="http://ashram-silenthunters.x10.mx/pictures/album-2/" alt="Vedi ¤ Silent Hunters ¤" title="Vedi ¤ Silent Hunters ¤">Album 2</a></li>
                        <li id="album-three"><a href="http://ashram-silenthunters.x10.mx/pictures/album-3/" alt="Memoirs Of Vedi" title="Memoirs Of Vedi">Album 3</a></li>
                    </ul>
                </div>                
                
            <!--END OF INSERTING-->
            </div><!-- .entry-content -->        	                 
        </article><!--#post-##--> 
        <div class="blog-shadow"></div>
        
        <?php include("panes.php"); ?>
    <!--STOP PUTTING CONTENT HERE-->
    </div><!--#main-->

<?php get_sidebar(); ?>       
<?php get_footer(); ?>        