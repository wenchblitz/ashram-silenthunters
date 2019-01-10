<?php

/* Template Name: extraspage
 */

get_header(); ?>
		
    <div id="main">
    <!--START PUTTING CONTENT HERE-->
    
    <div class="extraspage-wrapper">
    
		<div class="extras-video">
            <h1 class="extras-header">Video</h1>
            <div class="small-holder">
                
				<iframe width="315" height="235" class="tantra-video" src="http://www.youtube.com/embed/cgyqoqjZMBA?autohide=1?feature=player_detailpage&wmode=transparent" frameborder="0" allowfullscreen></iframe>
                
            </div>
            <div class="extras-shadow"></div>        
        </div>
        
        <div class="extras-music">
            <h1 class="extras-header">music</h1>
            <div class="small-holder">
				<embed src="http://assets.myflashfetish.com/swf/mp3/fetish-mp3player.swf?myid=1403780&path=2007/03/05" quality="high" wmode="transparent" bgcolor="ffffff" flashvars="mycolor=ffffff&mycolor2=000000&mycolor3=787878&autoplay=false&rand=0&f=4&vol=100&pat=1&grad=false" width="315" height="232" name="myflashfetish" salign="TL" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" border="0" style="visibility:visible;width:315px;height:232px;" />
            </div>
            <div class="extras-shadow"></div>        
        </div>
        
	        <div class="clear"></div>
            
		<div class="anime-ost">
			<h1 class="info-holder main-header">Anime OST</h1>
				<?php if ( is_user_logged_in() ) : ?>
                
                    <embed src="http://assets.myflashfetish.com/swf/mp3/mixpod.swf?myid=40221341&path=2010/01/03" quality="high" wmode="transparent" bgcolor="222222" flashvars="mycolor=222222&mycolor2=77ADD1&mycolor3=FFFFFF&autoplay=false&rand=0&f=4&vol=100&pat=0&grad=false" width="640" height="900" name="myflashfetish" salign="TL" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" border="0" style="visibility:visible;width:640px;height:900px;" /></embed>            
                
                <?php else : ?>
    
                    <embed src="http://assets.myflashfetish.com/swf/mp3/mixpod.swf?myid=40221341&path=2010/01/03" quality="high" wmode="transparent" bgcolor="222222" flashvars="mycolor=222222&mycolor2=77ADD1&mycolor3=FFFFFF&autoplay=false&rand=0&f=4&vol=100&pat=0&grad=false" width="640" height="855" name="myflashfetish" salign="TL" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" border="0" style="visibility:visible;width:640px;height:855px;" /></embed>
                
                <?php endif; ?>
        </div><!--anime-ost-->
        <div class="large-shadow"></div>
                
    </div><!--extraspage-wrapper-->
      
    <!--STOP PUTTING CONTENT HERE-->
    </div><!--#main-->

<?php include("sidebar-extras.php"); ?>        
<?php get_footer(); ?>        