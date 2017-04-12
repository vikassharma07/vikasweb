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
		<div id="wrapper">
		<h1 style="font-size:30px;color:#389FD8;padding-top:20px;padding-bottom:20px;margin-left:20px;">Apply To This Job</h1>
	
	<?php
			 $id=$_GET['id'];

		 $postname=$_GET['postname'];
	  $category=$_GET['category'];
	include("connection.php");
	$uname=$_SESSION['uname'];
			$query1="select * from signup where uname='".$uname."'";
			$result=mysql_query($query1);
			while($row=mysql_fetch_array($result))
			{
			$userid=$row['id'];
			}
	$query22="select * from applyjob where postname='".$postname."' and user_id=".$userid;
		$result22=mysql_query($query22);
	$numrow=mysql_num_rows($result22);
	if($numrow=='')
	{
	//echo"aplly";
	$query="select * from postmanagement where id=".$id;
	$result=mysql_query($query);
	while($row=mysql_fetch_array($result))
	{
	$title=$row['title'];
	$price=$row['price'];
	$time=$row['est_time'];
	$budget=$row['budget'];
	$description=$row['jobdescription'];
	$skill=$row['skill'];
	}
			
	if(isset($_POST['submit'])=='Apply')
	{
	
	$proposedprice=$_POST['proposedprice'];
	$duration=$_POST['estduration'];
	$coverletter=$_POST['coverletter'];
	$attachment=$_FILES['attachment']['name'];
	move_uploaded_file($_FILES['attachment']['tmp_name'],"documents/".$_FILES['attachment']['name']);
	echo $date=date('d/m/y');
	$query2="insert into applyjob(user_id,category,postname,date,proposedprice,estduration,coverletter,attachment) value('$userid','$category','$postname','$date','$proposedprice','$duration','$coverletter','$attachment')";
	$result=mysql_query($query2);
	if($result=='1')
	{
	header("location:thanks.php");
	}
	}
	
	?>
	<form name="applyjob" method="post" action="" enctype="multipart/form-data">
		<table style="margin-left:30px" cellspacing="10">
			<tr>
				<td style="font-size:15px;"><b>Job Category:</b></td>
				<td colspan="2"><?php echo $category; ?></td>
			</tr>
			<tr height="20"></tr>
			<tr>
				<td style="font-size:15px;"><b>Job Title:</b></td>
				<td colspan="2"><?php echo $title; ?></td>
			</tr>
			<tr height="20"></tr>
			<tr>
				<td style="font-size:15px;"><b>Description:</b></td>
				<td colspan="2"><?php echo $description; ?></td>	
			</tr>
			<tr height="20"></tr>
			<?php 
				if($price=='fixed')
				{
			?>
			<tr>
				<td style="font-size:15px;"><b>Propose Terms:</b></td>
				<td><?php echo $price; ?> - price</td>
				<td></td>
			</tr>	
			
			<tr height="20"></tr>
			<tr>
						<td style="font-size:15px;"><b>Budget</b></td>
						<td>Paid to you:</td>
						<td>$<input type="text" name="proposedprice" value="<?php echo $budget; ?>"></td>
			</tr>
			<?php } 
			else
			{
			?>
			<tr>
				<td style="font-size:15px;"><b>Propose Terms</b></td>
				<td colspan="2">Propose an <?php echo $price; ?> - price:</td>
			</tr>	
			<tr>
						<td></td>
						<td>Paid to you:</td>
						<td>$<input type="text" name="proposedprice" value="<?php echo $budget; ?>"></td>
			</tr>
			<?php } ?>
			<tr height="20"></tr>
			<tr>
				<td style="font-size:15px;"><b>Estimated Duration:</b></td>
				<td colspan="2"><select name="estduration">
					<option value="Please select">Please select...</option>
					<option value="Less than 1 week">Less than 1 week</option>
					<option value="Less than 1 month">Less than 1 month</option>
					<option value="1 to 3 months">1 to 3 months</option>
					<option value="3 to 6 months">3 to 6 months</option>
					<option value="more than 6 months">more than 6 months</option>
					</select>
				</td>	
			</tr>
			<tr height="20"></tr>	
			<tr>
				<td style="font-size:15px;"><b>Cover Letter</b></td>
				<td colspan="2"><textarea name="coverletter" rows="6" cols="30"></textarea></td>
			</tr>
			<tr height="20"></tr>
			<tr>
				<td style="font-size:15px;"><b>Attachment</b></td>
				<td colspan="2"><input type="file" name="attachment"></td>
			</tr>
			<tr height="20"></tr>
			<tr>
				<td></td>
				<td>
				<input type="submit" style="padding-left:50px;padding-right:50px;padding-top:10px;padding-bottom:10px;background-color:#FF6600;border-radius:20px;" name="submit" value="Apply"></td>
				<td><a href="jobs.php"><button type="button" style="padding-left:50px;padding-right:50px;padding-top:10px;padding-bottom:10px;background-color:#FF6600;border-radius:20px;" name="submit">Cancel</button></td>
			</tr>	
		
		</table>
		</form>
<?php }else{
	echo "You are already applied this job .Please select another job";
}?>
		</div>
	<footer>
    	 	<?php include("includes/footer.php"); ?> 
    </footer>

</body>
</html>	
<?php
ob_flush();
?>	