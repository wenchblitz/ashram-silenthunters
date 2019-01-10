<?php
/** 
	Template Name: aboutpage 
**/

get_header(); ?>
		
    <div id="main">
    <!--START PUTTING CONTENT HERE--> 
    	<article id="post-<?php the_ID(); ?>" <?php post_class();?>>       
            <div class="entry-content">
            <!--INSERT ANYTHING HERE-->
            
            	<div class="sh-history"></div>
                                
            <!--END OF INSERTING-->
            </div><!-- .entry-content -->        	                 
        </article><!--#post-##--> 
        <div class="blog-shadow"></div>
        
        <?php include("panes.php"); ?>
    <!--STOP PUTTING CONTENT HERE-->
    </div><!--#main-->

<?php get_sidebar(); ?>        
<?php get_footer(); ?>        