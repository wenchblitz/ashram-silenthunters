<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

    	<section id="main">
        <!--START PUTTING CONTENT HERE-->
        	<div id="blogsingle">
					<?php
                    /* Run the loop to output the post.
                     * If you want to overload this in a child theme then include a file
                     * called loop-single.php and that will be used instead.
                     */
                    get_template_part( 'loop', 'single' );
                    ?>
             </div><!--#blogsingle-->
      	<!--STOP PUTTING CONTENT HERE-->		
        </section><!--#main-->
        
<?php get_sidebar(); ?>		
<?php get_footer(); ?>
