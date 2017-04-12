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
	<?php include("includes/header.php"); ?> 
	</section> 
    	<section class="content-sec">
    	<div id="wrapper">
		<div class="clear"></div>
		<div id="content-outer">
		<div id="content">
		<div id="page-heading"><h1>EDIT</h1></div>
		<div id="content">
	<?php 
	include("connection.php");
		$id=$_GET['id'];
		$query="select * from signup where id=".$id;
		$result=mysql_query($query);
		while($row=mysql_fetch_array($result))	
		{
	$uname=$row['uname'];
	$pwd=$row['pwd'];
	$fname=$row['fname'];
	$lname=$row['lname'];
	$emailid=$row['emailid'];
	$country=$row['country'];
	$oldimage=$row['image'];
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
	if(isset($_POST['submit'])=='UPDATE')
	{
	$uname=$_POST['uname'];
	$pwd=$_POST['pwd'];		
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$emailid=$_POST['emailid'];
	$country=$_POST['country'];
	$newimage=$_FILES['image']['name'];
	$professionaltitle=$_POST['professionaltitle'];
	$overview=$_POST['overview'];
	$skills=$_POST['skills'];
	$availability=$_POST['availability'];
	$education=$_POST['education'];
	$name=$_POST['name'];
	$passedyear=$_POST['passedyear'];
	$e_desc=$_POST['e_desc'];
	$company=$_POST['company'];
	$city=$_POST['city'];
	$l_country=$_POST['l_country'];
	$title=$_POST['title'];
	$role=$_POST['role'];
	$month=$_POST['month'];
	$year=$_POST['year'];
	$f_month=$_POST['f_month'];
	$f_year=$_POST['f_year'];
	$descr=$_POST['descr'];
	if(!$newimage)
	{
	echo $query="update signup set uname='$uname',pwd='$pwd',fname='$fname',lname='$lname',emailid='$emailid',country='$country',image='$oldimage',professionaltitle='$professionaltitle',overview='$overview',skills='$skills',availability='$availability',education='$education',name='$name',passedyear='$passedyear',e_desc='$e_desc',company='$company',city='$city',l_country='$l_country',title='$title',role='$role',month='$month',year='$year',f_month='$f_month',f_year='$f_year',descr='$descr' where id=".$id;
	$result=mysql_query($query);
	}
	else
	{
	move_uploaded_file($_FILES['image']['tmp_name'],"user/".$_FILES['image']['name']);
	echo $query="update signup set uname='$uname',pwd='$pwd',fname='$fname',lname='$lname',emailid='$emailid',country='$country',image='$newimage',professionaltitle='$professionaltitle',overview='$overview',skills='$skills',availability='$availability',education='$education',name='$name',passedyear='$passedyear',e_desc='$e_desc',company='$company',city='$city',l_country='$l_country',title='$title',role='$role',month='$month',year='$year',f_month='$f_month',f_year='$f_year',descr='$descr' where id=".$id;
	$result=mysql_query($query);
	}
	if($result=='1')
	{
	header("location:myprofile.php");
	}
	else
	{
	echo"Error";
	}
	}
	?>
		<table border="0" width="100%" cellpadding="10" cellspacing="10" id="content-table">
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
	<table border="0" width="100%">
	<tr valign="top">
	<td>
		<div id="step-holder">
			<div class="step-no">1</div>
			<div class="step-dark-left"><h1>EDIT</h1></div>
			<div class="clear"></div>
		</div>


		<form name="myform" action="" method="post" enctype="multipart/form-data">
			<table border="1" width="75%" cellspacing="20" cellpadding="20">
			<tr>
				<td colspan="5" style="text-color: #0F70B8"><h1><u>User Details</u></h1></td>
			</tr>
			<tr height="20"></tr>
				<tr>
					<td>Username</td>
					<td colspan="4"><input type="text" name="uname" value="<?php echo $uname; ?>" class="inp-form padd_td"></td>
				</tr>
				<tr height="20"></tr>
				<tr>
					<td>Password</td>
					<td colspan="4"><input type="password" name="pwd" value="<?php echo $pwd;?>" class="inp-form padd_td"></td>
				</tr>
				<tr height="20"></tr>
				<tr>
			 <td colspan="5"><h1><u>Personal Details</u></h1></td>
			 </tr>
			 <tr height="20"></tr>
				<tr>
					<td>First Name</td>
					<td colspan="4"><input type="text" name="fname" value="<?php echo $fname;?>" class="inp-form padd_td"></td>
				</tr>
				<tr height="20"></tr>
				<tr>
					<td>Last Name</td>
					<td colspan="4"><input type="text" name="lname" value="<?php echo $lname; ?>" class="inp-form padd_td"></td>
				</tr>
				<tr height="20"></tr>
				<tr>
					<td>Email-id</td>
					<td colspan="4"><input type="text" name="emailid" value="<?php echo $emailid;?>" class="inp-form padd_td"></td>
				</tr>
				<tr height="20"></tr>
				<tr>
					<td>Country</td>
					<td colspan="4"><select name="country" class="styledselect_form_1 padd_td">
					<option value="select country">Select country</option>
					<option value="Canada" <?php if($country=='Canada'){echo "selected";}?>>Canada</option>
					<option value="India"<?php if($country=='India'){echo "selected";}?>>India</option>
					<option value="America" <?php if($country=='America'){echo "selected";}?>>America</option>
					<option value="Australia" <?php if($country=='Australia'){echo "selected";}?>>Australia</option>
					<option value="Bangladesh" <?php if($country=='Bangladesh'){echo "selected";}?>>Bangladesh</option>
					<option value="Brazil" <?php if($country=='Brazil'){echo "selected";}?>>Brazil</option>
					<option value="Germany" <?php if($country=='Germany'){echo "selected";}?>>Germany</option>
					<option value="Italy" <?php if($country=='Italy'){echo "selected";}?>>Italy</option>
					<option value="China" <?php if($country=='China'){echo "selected";}?>>China</option>
					</select></td>
				</tr>
				<tr height="20"></tr>
				<tr>
					<td>Upload Photo</td>
					<td colspan="4" class="padd_td"><input type="file" name="image">
					<img src="user/<?php echo $oldimage;?>" height="250px" width="150px"></td>
				</tr>
				<tr height="20"></tr>
				<tr>
					<td>Professional Title</td>
					<td colspan="4"><input type="text" name="professionaltitle" value="<?php echo $professionaltitle;?>" class="inp-form padd_td"></td>
				</tr>
				<tr height="20"></tr>
				<tr>
					<td>Overview</td>
					<td colspan="4">
	<textarea name="overview" rows="5" cols="20" class="form-textarea padd_td"><?php echo $overview;?></textarea>
					</td>
				</tr>
				<tr height="20"></tr>
				<tr>
					<td>Skills</td>
					<td colspan="4"><input type="text" name="skills" value="<?php echo $skills; ?>" class="inp-form padd_td"></td>
				</tr>
				<tr height="20"></tr>
				<tr>
					<td>Availability to Work</td>
					<td colspan="4"><select name="availability" class="styledselect_form_1 padd_td">
					<option value="Please select">Please select</option>
					<option value="Full time" <?php if($availability=='Full time'){echo"selected";}?>>Full time</option>
					<option value="Part time" <?php if($availability=='Part time'){echo"selected";}?>>Part time</option>
					<option value="As needed" <?php if($availability=='As needed'){echo"selected";}?>>As needed</option>
					<option value="Not sure at this time" <?php if($availability=='Not sure at this time'){echo"selected";}?>>Not sure at this time</option>
					</select>
					</td>
				</tr>	
				<tr height="20"></tr>	
				<tr>
					<td colspan="5"><h1><u>Education</u></h1></td>
				</tr>
				<tr height="20"></tr>
				<tr>
					<td>Education</td>
					<td colspan="4"><select name="education" class="styledselect_form_1 padd_td">
					<option value="select education">Select education</option>
					<option value="graduation" <?php if($education=='graduation'){echo"selected";}?>>Graduation</option>
					<option value="post graduation" <?php if($education=='post graduation'){echo"selected";}?>>Post graduation</option>
					</select>
					</td>
				</tr>
				<tr height="20"></tr>
				<tr>
					<td>Name</td>
					<td colspan="4"><input type="text" name="name" value="<?php echo $name;?>" class="inp-form padd_td"></td>
				</tr>
				<tr height="20"></tr>				
				<tr>
					<td>Passed Year</td>
					<td colspan="4"><select name="passedyear" class="styledselect_form_1 padd_td">
					<option value="select year">Select year</option>
					<option value="2004" <?php if($passedyear=='2004'){echo"selected";}?>>2004</option>
					<option value="2005" <?php if($passedyear=='2005'){echo"selected";}?>>2005</option>
					<option value="2006" <?php if($passedyear=='2006'){echo"selected";}?>>2006</option>
					<option value="2007" <?php if($passedyear=='2007'){echo"selected";}?>>2007</option>
					<option value="2008" <?php if($passedyear=='2008'){echo"selected";}?>>2008</option>
					<option value="2009" <?php if($passedyear=='2009'){echo"selected";}?>>2009</option>
					<option value="2010" <?php if($passedyear=='2010'){echo"selected";}?>>2010</option>
					<option value="2011" <?php if($passedyear=='2011'){echo"selected";}?>>2011</option>
					<option value="2012" <?php if($passedyear=='2012'){echo"selected";}?>>2012</option>
					<option value="2013" <?php if($passedyear=='2013'){echo"selected";}?>>2013</option>
					<option value="2014" <?php if($passedyear=='2014'){echo"selected";}?>>2014</option>
					</select>
					</td>
					</tr>
					<tr height="20"></tr>
				<tr>
					<td>Description</td>
					<td colspan="4">
 <textarea name="e_desc" rows="5" cols="20" class="form-textarea padd_td"><?php echo $e_desc; ?></textarea>
					</td>
				</tr>
				<tr height="20"></tr>
				<tr>
					<td colspan="5"><h1><u>Employement History</u></h1></td>
				</tr>
				<tr height="20"></tr>
				<tr>
					<td>Company</td>
					<td colspan="4"><input type="text" name="company" value="<?php echo $company; ?>" class="inp-form padd_td"></td>
				</tr>
				<tr height="20"></tr>
				<tr>
					<td>Location</td>
					<td colspan="2"><input type="text" name="city" placeholder="City" value="<?php echo $city;?>" class="inp-form padd_td"></td>
					<td colspan="2"><input type="text" name="l_country" placeholder="Country" value="<?php echo $l_country;?>" class="inp-form padd_td"></td>
				</tr>
				<tr height="20"></tr>				
				<tr>
					<td>Title</td>
					<td colspan="4"><input type="text" name="title" value="<?php echo $title;?>" class="inp-form padd_td"></td>
				</tr>
				<tr height="20"></tr>
				<tr>
					<td>Role</td>
					<td colspan="4"><select name="role" class="styledselect_form_1 padd_td">
					<option value="Please Select">Please Select</option>
					<option value="Intern" <?php if($role=='Intern'){echo"selected";}?>>Intern</option>
					<option value="Individual Contributor" <?php if($role=='Individual Contributor'){echo"selected";}?>>Individual Contributor</option>
					<option value="Lead" <?php if($role=='Lead'){echo"selected";}?>>Lead</option>
					<option value="Manager" <?php if($role=='Manager'){echo"selected";}?>>Manager</option>
					<option value="Executive" <?php if($role=='Executive'){echo"selected";}?>>Executive</option>
					<option value="Owner" <?php if($role=='Owner'){echo"selected";}?>>Owner</option>
					</select>
					</td>
				</tr>
				<tr height="20"></tr>
				<tr>
					<td>Period</td>
					<td><select name="month" class="styledselect_form_1 padd_td">
					<option value="select">Select month</option>
					<option value="January" <?php if($month=='January'){echo"selected";}?>>Janaury</option>
					<option value="february" <?php if($month=='February'){echo"selected";}?>>february</option>
					<option value="March" <?php if($month=='March'){echo"selected";}?>>March</option>
					<option value="April" <?php if($month=='April'){echo"selected";}?>>April</option>
					<option value="May" <?php if($month=='May'){echo"selected";}?>>May</option>
					<option value="June" <?php if($month=='June'){echo"selected";}?>>June</option>
					<option value="July" <?php if($month=='July'){echo"selected";}?>>July</option>
					<option value="August" <?php if($month=='August'){echo"selected";}?>>August</option>
					<option value="September" <?php if($month=='September'){echo"selected";}?>>September</option>
					<option value="October" <?php if($month=='October'){echo"selected";}?>>October</option>
					<option value="November" <?php if($month=='November'){echo"selected";}?>>November</option>
					<option value="December" <?php if($month=='December'){echo"selected";}?>>December</option>
					</select>
					</td>
					<td><select name="year" class="styledselect_form_1 padd_td">
					<option value="Select">Select year</option>
					<option value="2000" <?php if($month=='2000'){echo"selected";}?>>2000</option>
					<option value="2001" <?php if($month=='2001'){echo"selected";}?>>2001</option>
					<option value="2002" <?php if($month=='2002'){echo"selected";}?>>2002</option>
					<option value="2003" <?php if($month=='2003'){echo"selected";}?>>2003</option>
					<option value="2004" <?php if($month=='2004'){echo"selected";}?>>2004</option>
					<option value="2005" <?php if($month=='2005'){echo"selected";}?>>2005</option>
					<option value="2006" <?php if($month=='2006'){echo"selected";}?>>2006</option>
					<option value="2007" <?php if($month=='2007'){echo"selected";}?>>2007</option>
					<option value="2008" <?php if($month=='2008'){echo"selected";}?>>2008</option>
					<option value="2009" <?php if($month=='2009'){echo"selected";}?>>2009</option>
					<option value="2010" <?php if($month=='2010'){echo"selected";}?>>2010</option>
					<option value="2011" <?php if($month=='2011'){echo"selected";}?>>2011</option>
					<option value="2012" <?php if($month=='2012'){echo"selected";}?>>2012</option>
					<option value="2013" <?php if($month=='2013'){echo"selected";}?>>2013</option>
					<option value="2014" <?php if($month=='2014'){echo"selected";}?>>2014</option>
					</select>
					</td>
					<td><select name="f_month" class="styledselect_form_1 padd_td">
					<option value="select">Select month</option>
					<option value="January" <?php if($f_month=='Janaury'){echo"selected";}?>>Janaury</option>
					<option value="february" <?php if($f_month=='Feburary'){echo"selected";}?>>february</option>
					<option value="March" <?php if($f_month=='March'){echo"selected";}?>>March</option>
					<option value="April" <?php if($f_month=='April'){echo"selected";}?>>April</option>
					<option value="May" <?php if($f_month=='May'){echo"selected";}?>>May</option>
					<option value="June" <?php if($f_month=='June'){echo"selected";}?>>June</option>
					<option value="July" <?php if($f_month=='July'){echo"selected";}?>>July</option>
					<option value="August" <?php if($f_month=='August'){echo"selected";}?>>August</option>
					<option value="September" <?php if($f_month=='September'){echo"selected";}?>>September</option>
					<option value="October" <?php if($f_month=='October'){echo"selected";}?>>October</option>
					<option value="November" <?php if($f_month=='November'){echo"selected";}?>>November</option>
					<option value="December" <?php if($f_month=='December'){echo"selected";}?>>December</option>
					</select>
					</td>
					<td><select name="f_year" class="styledselect_form_1 padd_td">
					<option value="Select">Select year</option>
					<option value="2000" <?php if($f_year=='2000'){echo"selected";}?>>2000</option>
					<option value="2001" <?php if($f_year=='2001'){echo"selected";}?>>2001</option>
					<option value="2002" <?php if($f_year=='2002'){echo"selected";}?>>2002</option>
					<option value="2003" <?php if($f_year=='2003'){echo"selected";}?>>2003</option>
					<option value="2004" <?php if($f_year=='2004'){echo"selected";}?>>2004</option>
					<option value="2005" <?php if($f_year=='2005'){echo"selected";}?>>2005</option>
					<option value="2006" <?php if($f_year=='2006'){echo"selected";}?>>2006</option>
					<option value="2007" <?php if($f_year=='2007'){echo"selected";}?>>2007</option>
					<option value="2008" <?php if($f_year=='2008'){echo"selected";}?>>2008</option>
					<option value="2009" <?php if($f_year=='2009'){echo"selected";}?>>2009</option>
					<option value="2010" <?php if($f_year=='2010'){echo"selected";}?>>2010</option>
					<option value="2011" <?php if($f_year=='2011'){echo"selected";}?>>2011</option>
					<option value="2012" <?php if($f_year=='2012'){echo"selected";}?>>2012</option>
					<option value="2013" <?php if($f_year=='2013'){echo"selected";}?>>2013</option>
					<option value="2014" <?php if($f_year=='2014'){echo"selected";}?>>2014</option>
					</select>
					</td>
				</tr>
				<tr height="20"></tr>
				<tr>
					<td>Description</td>
					<td colspan="4">
	<textarea name="descr" rows="5" cols="20" class="form-textarea padd_td">
<?php echo $descr; ?>
					</textarea>
					</td>
				</tr>
				<tr height="20"></tr>
				<tr>
					<td><input type="submit" name="submit" value="UPDATE"  class="form-submit padd_td"></td>
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
	

	</body>
</html>	
<?php
ob_flush();
?>
			<footer>
    	 	<?php include("includes/footer.php"); ?> 
    </footer>

	</body>
</html>		