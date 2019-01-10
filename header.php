<?php

/**
 * The Header for our theme.
 * Displays all of the <head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp"> section and everything up till <div id="main">
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

?>

<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>

	<title><?php

	/*
	 * Print the <title> tag based on what is being viewed.
	 */

	global $page, $paged;

	wp_title( '|', true, 'right' );


	// Add the blog name.

	bloginfo( 'name' );

	// Add the blog description for the home/front page.

	$site_description = get_bloginfo( 'description', 'display' );
	
	if ( $site_description && ( is_home() || is_front_page() ) )

		echo " | $site_description";

	// Add a page number if necessary:

	if ( $paged >= 2 || $page >= 2 )

		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>

<meta name="title" content="¤ Silent Hunters ¤">
<meta name="description" content="Watch Out Cu'z We Hunt Silently">
<meta name="keywords" content="ashram-silenthunters, clan silenthunters, guild silenthunters, group silenthunters, www.ashram-silenthunters.x10.mx, gm wenchblitz, master wenchblitz, maharaja wenchblitz, wenchblitz, silenthunters, silent hunters, tantra vedi guild, vedi ashram, watch out cuz we hunt silently, tantra silent hunters, tantra silenthunters, ashram silenthunters, ashram silent hunters">

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" type="image/x-icon">
<link rel="image_src" type="image/jpeg" href="<?php bloginfo('template_url');?>/images/silenthunters-logo.jpg">

<!-- Mobile viewport optimized: j.mp/bplateviewport -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/reset.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="screen">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway" type="text/css">

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

<!--[if lt IE 9 ]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script>window.jQuery || document.write('<script src="<?php bloginfo('template_directory'); ?>/scripts/html5.js"><\/script>')</script>

    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/iefixes.css">
<![endif]--> 

<?php

	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */

	if ( is_singular() && get_option( 'thread_comments' ) )

		wp_enqueue_script( 'comment-reply' );


	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */

	wp_head();

?>

</head>
<body <?php body_class(); ?>>

<header class="topbar-header">
    <div class="topbar-header-wrapper">
            <div class="logo">
                <h1 class="sh-logo"><a href="<?php bloginfo('url'); ?>">silenthunters</a></h1>
            </div><!--logo-->            

            <div class="isearch">
            	<?php get_search_form(); ?>
            </div><!--search-->
    </div><!--topbar-header-wrapper-->
</header><!--topbar-header-->

	<div class="clear"></div>

<section id="header">

</section>

	<div class="clear"></div>

<nav id="navigation">
 	<ul id="menu">
        <li id="home"     			
		<?php
        if (is_page('Home'))
            {
                echo "class=\"home-current\"";
            }
        ?>><a href="<?php bloginfo('url');?>">home</a></li>           

        <li id="blog"

        <?php
			if ($wp_query->is_posts_page || is_single() || is_category() || is_archive() || is_search() || is_author())
				{
					echo "class=\"blog-current\"";
				} 
			?>         

            ><a href="<?php bloginfo('url');?>/blog">Blog</a>
                <ul>
                    <li><a href="javascript:void(0)">Categories</a>
                        <ul>
                            <?php wp_list_cats('sort_column=name'); ?>
                        </ul>                    
                    </li>
                    <li><a href="javascript:void(0)">Archives</a>
                        <ul>
                        	<?php wp_get_archives('type=monthly'); ?>
                        </ul>                    
                    </li>
                </ul>
		</li>           

        <li id="members"
        <?php
        if (is_page('Members') || is_page('Activity') || is_page('Groups'))
            {
                echo "class=\"members-current\"";
            } 
        ?>><a href="<?php bloginfo('url');?>/members">Members</a>
			<ul>
				<li><a href="<?php bloginfo('url')?>/activity/">Activity</a></li>
				<li><a href="<?php bloginfo('url')?>/groups/">Groups</a></li>
			</ul>          
        </li>        

        <li id="pictures"
        <?php
        if (is_page('Pictures'))
            {
                echo "class=\"pictures-current\"";
            } 

        ?>><a href="javascript:void(0)">Pictures</a> <!--<?php bloginfo('url');?>/pictures-->
			<ul>
				<li><a href="javascript:void(0)">Not Available</a></li>
				<!--<li><a href="<?php bloginfo('url');?>/pictures/album-1/">The Dawn of Silent Hunters</a></li>-->
				<!--<li><a href="<?php bloginfo('url');?>/pictures/album-2/">The Legacy of Silent Hunters</a></li>-->
				<!--<li><a href="<?php bloginfo('url');?>/pictures/album-3/">Memoirs of Vedi</a></li>-->
			</ul>-->
        </li>

        <li id="about"
		<?php
        if (is_page('About'))
            {
                echo "class=\"about-current\"";
            } 
        ?>><a href="<?php bloginfo('url');?>/about">About</a></li>

        <li id="extras"
		<?php
        if (is_page('Extras'))
            {
                echo "class=\"extras-current\"";
            } 
        ?>><a href="javascript:void(0)">Extras</a> <!--<a href="<?php //bloginfo('url');?>/extras">About</a>-->
			<ul>
            	<li><a href="<?php bloginfo('url');?>/signatures/">Old PH Signatures</a></li>
                <li><a href="<?php bloginfo('url');?>/elysium-signatures/">Elysium Signatures</a></li>
                <li><a href="http://tantra-elysium.forumlux.net/t1026-silent-hunters/" target="_blank">SH Forum [Elysium]</a></li>
				<li><a href="javascript:void(0)">Alliance</a>
                    <ul>
                        <li><a href="<?php bloginfo('url');?>/apc/">APC</a></li>
                    </ul>
                </li>

				<!--<li><a href="#">Games</a>
                    <ul>
                        <li><a href="#">Snake</a></li>
                        <li><a href="#">Motor</a></li>
                        <li><a href="#">Acid Factory</a></li>
                    </ul>                
                </li>
				<li><a href="#">Market</a></li>-->
			</ul>      
        </li>
	</ul>    

    <ul id="socialmedia">
    	<li id="rssfeeds"><a href="<?php bloginfo('url'); ?>/feed" alt="RSS feed" title="RSS feed">RSS</a></li>
        <li id="youtube"><a href="http://www.youtube.com/silenthunters2007/" target="_blank" alt="silenthunters2007's Channel" title="silenthunters2007's Channel">youtube</a></li>
        <li id="twitter"><a href="http://twitter.com/sil3nthunt3rs/" target="_blank" alt="@sil3nthunt3rs" title="@sil3nthunt3rs">twitter</a></li>
        <li id="facebook"><a href="http://www.facebook.com/ashram.silenthunters/" target="_blank" alt="Our Facebook Page" title="Our Facebook Page">facebook</a></li>
    </ul>	                                  
</nav>

	<div class="clear"></div>

<section id="container">
	<section id="wrapper">