<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 */
?>

<aside id="sidebar">

	<?php include("user-control-panel.php"); ?>
        
        <div class="clear"></div>
        
	<div class="recently-active-members">
        <h1 class="sidebar-header">Recently Active Members</h1>
        <div class="small-holder">
            
            <div class="recent-active-wrapper">
            	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : else : ?><?php endif; ?>
			</div><!--recent-active-wrapper-->                
            
        </div>
        <div class="small-shadow"></div>
    </div>
    
        <div class="clear"></div>            
	        
    <div class="keypressers">
        <h1 class="sidebar-header">Keypressers</h1>
        <div class="small-holder">
            
            <ul>
            	<li>
                	<div class="tantra-kp">
                    	<h1>Tantra KP Beta 1.5b.1</h1>
                    	<ul>
                        	<li><figure><img src="<?php bloginfo('template_url');?>/images/Keypresser-Tantra-KP-Beta.png" alt="" title=""></figure></li>
                            <li><a href="http://www.mediafire.com/download/a7378ho47f84581/Tantra_KP_Beta_1.5b.1.exe" target="_blank">Download</a></li>
                        </ul>
                    </div>                    	
                </li>
                
                <li>
                	<div class="tantra-bot-system">
	                    <h1>Tantra Bot System 1.05</h1>
                    	<ul>
                        	<li><figure><img src="<?php bloginfo('template_url');?>/images/Keypresser-TBSv1v2.png" alt="" title=""></figure></li>
                             <li><a href="http://www.mediafire.com/download/dl51rj0u7ql9c4f/Tantra_Bot_System_1.05.exe" target="_blank">Download</a></li>
                        </ul>
                    </div>
                </li>
                
                <!--
                <li>
                	<div class="cybersystems">
                    	<h1>CyberSystems</h1>
                    	<ul>
                        	<li><figure><img src="<?php bloginfo('template_url');?>/images/Keypresser-CyberSystems.png" alt="" title=""></figure></li>
                            <li><a href="http://www.fileden.com/files/2007/2/3/727548/Files/CyberSystems.rar">Download</a></li>
                        </ul>
                    </div>
                </li>
                -->
                
            </ul>
            
        </div>
        <div class="small-shadow"></div>
    </div>   
    
        <div class="clear"></div>  
                                
    <div class="widget">
        <h1 class="sidebar-header">Widgets</h1>
        <div class="small-holder">
            <ul class="widget-holder">
                <li>
                	<p align="center"><script type="text/javascript" src="http://mycalendar.org/calendar.php?cp3_Hex=FFB200&cp2_Hex=FFFFFF&cp1_Hex=000080&ham=0&img=&hbg=1&hfg=1&sid=0&fwdt=180&&widget_number=2"></script></p>
                </li>
                            
                <li>
                    <p align="center"><embed src="http://www.clocklink.com/clocks/5005-black.swf?TimeZone=GMT0800&"  width="120" height="40" wmode="transparent" type="application/x-shockwave-flash"></p>
                </li>
                                
                <li>              
                    <p align="center">
                        <!--<object type="application/x-shockwave-flash" data="http://static.hotelscombined.com.s3.amazonaws.com/swf/small_weather_widget.swf" 	id="w4ac51256b91a3ac44af9cdc8829cfe7c" height="52" width="160">	<param value="http://static.hotelscombined.com.s3.amazonaws.com/swf/small_weather_widget.swf" name="movie"/>	<param value="transparent" name="wmode">	<param value="station_id=RPLL&city_name=Manila&language=en&use_celsius=Yes&skinName=Gray&PID=70844&ts=201209151239&hideChangeSkin=No" name="flashvars">	<param value="all" name="allowNetworking">	<param value="always" name="allowScriptAccess"></object>-->
                        
                        <!--<embed src="http://www.weatherlet.com/weather.swf?locid=RPXX0017&unit=s" title="Free Online Weather for WordPress, Blogspot, Blogger, Drupal, TypePad, MySpace, Facebook, Bebo, Piczo, Xanga, Freewebs, Netvibes, Pageflakes, iGoogle and other blogs and web pages" quality="high" wmode="transparent" bgcolor="#CC00CC" width="184" height="76" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />-->
                        
                        <embed src="http://www.weatherlet.com/weather.swf?locid=RPXX0017&unit=m" title="Free Online Weather for WordPress, Blogspot, Blogger, Drupal, TypePad, MySpace, Facebook, Bebo, Piczo, Xanga, Freewebs, Netvibes, Pageflakes, iGoogle and other blogs and web pages" quality="high" wmode="transparent" bgcolor="#CC00CC" width="184" height="76" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
              
                    
                    </p>
                </li>                
                
                <!--<li>
                	<p align="center"><embed src="http://assets.myflashfetish.com/swf/mp3/minime.swf?myid=55581721&path=2010/05/28" quality="high" wmode="transparent" flashvars="mycolor=333333&mycolor2=cccccc&mycolor3=6b6b6b&autoplay=false&rand=0&f=4&vol=100&pat=0&grad=false" width="160" height="68" name="myflashfetish" salign="TL" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" border="0" style="visibility:visible;width:160px;height:68px;" /></embed></p>
                </li>-->                           
            </ul><!--widget-holder-->
                        
                        <!--<embed src="http://www.clocklink.com/clocks/5025-white.swf?TimeZone=GMT0800&" width="180" height="180" wmode="transparent" type="application/x-shockwave-flash">-->                            
                        <!--<embed src="http://www.clocklink.com/clocks/5012-black.swf?TimeZone=GMT0800&"  width="186" height="50" wmode="transparent" type="application/x-shockwave-flash">-->
        </div>
    </div>
    <div class="small-shadow"></div>
    
        <div class="clear"></div>        
        
	<!--<div class="apc-page">
        <h1 class="sidebar-header">Alpha Phi Chupapee</h1>
        <div class="small-holder">
            
			<p align="center" style="margin: 0 auto; padding: 25px 25px 25px 25px;"><a href="<?php //bloginfo('url')?>/apc">Enter Page</a></p>
            
        </div>
        <div class="small-shadow"></div>
    </div> 
    
        <div class="clear"></div>-->          
        
    <div class="likebox">
        <h1 class="sidebar-header">Like Box</h1>
            <div class="small-holder">
            <!--########## HOLDER ##########-->
            
              <!--<div class="fb-like-box" data-width="290" data-height="490" data-href="http://www.facebook.com/ashram.silenthunters" data-border-color="#F5F5F5" data-show-faces="true" data-stream="false" data-header="false"></div>-->
	
	<div class="fb-page" data-href="https://www.facebook.com/ashram.silenthunters" data-width="290" data-height="490" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/ashram.silenthunters"><a href="https://www.facebook.com/ashram.silenthunters">¤ Silen† Hun†ers ¤</a></blockquote></div></div>
              
            <!--########## HOLDER ##########-->
            </div>
            <div class="small-shadow"></div>  
                   
            <!--<div id="fb-root"></div>
            <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
            </script>-->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


    </div><!--like-->
    
    <?php include("chatango.php"); ?>
       
</aside><!--sidebar-->