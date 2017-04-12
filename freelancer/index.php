<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
<title>Sedna</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />

<script type="text/javascript" src="css/coin-slider.css"></script>
<link rel="stylesheet" type="text/css" href="css/responsive.css" />
<link rel="stylesheet" type="text/css" href="css/font.css" />
<link rel="stylesheet" type="text/css" href="css/profile.css" />
<link rel="stylesheet" type="text/css" href="css/recentnews.css" />

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
<script>
function validation()
	{
	if(document.myform.yourname.value=='')
		{
		alert("Please enter your name!");
		document.myform.yourname.focus();
		return false;
		}
		if(document.myform.email.value=='')
		{
		alert("Please enter valid email address!");
		document.myform.email.focus();
		return false;
		}
		if(document.myform.contactnumber.value=='')
		{
		alert("Please enter your contact number!");
		document.myform.contactnumber.focus();
		return false;
		}
		if(document.myform.message.value=='')
		{
		alert("Please write your message!");
		document.myform.message.focus();
		return false;
		}
	return true;
	}

</script>
</head>
<body>

	<section class="top-header-sec">
	<?php include("includes/header.php"); ?> 
	</section>
	<div id="wrapper">
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
   </div>
 
    <section class="content-sec">
    	<div id="wrapper">
            <div class="span8 left about-us-sec">
            	<h4 style="color:#FF6600;">We Make Your Business Unique Globally</h4>
                <h6 style="font:20px 'Conv_HelveticaNeueLTStd-LtCn'; color:#0f70b8; margin-bottom:22px;">
				 marketplaces are websites that match buyers and sellers of services provided via the internet.<br>
				Buyers bid on services at a fixed price or at an hourly rate. <br>
				These marketplaces allow people to sign up remotely for freelance assignments and get paid through a merchant account.<br>
				Freelance employment has been common in the areas of writing, editing, translation, indexing, software development, website design, advertising, open innovations, information technology, and business process outsourcing.<br>
				Freelance journalists, for example, may find it easier to start their own or shared news blogs, with many blogs growing into highly trafficked and competitive news sites capable of hiring dedicated staff and other talent.<br>
			A freelancer or (freelance worker) is a self-employed person working in a profession or trade in which full-time employment is also common. 
			The word's etymology derives from the medieval term for a mercenary, a "free lance," which literally described a knight who was not attached to any particular lord, and could be hired for a given task.
           Freelance practice varies greatly among its practitioners. Some require clients to sign written contracts, while others may perform work based on verbal agreements. 
		   Some freelancers may provide written estimates of work and request deposits from clients, though for others this is not practical or necessary.<br><br>
		   
		   
		   Freelancing is so flexible, you can set your own hours, working full or part-time on the projects of your choice. While clients can offer specifications to the work, a freelancer works similar to an independent contractor, in which he's free to control how the work is completed. This is an important distinction for tax purposes, because the IRS views employees and independent contractors differently.<br><br>

Further, freelancing allows you to set your own price, which is often higher than what you'd make as an employee doing the same work. <br><br>

The regularity of freelance work can vary. Many freelancers work for the same set of clients over a long period of time. For example, a freelance writer might have a client that requires an article twice a week ongoing.<br><br>

Others work with clients over shorter periods, usually on specific projects. For example, a freelance web designer might build a website for a client and once the site is done, so is the work relationship. <br><br>
		   
		   
		   </h6> <a class="gg" href="#">Read More</a>
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
