<?php
ob_start();
?>
<!DOCTYPE html>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
	<link rel="stylesheet" type="text/css" href="css/screen.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/responsive.css" />
	<link rel="stylesheet" type="text/css" href="css/font.css" />
	<link rel="stylesheet" type="text/css" href="css/css.css" />
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
<script>
function validate()
	{
	if(document.myform.uname.value=='')
		{
		alert("Please enter username!");
		document.myform.uname.focus();
		return false;
		}
		if(document.myform.pwd.value=='')
		{
		alert("Please enter password!");
		document.myform.pwd.focus();
		return false;
		}
		if(document.myform.fname.value=='')
		{
		alert("Please enter firstname!");
		document.myform.fname.focus();
		return false;
		}
		if(document.myform.lname.value=='')
		{
		alert("Please enter lastname!");
		document.myform.lname.focus();
		return false;
		}
		if(document.myform.emailid.value=='')
		{
		alert("Please enter valid email address!");
		document.myform.emailid.focus();
		return false;
		}
		if(document.myform.country.value=='-1')
		{
		alert("Please choose country!");
		document.myform.country.focus();
		return false;
		}

		if(document.myform.professionaltitle.value=='')
		{
		alert("Please enter professionaltitle!");
		document.myform.professionaltitle.focus();
		return false;
		}
		if(document.myform.skills.value=='')
		{
		alert("Please enter your skills!");
		document.myform.skills.focus();
		return false;
		}
		if(document.myform.availability.value=='-2')
		{
		alert("Availability to work is a mandatory field!!");
		document.myform.availability.focus();
		return false;
		}
		<!--if(document.myform.education.value=='')
		//{
		//alert("Please enter name of education!");
		//document.myform.name.focus();
		//return false;
		//}
		//if(document.myform.education.value="-3")
		//{
		//alert("Please select education!");
		//document.myform.education.focus();
		//return false;
		//}
		//if(document.myform.passedyear.value="-4")
		//{
		//alert("Please select passed year of education!");
		//document.myform.passedyear.focus();
		//return false;
		//}
		//return true;
	}







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
		<div id="page-heading"><h1 style="font-size:30px;color:#03AAF4"><b><u>SIGN UP</u></b></h1></div>
		<div id="content">
<?php
	include("connection.php");
	if(isset($_POST['submit'])=='ADD')
	{
	$uname=$_POST['uname'];
	$pwd=$_POST['pwd'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$emailid=$_POST['emailid'];
	$country=$_POST['country'];
	$image=$_FILES['image']['name'];
	move_uploaded_file($_FILES['image']['tmp_name'],"user/".$_FILES['image']['name']);
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
	
	$query="insert into signup(uname,pwd,fname,lname,emailid,country,image,professionaltitle,overview,skills,availability,education,name,passedyear,e_desc,company,city,l_country,title,role,month,year,f_month,f_year,descr) value('$uname','$pwd','$fname','$lname','$emailid','$country','$image','$professionaltitle','$overview','$skills','$availability','$education','$name','$passedyear','$e_desc','$company','$city','$l_country','$title','$role','$month','$year','$f_month','$f_year','$descr')";	
	$result=mysql_query($query); 
	if($result=='1')
	{
	echo"Successful";
	}
	else
	{
	echo"Error";
	}
	}
	
?>	
<table border="0" width="100%" cellpadding="10" cellspacing="10" id="content-table">
		
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
		

		<form name="myform" method="post" action="" enctype="multipart/form-data" onsubmit="return validate();">
			<table border="1" width="60%" height="60%" cellpadding="3" cellspacing="3">
			<tr>
			
			<td colspan="5"><b><h2 style="font-size:24px;color:#FF6600;">User Details</b></h2></td>
			</tr>
			<tr height="30"></tr>
				<tr>
					<td style="font-size:16px;padding-right:170px;" width="300"><b>Username: </b></td>&nbsp;&nbsp;&nbsp;
					<td colspan="4"><input type="text" name="uname" class="inp-form padd_td"></td>
				</tr>
				<tr height="30"></tr>
				<tr>
					<td style="font-size:16px;padding-right:170px;"width="300"><b>Password: </b></td>
					<td colspan="4"><input type="password" name="pwd" class="inp-form padd_td"></td>
				
				</tr>
				<tr height="30"></tr>
				<tr>
					<td colspan="5"><h2 style="font-size:24px;color:#FF6600;"><b>Personal Details</b></h2></td>
				</tr>
				<tr height="30"></tr>
				<tr>
					<td style="font-size:16px;padding-right:170px;"width="300"><b>First Name: </b></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<td colspan="4"><input type="text" name="fname" class="inp-form padd_td"></td>
				</tr>
				<tr height="30"></tr>
				<tr>
					<td style="font-size:16px;padding-right:170px;"width="300"><b>Last Name: </b></td>
					<td colspan="4"><input type="text" name="lname" class="inp-form padd_td"></td>
				</tr>
				<tr height="20"></tr>
				<tr>
					<td style="font-size:16px;padding-right:170px;"width="300"><b>Email-id: </b></td>
					<td colspan="4"><input type="email" name="emailid" class="inp-form padd_td"></td>
				</tr>
				<tr height="20"></tr>
				<tr>
					<td style="font-size:16px;padding-right:265px;"width="300"><b>Country: </b></td>
					<td colspan="4"><select name="country" class="styledselect_form_1 padd_td">
					<option value="-1">Select country</option>
					<option value="Canada">Canada</option>
					<option value="India">India</option>
					<option value="America">America</option>
					<option value="Australia">Australia</option>
					<option value="Bangladesh">Bangladesh</option>
					<option value="Brazil">Brazil</option>
					<option value="Germany">Germany</option>
					<option value="Italy">Italy</option>
					<option value="China">China</option>
					</select></td>
				</tr>
				<tr height="20"></tr>
				<tr>
					<td style="font-size:16px;"width="350"><b>Upload Photo: </b></td>
					<td colspan="4"><input type="file" name="image" class="inp-form padd_td"></td>
				</tr>
				<tr height="20"></tr>
				<tr>
					<td style="font-size:16px;"width="350"><b>Professional Title: </b></td>
					<td colspan="4"><input type="text" name="professionaltitle" class="inp-form padd_td"></td>
				</tr>
				<tr height="20"></tr>
				<tr>
					<td style="font-size:16px;padding-right:265px;"width="300"><b>Overview: </b></td>
					<td colspan="4">
			<textarea name="overview" rows="5" cols="20" class="form-textarea padd_td"></textarea>
					</td>
				</tr>
				<tr height="20"></tr>
				<tr>
					<td style="font-size:16px;padding-right:265px;"width="300"><b>Skills: </b></td>
					<td colspan="4"><input type="text" name="skills" class="inp-form padd_td"></td>
				</tr>
				<tr height="20"></tr>
				<tr>
					<td style="font-size:16px;"width="350"><b>Availability to Work: </b></td>
					<td colspan="4"><select name="availability" class="styledselect_form_1 padd_td">
					<option value="-2">Please select</option>
					<option value="Full time">Full time</option>
					<option value="Part time">Part time</option>
					<option value="As needed">As needed</option>
					<option value="Not sure at this time">Not sure at this time</option>
					</select>
					</td>
				</tr>	
					<tr height="20"></tr>
				<tr>
					<td colspan="5"><h2 style="font-size:24px;color:#FF6600;"><b>Education</b></h2></td>
				</tr>
				<tr height="20"></tr>
				<tr>
					<td style="font-size:16px;padding-right:170px;"><b>Education: </b></td>
					<td colspan="4"><select name="education" class="styledselect_form_1 padd_td">
					<option value="-3">Select education</option>
					<option value="graduation">Graduation</option>
					<option value="post graduation">Post graduation</option>
					</select>
					</td>
				</tr>
				<tr height="20"></tr>
				<tr>
					<td style="font-size:16px;padding-right:170px;"><b>Education Name: </b></td>
					<td colspan="4"><input type="text" name="name" class="inp-form padd_td"></td>
				</tr>
					<tr height="20"></tr>
				<tr>
					<td style="font-size:16px;padding-right:20px;"><b>Passed Year: </b></td>
					<td colspan="4"><select name="passedyear" class="styledselect_form_1 padd_td">
					<option value="-4">Please select year</option>
					<option value="2004">2004</option>
					<option value="2005">2005</option>
					<option value="2006">2006</option>
					<option value="2007">2007</option>
					<option value="2008">2008</option>
					<option value="2009">2009</option>
					<option value="2010">2010</option>
					<option value="2011">2011</option>
					<option value="2012">2012</option>
					<option value="2013">2013</option>
					<option value="2014">2014</option>
					<option value="2015">2015</option>
					<option value="2016">2016</option>
					<option value="2017">2017</option>
					
					</select>
					</td>
					</tr>
					<tr height="20"></tr>
				<tr>
					<td style="font-size:16px;padding-right:20px;"><b>Description: </b></td>
					<td colspan="4">
          <textarea name="e_desc" rows="5" cols="20" class="form-textarea padd_td"></textarea>
					</td>
				</tr>
				<tr height="20"></tr>
				<tr>
					<td colspan="5"><h2 style="font-size:24px;color:#FF6600;"><b>Employement History</b></h2></td>
				</tr>
				<tr height="20"></tr>
				<tr>
					<td style="font-size:16px;padding-right:170px;"><b>Company: </b></td>
					<td colspan="4"><input type="text" name="company" class="inp-form padd_td"></td>
				</tr>
				<tr height="20"></tr>
				<tr>
					<td style="font-size:16px;padding-right:20px;"><b>Location: </b></td>
					<td colspan="2"><input type="text" name="city" placeholder="City" class="inp-form padd_td"></td>
					<td colspan="2"><input type="text" name="l_country" placeholder="Country" class="inp-form padd_td"></td>
				</tr>	
				<tr height="20"></tr>
				<tr>
					<td style="font-size:16px;padding-right:20px;"><b>Title: </b></td>
					<td colspan="4"><input type="text" name="title" class="inp-form padd_td"></td>
				</tr>
				<tr height="20"></tr>
				<tr>
					<td style="font-size:16px;padding-right:20px;"><b>Role: </b></td>
					<td colspan="4"><select name="role" class="styledselect_form_1 padd_td">
					<option value="Please Select">Please Select</option>
					<option value="Intern">Intern</option>
					<option value="Individual Contributor">Individual Contributor</option>
					<option value="Lead">Lead</option>
					<option value="Manager">Manager</option>
					<option value="Executive">Executive</option>
					<option value="Owner">Owner</option>
					</select>
					</td>
				</tr>
				<tr height="20"></tr>
				<tr>
					<td style="font-size:16px;padding-right:20px;"><b>Period:</b></td>
					<td><select name="month" class="styledselect_form_1 padd_td">
					<option value="">Select month</option>
					<option value="January">Janaury</option>
					<option value="february">february</option>
					<option value="March">March</option>
					<option value="April">April</option>
					<option value="May">May</option>
					<option value="June">June</option>
					<option value="July">July</option>
					<option value="August">August</option>
					<option value="September">September</option>
					<option value="October">October</option>
					<option value="November">November</option>
					<option value="December">December</option>
					</select>
					</td>
					<td><select name="year" class="styledselect_form_1 padd_td">
					<option value="Select">Select year</option>
					<option value="2000">2000</option>
					<option value="2001">2001</option>
					<option value="2002">2002</option>
					<option value="2003">2003</option>
					<option value="2004">2004</option>
					<option value="2005">2005</option>
					<option value="2006">2006</option>
					<option value="2007">2007</option>
					<option value="2008">2008</option>
					<option value="2009">2009</option>
					<option value="2010">2010</option>
					<option value="2011">2011</option>
					<option value="2012">2012</option>
					<option value="2013">2013</option>
					<option value="2014">2014</option>
					<option value="2015">2015</option>
					<option value="2016">2016</option>
					<option value="2017">2017</option>
					
					</select>
					</td>
					<td><select name="f_month" class="styledselect_form_1 padd_td">
					<option value="select">Select month</option>
					<option value="January">Janaury</option>
					<option value="february">february</option>
					<option value="March">March</option>
					<option value="April">April</option>
					<option value="May">May</option>
					<option value="June">June</option>
					<option value="July">July</option>
					<option value="August">August</option>
					<option value="September">September</option>
					<option value="October">October</option>
					<option value="November">November</option>
					<option value="December">December</option>
					</select>
					</td>
					<td><select name="f_year" class="styledselect_form_1 padd_td">
					<option value="Select">Select year</option>
					<option value="2000">2000</option>
					<option value="2001">2001</option>
					<option value="2002">2002</option>
					<option value="2003">2003</option>
					<option value="2004">2004</option>
					<option value="2005">2005</option>
					<option value="2006">2006</option>
					<option value="2007">2007</option>
					<option value="2008">2008</option>
					<option value="2009">2009</option>
					<option value="2010">2010</option>
					<option value="2011">2011</option>
					<option value="2012">2012</option>
					<option value="2013">2013</option>
					<option value="2014">2014</option>
					<option value="2015">2015</option>
					<option value="2016">2016</option>
					<option value="2017">2017</option>
					
					
					</select>
					</td>
				</tr>
				<tr height="50"></tr>
				<tr>
					<td style="font-size:16px;padding-right:20px;"><b>Description:</b></td>
					<td colspan="4">
          <textarea name="descr" rows="5" cols="20" class="form-textarea padd_td">
					</textarea>
					</td>
				</tr>
				<tr height="20"></tr>
				<tr>
			
					<td colspan="5" style="align:center"><input type="submit" name="submit" value="ADD"  class="form-submit padd_td"></td>
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