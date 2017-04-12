<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
<title>Sedna</title>
<link rel="stylesheet" type="text/css" href="css/profile.css" />
<link rel="stylesheet" type="text/css" href="css/css.css" />
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

</head>
<body>
	<?php
	include("connection.php");
	$query="select * from category";
	
	?>
	 <section class="top-header-sec">
	<?php include("includes/header.php"); ?> 
	</section> 
	 <section class="content-sec">
    	<div>
		
            <div class="span8 left about-us-sec">
			<form name="search" action="search.php" method="post">
            	<h4 class="firstdiv">Find your work <input type="search" name="find" placeholder="search for Jobs">
				<input type="submit" name="submit" value="search">
				</h4>
				</form>
				<div class="firstdiv">
			<table width="70%" cellpadding="0" cellspacing="0" id="product-table" height="100%" >
			<tr>
			<td style="padding-left:10px; padding-top:5px; padding-bottom:5px; background-color:lightgrey; margin-left:15px;"><h4>Launch your Carrier!</h4></td>
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
				<div id="wrapper1" class="firstdiv">
				<table width="20%" cellpadding="0" cellspacing="0" id="product-table" height="100%" >
				<tr>
				<th style="padding-left:10px; padding-top:5px; padding-bottom:5px; background-color:lightgrey;"><h4>My Category</h4></th>
				</tr>
				<?php
				$result=mysql_query($query);
				while($row=mysql_fetch_array($result))
				{
				$categoryname=$row['categoryname'];
				}
				?>
	
				<tr>
				<td><a href="category1.php?categoryname=Software Developer" class="gg">Software Developer</a></td>
				</tr>
				<tr>
				<td><a href="category1.php?categoryname=SEO services" class="gg">SEO services</a></td>
				</tr>
				<tr>
				<td><a href="category1.php?categoryname=Web designing" class="gg">Web Designing</a></td>
				</tr>
				<tr>
				<td><a href="category1.php?categoryname=E-commerce" class="gg">E-commerce</a></td>
				</tr>
				<td><a href="category1.php?categoryname=Database-Administrator" class="gg">Database-Administrator</a></td>
				</tr>
				
				</table>
				</div>
				<br/>
				<br/>
				<br/>
				
				
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
