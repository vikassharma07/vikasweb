
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
<title>Sedna</title>
<script type="text/javascript" src="css/coin-slider.css"></script>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/css.css" />
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

</head>
<body>

	<section class="top-header-sec">
	<?php include("includes/header.php"); ?> 
	</section>
    	  
    <section class="content-sec">
    	<div id="wrapper">
            <div class="span8 left about-us-sec">
            	<h4>Find your work <input type="text" name="search" value="search for Jobs">
				<input type="submit" name="submit" value="search">
				</h4>
				<div>
			<table width="70%" cellpadding="0" cellspacing="0" id="product-table" height="100%" >
			<tr>
			<td bgcolor="grey"><h4>Launch your Carrier!</h4></td>
			</tr>
			<tr>
			<tr>
			<td><h5>Get Setup And Ready To Work By Taking Following Steps</h5></td>
			</tr>
			<tr>
			<td>
			<h2>1.Take the readiness quizz</h2>
		<h2>2.Pass a few free skills test<h2>
			<h2>3.Make your Profile shine</h2>
			</td>
			</tr>
			
				</table >
				</div>
				<br/>
				<br/>
				<br/>
				<div id="wrapper">
				<table width="20%" cellpadding="0" cellspacing="0" id="product-table" height="100%" >
				<tr>
				<th class="table-header-repeat line-left minwidth-1"><a href="">My Category</a></th>
				</tr>
				<tr>
				<td><h2>abc<h2></td>
				</tr>
				<tr>
				<td><h2>xyz</h2></td>
				</tr>
				<tr>
				<td><a href="#">Edit My Category</a></td>
				</tr>
				</table>
				</div>
				<br/>
				<br/>
				<br/>
				
				<h4><u>Recommended Jobs</u></h4>
				
			

</CENTER>
</BODY>
</HTML>

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
