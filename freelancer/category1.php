<?php ob_start(); ?>
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
	
	 <section class="top-header-sec">
	<?php include("includes/header.php"); ?> 
	<?php

if(isset($_SESSION['uname']))
{
}
else{
header("location:userlogin.php");
exit;
}

?>
	</section> 
	 <section class="content-sec">
    	<div id="wrapper">
            <div class="span8 left about-us-sec">
	
			<h4 class="profilehead">Recommended Jobs</h4>
			<?php
	$categoryname=$_GET['categoryname'];
	include("connection.php");
	$query="select * from postmanagement where categoryname='".$categoryname."'";
	$result=mysql_query($query);
	while($row=mysql_fetch_array($result))
	{
	$id=$row['id'];
	$title=$row['title'];
	$date=$row['p_date'];
	$price=$row['price'];
	$time=$row['est_time'];
	$budget=$row['budget'];
	$description=$row['jobdescription'];
	$desc=substr($description,0,300);
	$skill=$row['skill'];
	
	?>
				
	<table>
		<tr>
			<td colspan="3" style="font-size:30px"><a class="gg" href="category1_detail.php?id=<?php echo $id; ?>&category=<?php echo $categoryname; ?>&title=<?php echo $title; ?>"><?php echo $title;?></a></td>
		</tr>
		<tr>
			<td style="padding-right:7px; padding-top:10px;padding-bottom:10px;"><span style="color:#FF6600">Price - </span><?php echo $price; ?></td>
			<td style="padding-right:7px;padding-top:10px;padding-bottom:10px;"><span style="color:#FF6600">Est.time : </span><?php echo $time; ?></td>
			<td><span style="color:#FF6600">Budget</span>:$<?php echo $budget; ?></td> 
			
		</tr>
		<tr>
			<td colspan="3"><?php echo $desc; ?>....<a class="gg" href="category1_detail.php?id=<?php echo $id; ?>">Read More</a></td>
		</tr>
		<tr>
			<td colspan="3" style="padding-top:10px;padding-bottom:10px;"><span style="color:#FF6600;">Skils Required : </span><?php echo $skill; ?></td>
		</tr>
		<tr>
		<hr></hr>
		</tr>
	</table>
	
	<?php
	}
	
	?>
	

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
<?php ob_flush(); ?>