<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
<title>Sedna</title>
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

</head>
<body>

	 <section class="top-header-sec">
	<?php include("includes/header.php"); ?> 
	</section> 
	<br/>
	<?php include("connection.php");
	$query="select * from postmanagement";
	$result=mysql_query($query);
	while($row=mysql_fetch_array($result))
{
	$id=$row['id'];
	$categoryname=$row['categoryname'];
	$title=$row['title'];
	$p_date=$row['p_date'];
	$price=$row['price'];
	$budget=$row['budget'];
	$jobdescription=$row['jobdescription'];
	$skill=$row['skill'];
	$desc=substr($jobdescription,0,10);
	}
	
	?>

	<div style="float:center">
	<form name="myform" method="post">
	Find Work<input type="search" name="googlesearch" placeholder="search for jobs" size="50" style="border-color:lightgrey; border-radius:20px">
	</div>
	<br/>
	<div style="align:center">
	<h3 class="hh">Launch your oDesk Carrier!</h3>
	<table border="3" width="30%">
		<tr>
			<td style="padding:10px"><b>Get set up and ready to work by taking the following steps:</b></td>
		</tr>
		<br/>
		<tr>
			<td>
			<a href="">Take the oDesk Readiness quiz</a></td>
		</tr>
		<tr>
			<td>Passing this open book quiz shows clients that you're ready to work</td>
		</tr>
		<br/>
		<tr>
			<td>
			<a href="" >Pass a few free skill tests</a>
			</td>
		</tr>
		<tr>
			<td>Show off your talent to potential client</td>
		</tr>
		<br/>
		<tr>
			<td>
			<a href="">Make your profile shine</td>
		</tr>
		<tr>
			<td>Freelancers with complete profiles are 10 times more likely to be hired.</td>
		</tr>	
	</table>
	</div>
	<div>
	<table>
		<tr>
			<td colspan="3">Recommended Jobs</td>
		</tr>
		<tr>
			<td colspan="3"><a href=""><?php echo $title;?></a></td>
		</tr><br/>	
		<tr>
			<td><?php echo $price; ?>-Price</td>
			<td>Budget:$<?php echo $budget; ?></td>
			<td><?php echo $desc; ?>....<a href="jobs_detail.php?id=<?php echo $id; ?>">Read More</a></td>
			<hr></hr>
		</tr>
	</table>
	</div>
	</form>
	</body>
</html>	