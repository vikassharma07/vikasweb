<?php
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
<title>Sedna</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/responsive.css" />
<link rel="stylesheet" type="text/css" href="css/font.css" />
<link rel="stylesheet" type="text/css" href="css/screen.css" />
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
<link rel="stylesheet" type="text/css" media="all" href="jsDatePick_ltr.min.css" />
<script type="text/javascript" src="jsDatePick.min.1.3.js"></script>
<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"inputField",
			dateFormat:"%d-%M-%Y"
			/*selectedDate:{				This is an example of what the full configuration offers.
				day:5,						For full documentation about these settings please see the full version of the code.
				month:9,
				year:2006
			},
			yearsRange:[1978,2020],
			limitToToday:false,
			cellColorScheme:"beige",
			dateFormat:"%m-%d-%Y",
			imgPath:"img/",
			weekStartDay:1*/
		});
	};
</script>

</head>
<body>

	<section class="top-header-sec">
	<?php include("includes/header.php");
	?> 
	</section>
     <section class="content-sec">
    	<div id="wrapper">
 <div class="clear"></div>
<div id="content-outer">
<div id="content">
<div id="page-heading"><h1>Add Post</h1></div>
<div id="content">
<?php
include("connection.php");
if(isset($_POST['submit'])=='Add')
{
$categoryname=$_POST['categoryname'];
$title=$_POST['title'];
$p_date=$_POST['p_date'];
$price=$_POST['price'];
$time=$_POST['est_time'];
$budget=$_POST['budget'];
$jobdescription=$_POST['jobdescription'];
$skill=$_POST['skill'];
echo $query="insert into postmanagement(categoryname,title,p_date,price,est_time,budget,jobdescription,skill) value('$categoryname','$title','$p_date','$price','$time','$budget','$jobdescription','$skill')";
$result=mysql_query($query); 
if($result=='1')
{
header("location:managepost.php");
}
else
{
echo"error";
}
}
?>
		<table cellspacing="5" cellpadding="5" text="red" id="content-table" width="100%">
			<tr>
<td colspan="5">
</tr>
<tr>
	<th rowspan="3" class="sized"><img src="images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
	<th class="topleft"></th>
	<td id="tbl-border-top">&nbsp;</td>
	<th class="topright"></th>
	<th rowspan="3" class="sized"><img src="images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
</tr>
<tr>
	<td id="tbl-border-left"></td>
	<td>
	<div id="content-table-inner">
<form name="myform" method="post" action="" enctype="multipart/form-data">
<table border="0" width="100%" cellpadding="0" cellspacing="0" id="id-form">
	<tr valign="top">
	<td>
		<div id="step-holder">
			<div class="step-no">1</div>
			<div class="step-dark-left"><h1>Add Post</h1></div>
			<div class="clear"></div>
		</div>
<table border="1" width="100%">
<tr>
<td style="font-size:18px">Category</td>
<td><select name="categoryname">
<?php

$query="select * from category";
$result=mysql_query($query);
while($row=mysql_fetch_array($result))
{
$categoryname=$row['categoryname'];

?>
		<option value="<?php echo $categoryname;?>"><?php echo $categoryname;?></option>
<?php } ?>
	</select></td>
</tr>
<tr>
<td style="font-size:18px">Title:</td>
<td><input type="text" name="title" class="inp-form"></td>
</tr>
<tr>
<td style="font-size:18px">Date:</td>
<td><input type="text" name="p_date" class="inp-form" id="inputField"></td>
</tr>
<tr>
<td style="font-size:18px">Price:</td>
<td><select name="price">
<option value="fixed">fixed</option>
<option value="hourly">hourly</option></td>
</tr>
<tr>
<td style="font-size:18px">Est.time:</td>
<td><input type="text" name="est_time" class="inp-form"></td>
</tr>
<tr>
<td style="font-size:18px">Budget:</td>
<td><input type="text" name="budget" placeholder="$" class="inp-form"></td>
</tr>
<tr>
<td style="font-size:18px">Job Description:</td>
<td><?php
            include('fckeditor/fckeditor.php');
            $FCKeditor = new FCKeditor('jobdescription');                               
	    $FCKeditor->BasePath = 'fckeditor/';
            $FCKeditor->Create();
         ?></td>
<!--<textarea name="jobdescription" rows="5" cols="10"></textarea>-->
</tr>
<tr>
<td style="font-size:18px">Skill required:</td>
<td>
	<?php
            include('fckeditor/fckeditor.php');
            $FCKeditor = new FCKeditor('skill');                               
	    $FCKeditor->BasePath = 'fckeditor/';
            $FCKeditor->Create();
         ?>
		 </td>
<!--<textarea name="skill" rows="5" cols="10"></textarea></td>-->
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Add"></td>
</tr>
</table>
<tr>
<td><img src="images/shared/blank.gif" width="100" height="1" alt="blank" /></td>
<td></td>
</tr>
</table>
</form>
 <div class="clear"></div>
 </div>
</td>
<td id="tbl-border-right"></td>
</tr>
<tr>
	<th class="sized bottomleft"></th>
	<td id="tbl-border-bottom">&nbsp;</td>
	<th class="sized bottomright"></th>
</tr>
</table>
</div>
</div>

</div>
</td>

  <div class="span8 left about-us-sec">
			
	 </div>
     </div>
    </section>
    <footer>
    	 	<?php include("includes/footer.php"); ?> 
    </footer>
					</form>	
					
	</body>
</html>
<?php
ob_flush();
?>						

