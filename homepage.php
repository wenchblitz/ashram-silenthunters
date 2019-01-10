<?php

/* Template Name: homepage
 */

get_header(); ?>
		
    <div id="main">
    <!--START PUTTING CONTENT HERE-->
    <div class="image-slider">
            <ul id="slider">
                <li><figure><img src="<?php bloginfo('template_url');?>/images/slide/1.jpg" alt="" title=""/></figure></li>
                <li><figure><img src="<?php bloginfo('template_url');?>/images/slide/2.jpg" alt="" title=""/></figure></li>
                <li><figure><img src="<?php bloginfo('template_url');?>/images/slide/3.jpg" alt="" title=""/></figure></li>
                <li><figure><img src="<?php bloginfo('template_url');?>/images/slide/4.jpg" alt="" title=""/></figure></li>
                <li><figure><img src="<?php bloginfo('template_url');?>/images/slide/5.jpg" alt="" title=""/></figure></li>
                <li><figure><img src="<?php bloginfo('template_url');?>/images/slide/6.jpg" alt="" title=""/></figure></li>
                <li><figure><img src="<?php bloginfo('template_url');?>/images/slide/7.jpg" alt="" title=""/></figure></li>
                <li><figure><img src="<?php bloginfo('template_url');?>/images/slide/8.jpg" alt="" title=""/></figure></li>
                <li><figure><img src="<?php bloginfo('template_url');?>/images/slide/9.jpg" alt="" title=""/></figure></li>
                <li><figure><img src="<?php bloginfo('template_url');?>/images/slide/10.jpg" alt="" title=""/></figure></li>
                <li><figure><img src="<?php bloginfo('template_url');?>/images/slide/11.jpg" alt="" title=""/></figure></li>
            </ul>
        </div>
       	<!--<div class="large-shadow"></div>-->
    
            <div class="clear"></div>
    
		<div class="announcement">
            <h1 class="main-header">News &amp; Latest Updates</h1>
            <div class="large-holder">
            <!--HOLDER-->
                <div class="news-and-updates"> 
                   		<ul>
                        <?php query_posts($query_string . 'showposts=10'); ?>
                        
                        <?php while (have_posts()) : the_post(); ?>
                        
                        	<li>
                           		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>									
                                    <div class="latest-entry">                                    
                                        <div class="post-image">
                                            <figure><?php the_post_thumbnail(array(90,90)); ?></figure>                        
                                        </div><!--//post-image-->
                                        
                                        <div class="post-details">
                                            <div class="entry-meta">
                                                <?php twentyten_posted_on(); ?> in <?php the_category(', ') ?>
                                            </div><!--.entry-meta-->
                                            
                                            <h1 class="entry-title">
                                            <?php the_title(); ?>		
                                            </h1>
                                            <?php the_excerpt(); ?>
                                        </div><!--//post-details-->
                                        
                                        <!--<div class="view-more-link">                                    
                                        	<a href="<?php //the_permalink(); ?>" title="<?php //printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">View More</a>
                                        </div><!--read-more-link-->
                                    </div><!--latest-entry-->
                                </article><!--#post-->       
                            <!--END OF A NORMAL POST-->
                            </li>
                        
                        <?php endwhile;?>
                        </ul>
                    </div><!--ashrampost-->
            <!--END OF HOLDER-->    	
            </div>        
        </div>
        <div class="large-shadow"></div>    

			<div class="clear"></div>
    
		<?php include("panes.php"); ?>
        
    <!--STOP PUTTING CONTENT HERE-->
    </div><!--#main-->

<?php include("sidebar-home.php"); ?>        
<?php get_footer(); ?>        