<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

    	<section id="main">
        <!--START PUTTING CONTENT HERE-->
           	<div id="blogpost">
                <div id="post-0" class="post error404 not-found">
                    <h1 class="entry-title"><?php _e( 'Page Not Found! (404 Error)', 'twentyten' ); ?></h1>
                    <div class="entry-content">
                        <p><?php _e( 'Apologies, but the page you requested could not be found or only registered users can access this page.', 'twentyten' ); ?></p>
                    </div><!-- .entry-content -->
                    <div class="blog-shadow"></div>
                </div><!-- #post-0 -->

					<div class="clear"></div>
    
               <?php include("panes.php"); ?>
    
                <script type="text/javascript">
                    // focus on search field after it has loaded
                    document.getElementById('s') && document.getElementById('s').focus();
                </script>        
 			</div><!--$blogpost-->	
      	<!--STOP PUTTING CONTENT HERE-->			
        </section><!--#main-->
        
<?php get_sidebar(); ?>         
<?php get_footer(); ?>