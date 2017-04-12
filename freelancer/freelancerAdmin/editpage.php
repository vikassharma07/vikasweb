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

</head>
<body>

	<section class="top-header-sec">
	<?php include("includes/header.php");
	if(!$_SESSION['username'])
	{
	header("location:index.php");
	exit;
	}
	?> 
	</section>
	<div id="wrapper">
		<div class="clear"></div>
		<div id="content-outer">
		<div id="content">
		<div id="page-heading"><h1>EDIT PAGE</h1></div>
		<div id="content">
		<?php
		include("connection.php");
		$id=$_GET['id'];
		$query="select * from addpages where id=".$id;
		$result=mysql_query($query);
		while($row=mysql_fetch_array($result))
		{
		$pagename=$row['pagename'];
		$seotitle=$row['seotitle'];
		$seokeywords=$row['seokeywords'];
		$seodescription=$row['seodescription'];
		$detail=$row['detail'];
		}
		if(isset($_POST['submit'])=='UPDATE')
		{
		$pagename=$_POST['pagename'];
		$seotitle=$_POST['seotitle'];
		$seokeywords=$_POST['seokeywords'];
		$seodescription=$_POST['seodescription'];
		$detail=$_POST['detail'];
		echo $query="update addpages set pagename='$pagename',seotitle='$seotitle',seokeywords='$seokeywords',seodescription='$seodescription',detail='$detail' where id=".$id;
		$result=mysql_query($query);
		if($result=='1')
		{
		header("location:managepages.php");
		}
		else
		{
		echo"Data not updated.!";
		}
		}
		?>	
		<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
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
	<table border="0" width="100%" cellpadding="0" cellspacing="0">
	<tr valign="top">
	<td>
		<div id="step-holder">
			<div class="step-no">1</div>
			<div class="step-dark-left"><h1>Edit News</h1></div>
			<div class="clear"></div>
		</div>
		
	
	<form name="myform" method="post" action="">
					<table border="2" cellspacing="2" cellpadding="2" width="100%">
					<tr>
						<td style="font-size:18px">Page Name:</td>
						<td><select name="pagename">
						<option value="Select Page">Select Page</option>
						<option value="About Us"<?php if($pagename=='About Us'){echo"selected";}?>>About Us</option>
						<option value="Services"<?php if($pagename=='Services'){ echo"selected";}?>>Services</option>
						</select>
						</td>
					</tr>
					<tr height="20"></tr>
					<tr>
						<td style="font-size:18px">SEO Title:</td>
						<td><input type="text" class="inp-form" name="seotitle" value="<?php echo $seotitle;?>"></td>
					</tr>
					<tr height="20"></tr>
					<tr>
						<td style="font-size:18px">SEO Keywords:</td>
						<td><?php
	include('fckeditor/fckeditor.php');
	$FCKeditor = new FCKeditor('seokeywords');
	$FCKeditor->BasePath = 'fckeditor/';
	$FCKeditor->Value = $seokeywords;
	$FCKeditor->Create();
?><!--<textarea name="seokeywords" class="inp-form" rows="5" cols="20"><?php echo $seokeywords;?></textarea>--></td>
					</tr>
					<tr height="20"></tr>
					<tr>
						<td style="font-size:18px">SEO Description:</td>
						<td><?php
	include('fckeditor/fckeditor.php');
	$FCKeditor = new FCKeditor('seodescription');
	$FCKeditor->BasePath = 'fckeditor/';
	$FCKeditor->Value = $seodescription;
	$FCKeditor->Create();
?><!--<textarea name="seodescription" class="inp-form" rows="5" cols="20"><?php echo $seodescription;?></textarea>--></td>
					</tr>
					<tr height="20"></tr>
					<tr>
						<td style="font-size:18px">Detail:</td>
						<td><?php
	include('fckeditor/fckeditor.php');
	$FCKeditor = new FCKeditor('detail');
	$FCKeditor->BasePath = 'fckeditor/';
	$FCKeditor->Value = $detail;
	$FCKeditor->Create();
?><!--<textarea name="detail" rows="5" cols="20"><?php echo $detail;?></textarea>--></td>
					</tr>
					<tr height="20"></tr>
					<tr>
						<td colspan="2"><input type="submit" name="submit" value="UPDATE"></td>
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
<!--  end content-table-inner  -->
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

	</body>
</html>
<?php
ob_flush();
?>