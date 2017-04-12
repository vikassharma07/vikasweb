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
<link rel="stylesheet" type="text/css" href="css/profiledesign.css" />
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

	<?php 
	include("connection.php");
	$uname=$_SESSION['uname'];
	$query="select * from signup where uname='".$uname."'";
	$result=mysql_query($query);
		while($row=mysql_fetch_array($result))	
		{
		$id=$row['id'];
	$uname=$row['uname'];
	$pwd=$row['pwd'];
	$fname=$row['fname'];
	$lname=$row['lname'];
	$emailid=$row['emailid'];
	$country=$row['country'];
	$image=$row['image'];
	$professionaltitle=$row['professionaltitle'];
	$overview=$row['overview'];
	$skills=$row['skills'];
	$availability=$row['availability'];
	$education=$row['education'];
	$name=$row['name'];
	$passedyear=$row['passedyear'];
	$e_desc=$row['e_desc'];
	$company=$row['company'];
	$city=$row['city'];
	$l_country=$row['l_country'];
	$title=$row['title'];
	$role=$row['role'];
	$month=$row['month'];
	$year=$row['year'];
	$f_month=$row['f_month'];
	$f_year=$row['f_year'];
	$descr=$row['descr'];
	}
	$query1="select * from result";
	$result=mysql_query($query1);
	
	
	?>
	<form name="editform" action="" method="get" enctype="multipart/form-data">
	<table border="1" width="93%">
	<tr>
	<td valign="top" width="31%">
	<table border="1" cellspacing="10" cellpadding="10" class="tablemargin">
			<tr>
				<td colspan="2"><b><h1>User Details</h1></b></td>
			</tr>
				<tr>
					<td class="td1">Username</td>
					<td ><?php echo $uname;?></td>
				</tr>
				<tr>
					<td class="td1">Password</td>
					<td ><?php echo $pwd;?></td>
				</tr>
				<tr>
			 <td colspan="2"><b><h1>Personal Details</h1></b></td>
			 </tr>
				<tr>
					<td class="td1">First Name</td>
					<td ><?php echo $fname;?></td>
				</tr>
				<tr>
					<td class="td1">Last Name</td>
					<td ><?php echo $lname;?></td>
				</tr>
				<tr>
					<td class="td1">Email-id</td>
					<td ><?php echo $emailid;?></td>
				</tr>
				<tr>
					<td class="td1">Country</td>
					<td ><?php echo $country; ?></td>
				</tr>
				<tr>
					<td class="td1">Professional Title</td>
					<td ><?php echo $professionaltitle;?></td>
				</tr>
				<tr>
					<td class="td1">Overview</td>
					<td ><?php echo $overview;?>
					</td>
				</tr>
				<tr>
					<td class="td1">Skills</td>
					<td ><?php echo $skills;?></td>
				</tr>
				<tr>
					<td class="td1">Availability to Work &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
					<td ><?php echo $availability;?>
					</td>
				</tr>	
					
				<tr>
					<td colspan="2"><b><h1>Education</h1></b></td>
				</tr>
				<tr>
					<td class="td1">Education</td>
					<td ><?php echo $education;?>
					</td>
				</tr>
				<tr>
					<td class="td1">Name</td>
					<td ><?php echo $name;?></td>
				</tr>	
				<tr>
					<td class="td1">Passed Year</td>
					<td ><?php echo $passedyear;?>
					</td>
					</tr>
				<tr>
					<td class="td1">Description</td>
					<td c><?php echo $e_desc;?>
					</td>
				</tr>
				<tr>
					<td colspan="2"><b><h1>Employement History</h1></b></td>
				</tr>
				<tr>
					<td class="td1">Company</td>
					<td ><?php echo $company;?></td>
				</tr>
				<tr>
					<td class="td1">Location</td>
					<td >City-<?php echo $city;?>
				Country-<?php echo  $l_country;?></td>
				</tr>	
				<tr>
					<td class="td1">Title:</td>
					<td ><?php echo $title; ?></td>
				</tr>
				<tr>
					<td class="td1">Role:</td>
					<td ><?php echo $role; ?>
					</td>
				</tr>
				<tr>
					<td class="td1">Period:</td>
					<td><?php echo $month; ?><?php echo $year;?>-
					<?php echo $f_month; ?><?php echo $f_year;?></td>
				</tr>
				<tr>
					<td class="td1">Description:</td>
					<td><?php echo $descr; ?>
					</td>
				</tr>
				<tr>
					<td class="td1"></td>
					<td>
					
					<a href="editprofile.php?id=<?php echo $id; ?>">
					<button type="button" style="margin-top:30px;padding-left:70px;padding-right:70px;padding-top:10px;padding-bottom:10px;background-color:#FF6600;border-radius:10px;" name="submit">Update</button>
					</a>
					</td>
					</tr>
				</table>
				</td>
				<td valign="top" width="31%">
				<table border="1">
				<tr valign="top">
					<td class="td1" colspan="2"><h1>View Photo</h1></td></tr>
					<tr>
					<td colspan="2"><img src="user/<?php echo $image;?>" height="350px" width="300px"></td>
				</tr>
				
				</table>
				<table>
				<tr>
					<td colspan="2"><h1>Test Given</h1></td>
					</tr>
				<?php
				while($row=mysql_fetch_array($result))
	{
	$date=$row['date'];
	$testname=$row['testname'];
	$percentage=$row['percentage'];
	
	?>
				
				<tr>
					<td class="td1">Date:</td>
					<td><?php echo $date; ?></td>
				</tr>
				<tr>
					<td class="td1">Test Name:</td>
					<td><?php echo $testname; ?></td>
				</tr>
				<tr>	
					<td class="td1">Percentage:</td>
					<td><?php echo $percentage; ?>%</td>
				</tr>
				<tr><td colspan="2"><hr /></td></tr>
				
				
<?php } ?>	
		
</table>		
					</td>
					<td valign="top" width="31%">
					<table border="1" cellspacing="10" cellpadding="10">
			<tr>
				<td colspan="2"><b><h1>
					Apply Jobs By <?php echo $uname; ?></h1></b></td>
			</tr>
				<tr>
					<td class="td1"><?php
				$query2="select * from applyjob where user_id=".$id;
				$result2=mysql_query($query2);
				while($row2=mysql_fetch_array($result2))
				{
				$category=$row2['category'];
				$postname=$row2['postname'];
				$olddate=$row2['date'];
				//echo "<br/>";
				$proposedprice=$row2['proposedprice'];
				
					
					$date=date('d/m/y')."new";//  09/05/14
					$newdate=explode('/',$date);
					$odate=explode('/',$olddate);
					

					if($odate[0]>$newdate[0] && $odate[1]>$newdate[1])
					{
					//echo "<br >";
					//echo "greater";
					}
					else
					{
					echo "<br >";
					
?>
						</tr>
						<?php
						?>
				<tr>
					<td>Category</td>
					<td><?php echo $category; ?></td>
				</tr>
				<tr>
					<td>Postname</td>
					<td><?php echo $postname; ?></td>
				</tr>
				<tr>
					<td>Applied Date</td>
					<td><?php echo $olddate; ?></td>
				</tr>
				<tr>
					<td>Budget</td>
					<td><?php echo $proposedprice; ?></td>
				</tr>
				<tr>
				<td colspan="2"><hr></hr></td>
				</tr>
				<?php
				//echo "no greater";
					}//die;
					?>
					<?php } ?>
		
				</table>
					</td>
					
					</tr>
					</table>
						
			
			</form>
			<footer>
    	 	<?php include("includes/footer.php"); ?> 
    </footer>

</body>
</html>
<?php
ob_flush();
?>
