<?php
/*
Template Name: Search Page
*/
?>

<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>


    	<section id="main">
        <!--START PUTTING CONTENT HERE-->
        
			<?php get_search_form(); ?>
            
      	<!--STOP PUTTING CONTENT HERE-->	
        </section><!--#main--> 

<?php get_sidebar(); ?>
<?php get_footer(); ?>
