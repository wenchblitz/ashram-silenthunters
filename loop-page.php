<?php
/**
 * The loop that displays a page.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-page.php.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.2
 */
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				
				<article id="post-<?php the_ID(); ?>" <?php post_class();?>>                              
					<?php if ( is_front_page() ) { ?>
						<h1 class="entry-title><?php the_title(); ?> </h1>
					<?php } else { ?>
						<h2 class="entry-title"><?php the_title(); ?></h2>
					<?php } ?>
			   
					<div class="entry-content">
                    <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>                         
                    	<?php the_content(); ?>
					</div><!-- .entry-content -->
					                 
				</article><!--#post-##--> 
                <div class="blog-shadow"></div>     
                
	            <?php edit_post_link( __( 'Edit', 'twentyten' ), '<div class="edit-link">', '</div>' ); ?>                                                                                                      				
                
                <div class="clear"></div>
                
                <div class="comment-wrapper"><?php comments_template( '', true ); ?></div>
                                                
<?php endwhile; // end of the loop. ?>