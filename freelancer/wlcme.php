<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
<title>Sedna</title>
<script type="text/javascript" src="css/coin-slider.css"></script>
<link rel="stylesheet" type="text/css" href="css/profile.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/responsive.css" />
<link rel="stylesheet" type="text/css" href="css/font.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.aw-showcase.js"></script>


<script type="text/javascript">

$(document).ready(function()
{
	$("#showcase").awShowcase(
	{
		content_width:			700,
		content_height:			470,
		fit_to_parent:			false,
		auto:					true,
		interval:				3000,
		continuous:				false,
		loading:				true,
		tooltip_width:			200,
		tooltip_icon_width:		32,
		tooltip_icon_height:	32,
		tooltip_offsetx:		18,
		tooltip_offsety:		0,
		arrows:					true,
		buttons:				true,
		btn_numbers:			true,
		keybord_keys:			true,
		mousetrace:				false, /* Trace x and y coordinates for the mouse */
		pauseonover:			true,
		stoponclick:			false,
		transition:				'hslide', /* hslide/vslide/fade */
		transition_delay:		0,
		transition_speed:		500,
		show_caption:			'onload', /* onload/onhover/show */
		thumbnails:				false,
		thumbnails_position:	'outside-last', /* outside-last/outside-first/inside-last/inside-first */
		thumbnails_direction:	'vertical', /* vertical/horizontal */
		thumbnails_slidex:		1, /* 0 = auto / 1 = slide one thumbnail / 2 = slide two thumbnails / etc. */
		dynamic_height:			false, /* For dynamic height to work in webkit you need to set the width and height of images in the source. Usually works to only set the dimension of the first slide in the showcase. */
		speed_change:			true, /* Set to true to prevent users from swithing more then one slide at once. */
		viewline:				false, /* If set to true content_width, thumbnails, transition and dynamic_height will be disabled. As for dynamic height you need to set the width and height of images in the source. */
		custom_function:		null /* Define a custom function that runs on content change */
	});
});
$(function() {
			var pull = $('#pull');
				menu = $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});

</script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-aller.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
</head>
<body>

	<section class="top-header-sec">
	<?php include("includes/header.php"); ?> 
	</section>
    	  <div class="slider" style="padding:20px">
			<div id="coin-slider"> 
				<a href="#"><img src="images/slide1.jpg" width="970" height="300" alt="" /> </a> 
				<a href="#"><img src="images/slide2.jpg" width="970" height="300" alt="" /> </a> 
				<a href="#"><img src="images/slide.jpg" width="970" height="300" alt="" /> </a>
				<a href="#"><img src="images/slide4.jpg" width="970" height="300" alt="" /> </a>
				<a href="#"><img src="images/slide6.jpg" width="970" height="300" alt="" /> </a>
				<a href="#"><img src="images/slide3.jpg" width="970" height="300" alt="" /> </a>
			</div>
      </div>
   
    <section class="content-sec">
    	<div id="wrapper">
            <div class="span8 left about-us-sec">
            	<h4>We Make Your Business Unique Globally</h4>
                <p style="line-height:22px;"><strong>Sedna</strong> is an <strong>offshore software development company</strong> that brings you the definite bottom-line benefits of offshore outsourcing in providing reliable IT Solutions. <strong>The services offered cover Customized Software Development, Application Development, Web Application Development, Agile Software Development, E-commerce Packages and Web site designing.</strong><br/><br/>

Our goal is to deliver premium quality <strong>software development services</strong> while giving unmatched value to enterprises at an <strong>affordable cost</strong>. Our transparent and efficient software development process zeros down risks of project failures. <br/><br/>

Being a privately owned and self-funded company, <strong>SEDNA</strong> is able to offer greater flexibility in the type of outsourcing relationships it engages in. We work with each client individually to assess the amount of involvement the client requires and determine the best relationship for the outsourcing arrangement may it be fully outsourced, co-sourcing, leased workstations, etc. This flexibility allows us to evolve long-term relationships with clients.</p>
			<hr/>
            <a href="#" class="gg">Read More</a>
            </div>
            <div class="span4 right testimonials">
            	<?php include("includes/right.php"); ?> 	
            
            </div>
        </div>
    	
    </section>
    <footer>
    	 	<?php include("includes/footer.php"); ?> 
    </footer>

</body>
</html>
