//On Resume Next
function stoperror(){
return true
}
window.onerror=stoperror

/* TextArea & TextField */
function SelectAll(id) {
    document.getElementById(id).focus();
    document.getElementById(id).select();
}

//Static DIV
$(document).ready( function() {
	//float topbar when scroll
    $(window).scroll( function() {
        if ($(window).scrollTop() > $('#header').offset().top) 
			{
				$('.topbar-header').addClass('floating');
				$('#header').addClass('height');			
			}			
        else 
			{
				$('.topbar-header').removeClass('floating');
				$('#header').removeClass('height');
			}
    } );
	
	//float chatbox when scroll
	$(window).scroll( function() {
		if ($(window).scrollTop() > $('.chatbox-float').offset().top) 
			{
				
				if($('#sidebar').height() > $('#main').height()) 
					{
						$('.chatbox').removeClass('floating');	
					}
					
					else 
						{				
							$('.chatbox').addClass('floating');	
						}
			} 						
				else
					 {
						$('.chatbox').removeClass('floating');					
					 }			
	});
} );

//drop down menu
$(document).ready(function () {
    $('#menu li#members a').click(function () {
    $('div.the-components').slideToggle('medium');
    }).hover();
});

//placeholder alternative for IE
if ($.browser.msie) {
	$(document).ready(function(){
		$('input[title]').inputHints();
		$('textarea[title]').inputHints();
	});
  }
  
else {
	
	//Do Nothing :D
}

//Hover Menu
jQuery(document).ready(function(){	
	//Set the anchor link opacity to 0 and begin hover function
	jQuery("ul#menu li, ul#socialmedia li a, .about-the-author div a").css({"opacity" : 0}).hover(function(){ 

		//Fade to an opacity of 1 at a speed of 200ms
		jQuery(this).stop().animate({"opacity" : 1}, 350); 
	
		//On mouse-off
		}, function(){

		//Fade to an opacity of 0 at a speed of 100ms
		jQuery(this).stop().animate({"opacity" : 0}, 250); 		
	});
});	

//jQuery UI Tabs
if ( ($.browser.msie) && ($.browser.version <= '8.0') ){
	jQuery(document).ready(function(){	
		// setup ul.tabs to work as tabs for each div directly under div.panes
		jQuery("ul.tabs").tabs("div.panes > section", {effect: 'fade', fadeInSpeed: 500});
		jQuery(".likebox .small-holder, .chatbox .small-holder, .large-holder, .wrapper, html, body").fadeIn(3000); //fadeIn, slideDown(3000)
	});
} else {	
	$(function() {
		// setup ul.tabs to work as tabs for each div directly under div.panes
		$("ul.tabs").tabs("div.panes > section", {effect: 'fade', fadeInSpeed: 500});
		$(".likebox .small-holder, .chatbox .small-holder, .large-holder, .wrapper, html, body").fadeIn(3000); //fadeIn, slideDown(3000)
	});		
}

//bxSlider
jQuery(document).ready(function(){
  jQuery('#slider').bxSlider({
    mode:'fade',
    infiniteLoop: true,
    auto: true,
    speed: 850,
    autoHover: true,
    pager: false,
    controls: false
  });
});

//Smooth Scrolling
$(document).ready(function() {
      function filterPath(string) {
        return string
          .replace(/^\//,'')  
          .replace(/(index|default).[a-zA-Z]{3,4}$/,'')  
          .replace(/\/$/,'');
      }
      $('a[href*=#]').each(function() {
        if ( filterPath(location.pathname) == filterPath(this.pathname)
        && location.hostname == this.hostname
        && this.hash.replace(/#/,'') ) {
          var $targetId = $(this.hash), $targetAnchor = $('[name=' + this.hash.slice(1) +']');
          var $target = $targetId.length ? $targetId : $targetAnchor.length ? $targetAnchor : false;
           if ($target) {
             var targetOffset = $target.offset().top;
             $(this).click(function() {
               $('html, body').animate({scrollTop: targetOffset}, 1500); /*2000*/
               return false;
             });
          }
        }
      });
    });