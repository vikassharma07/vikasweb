<html>
	<head>
	</head>
	<body>
	<?php
	include("connection.php");
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
	if(isset($_POST['submit'])=='EDIT')
	{
	$uname=$_POST['uname'];
	$pwd=$_POST['pwd'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$emailid=$_POST['emailid'];
	$country=$_POST['country'];
	$newimage=$_POST['image'];
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
	$query="update from signup set uname='$uname',pwd='$pwd',fname='$fname',lname='$lname',emailid='$emailid',country='$country',image='$oldimage',professionaltitle='$professionaltitle',overview='$overview',skills='$skills',availability='$availability',education='$education',name='$name',passedyear='$passedyear',e_desc='$e_desc',company='$company',city='$city',l_country='$l_country',title='$title',role='$role',month='$month',year='$year',f_month='$f_month',f_year='$f_year',descr='$descr' where id=".$id;
	$result=mysql_query($query);
	}
	else
	{
	$image=moves_uploaded_file($_FILES['image']['tmp_name'],"user/".$_FILES['image']['name']);
	$query="update from signup set uname='$uname',pwd='$pwd',fname='$fname',lname='$lname',emailid='$emailid',country='$country',image='$newimage',professionaltitle='$professionaltitle',overview='$overview',skills='$skills',availability='$availability',education='$education',name='$name',passedyear='$passedyear',e_desc='$e_desc',company='$company',city='$city',l_country='$l_country',title='$title',role='$role',month='$month',year='$year',f_month='$f_month',f_year='$f_year',descr='$descr' where id=".$id;
	$result=mysql_query($query);
	}
	if(result=='1')
	{
	echo"editing successful";
	}
	else
	{
	echo"Error";
	}
	}
	
	?>
		<form name="myform" method="post" action="edit.php" enctype="multipart/form-data">
			<table border="1" width="60%" height="60%" cellpadding="3" cellspacing="3">
			<tr>
			<td colspan="5"><b>User Details</b></td>
			</tr>
				<tr>
					<td>Username</td>
					<td colspan="4"><input type="text" name="uname" value="<?php echo $uname;?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td colspan="4"><input type="password" name="pwd" value="<?php echo $pwd;?>"</td>
				</tr>
				<tr>
			 <td colspan="5"><b>Personal Details</b></td>
			 </tr>
				<tr>
					<td>First Name</td>
					<td colspan="4"><input type="text" name="fname" value="<?php echo $fname;?>"></td>
				</tr>
				<tr>
					<td>Last Name</td>
					<td colspan="4"><input type="text" name="lname" value="<?php echo $lname;?>"></td>
				</tr>
				<tr>
					<td>Email-id</td>
					<td colspan="4"><input type="text" name="emailid" value="<?php echo $emailid;?>"></td>
				</tr>
				<tr>
					<td>Country</td>
					<td colspan="4"><select name="country">
					<option value="-1">Select country</option>
					<option value="Canada"<?php if($country=='Canada'){echo "selected";}?>>Canada</option>
					<option value="India" <?php if($country=='India'){echo "selected";}?>>India</option>
					<option value="America" <?php if($country=='America'){echo "selected";}?>>America</option>
					<option value="Australia" <?php if($country=='Australia'){echo "selected";}?>>Australia</option>
					<option value="Bangladesh" <?php if($country=='Bangladesh'){echo "selected";}?>>Bangladesh</option>
					<option value="Brazil" <?php if($country=='Brazil'){echo "selected";}?>>Brazil</option>
					<option value="Germany" <?php if($country=='Germany'){echo "selected";}?>>Germany</option>
					<option value="Italy" <?php if($country=='Italy'){echo "selected";}?>>Italy</option>
					<option value="China" <?php if($country=='China'){echo "selected";}?>>China</option>
					</select></td>
				</tr>
				<tr>
					<td>Upload Photo</td>
					<td colspan="4"><input type="file" name="image" value="<?php echo $image;?>"></td>
				</tr>
				<tr>
					<td>Professional Title</td>
					<td colspan="4"><input type="text" name="professionaltitle" value="<?php echo$professionaltitle;?>"></td>
				</tr>
				<tr>
					<td>Overview</td>
					<td colspan="4"><textarea name="overview" rows="5" cols="20"><?php echo$overview;?></textarea>
					</td>
				</tr>
				<tr>
					<td>Skills</td>
					<td colspan="4"><input type="text" name="skills" value="<?php echo $skills;?>"></td>
				</tr>
				<tr>
					<td>Availability to Work</td>
					<td colspan="4"><select name="availability">
					<option value="-2">Please select</option>
					<option value="Full time"<?php if($availability=='Full time'){echo"selected";}?>>Full time</option>
					<option value="Part time" <?php if($availability=='Part time'){echo"selected";}?>>Part time</option>
					<option value="As needed" <?php if($availability=='As needed'){echo"selected";}?>>As needed</option>
					<option value="Not sure at this time" <?php if($availability=='Not sure at this time'){echo"selected";}?>>Not sure at this time</option>
					</select>
					</td>
				</tr>	
					
				<tr>
					<td colspan="5"><b>Education</b></td>
				</tr>
				<tr>
					<td>Education</td>
					<td colspan="4"><select name="education">
					<option value="-3">Select education</option>
					<option value="graduation"<?php if($education=='graduation'){echo"selected";}?>>Graduation</option>
					<option value="post graduation"<?php if($education=='post graduation'){echo"selected";}?>>Post graduation</option>
					</select>
					</td>
				</tr>
				<tr>
					<td>Name</td>
					<td colspan="4"><input type="text" name="name" value="<?php echo $name;?>"></td>
				</tr>	
				<tr>
					<td>Passed Year</td>
					<td colspan="4"><select name="passedyear">
					<option value="-4">Select year</option>
					<option value="2004"<?php if($passedyear=='2004'){echo"selected";}?>>2004</option>
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
				<tr>
					<td>Description</td>
					<td colspan="4"><textarea name="e_desc" rows="5" cols="20"><?php echo $e_desc;?></textarea>
					</td>
				</tr>
				<tr>
					<td colspan="5"><b>Employement History</b></td>
				</tr>
				<tr>
					<td>Company</td>
					<td colspan="4"><input type="text" name="company" value="<?php echo $company;?>"></td>
				</tr>
				<tr>
					<td>Location</td>
					<td colspan="2"><input type="text" name="city" placeholder="City" value="<?php echo $city;?>"></td>
					<td colspan="2"><input type="text" name="l_country" placeholder="Country"<?php echo $l_country;?> ></td>
				</tr>	
				<tr>
					<td>Title</td>
					<td colspan="4"><input type="text" name="title" value="<?php echo $title;?>"></td>
				</tr>
				<tr>
					<td>Role</td>
					<td colspan="4"><select name="role">
					<option value="-5">Please Select</option>
					<option value="Intern"<?php if($role=='Intern'){echo"selected";}?>>Intern</option>
					<option value="Individual Contributor"<?php if($role=='Individual Contributor'){echo"selected";}?>>Individual Contributor</option>
					<option value="Lead" <?php if($role=='Lead'){echo"selected";}?>>Lead</option>
					<option value="Manager" <?php if($role=='Manager'){echo"selected";}?>>Manager</option>
					<option value="Executive" <?php if($role=='Executive'){echo"selected";}?>>Executive</option>
					<option value="Owner" <?php if($role=='Owner'){echo"selected";}?>>Owner</option>
					</select>
					</td>
				</tr>
				<tr>
					<td>Period</td>
					<td><select name="month">
					<option value="-6">Select month</option>
					<option value="January"<?php if($month=='January'){echo"selected";}?>>Janaury</option>
					<option value="february"<?php if($month=='February'){echo"selected";}?>>february</option>
					<option value="March" <?php if($month=='March'){echo"selected";}?>>March</option>
					<option value="April"<?php if($month=='April'){echo"selected";}?>>April</option>
					<option value="May"<?php if($month=='May'){echo"selected";}?>>May</option>
					<option value="June"<?php if($month=='June'){echo"selected";}?>>June</option>
					<option value="July" <?php if($month=='July'){echo"selected";}?>>July</option>
					<option value="August" <?php if($month=='August'){echo"selected";}?>>August</option>
					<option value="September" <?php if($month=='September'){echo"selected";}?>>September</option>
					<option value="October" <?php if($month=='October'){echo"selected";}?>>October</option>
					<option value="November"<?php if($month=='November'){echo"selected";}?>>November</option>
					<option value="December"<?php if($month=='December'){echo"selected";}?>>December</option>
					</select>
					</td>
					<td><select name="year">
					<option value="-7">Select year</option>
					<option value="2000"<?php if($month=='2000'){echo"selected";}?>>2000</option>
					<option value="2001"<?php if($year=='2001'){echo"selected";}?>>2001</option>
					<option value="2002"<?php if($year=='2002'){echo"selected";}?>>2002</option>
					<option value="2003"<?php if($year=='2003'){echo"selected";}?>>2003</option>
					<option value="2004"<?php if($year=='2004'){echo"selected";}?>>2004</option>
					<option value="2005"<?php if($year=='2005'){echo"selected";}?>>2005</option>
					<option value="2006"<?php if($year=='2006'){echo"selected";}?>>2006</option>
					<option value="2007"<?php if($year=='2007'){echo"selected";}?>>2007</option>
					<option value="2008"<?php if($year=='2008'){echo"selected";}?>>2008</option>
					<option value="2009"<?php if($year=='2009'){echo"selected";}?>>2009</option>
					<option value="2010"<?php if($year=='2010'){echo"selected";}?>>2010</option>
					<option value="2011"<?php if($year=='2011'){echo"selected";}?>>2011</option>
					<option value="2012"<?php if($year=='2012'){echo"selected";}?>>2012</option>
					<option value="2013"<?php if($year=='2013'){echo"selected";}?>>2013</option>
					<option value="2014"<?php if($year=='2014'){echo"selected";}?>>2014</option>
					</select>
					</td>
					<td><select name="f_month">
					<option value="-8">Select month</option>
					<option value="January"<?php if($f_month=='Janaury'){echo"selected";}?>>Janaury</option>
					<option value="february"<?php if($f_month=='Feburary'){echo"selected";}?>>february</option>
					<option value="March"<?php if($f_month=='March'){echo"selected";}?>>March</option>
					<option value="April"<?php if($f_month=='April'){echo"selected";}?>>April</option>
					<option value="May"<?php if($f_month=='May'){echo"selected";}?>>May</option>
					<option value="June"<?php if($f_month=='June'){echo"selected";}?>>June</option>
					<option value="July"<?php if($f_month=='July'){echo"selected";}?>>July</option>
					<option value="August"<?php if($f_month=='August'){echo"selected";}?>>August</option>
					<option value="September"<?php if($f_month=='September'){echo"selected";}?>>September</option>
					<option value="October"<?php if($f_month=='October'){echo"selected";}?>>October</option>
					<option value="November"<?php if($f_month=='November'){echo"selected";}?>>November</option>
					<option value="December"<?php if($f_month=='December'){echo"selected";}?>>December</option>
					</select>
					</td>
					<td><select name="f_year">
					<option value="-9">Select year</option>
					<option value="2000"<?php if($f_year=='2000'){echo"selected";}?>>2000</option>
					<option value="2001"<?php if($f_year=='2001'){echo"selected";}?>>2001</option>
					<option value="2002"<?php if($f_year=='2002'){echo"selected";}?>>2002</option>
					<option value="2003"<?php if($f_year=='2003'){echo"selected";}?>>2003</option>
					<option value="2004"<?php if($f_year=='2004'){echo"selected";}?>>2004</option>
					<option value="2005"<?php if($f_year=='2005'){echo"selected";}?>>2005</option>
					<option value="2006"<?php if($f_year=='2006'){echo"selected";}?>>2006</option>
					<option value="2007"<?php if($f_year=='2007'){echo"selected";}?>>2007</option>
					<option value="2008"<?php if($f_year=='2008'){echo"selected";}?>>2008</option>
					<option value="2009"<?php if($f_year=='2009'){echo"selected";}?>>2009</option>
					<option value="2010"<?php if($f_year=='2010'){echo"selected";}?>>2010</option>
					<option value="2011"<?php if($f_year=='2011'){echo"selected";}?>>2011</option>
					<option value="2012"<?php if($f_year=='2012'){echo"selected";}?>>2012</option>
					<option value="2013"<?php if($f_year=='2013'){echo"selected";}?>>2013</option>
					<option value="2014"<?php if($f_year=='2014'){echo"selected";}?>>2014</option>
					</select>
					</td>
				</tr>
				<tr>
					<td>Decription</td>
					<td colspan="4"><textarea name="desc" rows="5" cols="20">
					<?php echo $desc;?>
					</textarea>
					</td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="ADD"></td>
					<td><input type="submit" name="submit" value="EDIT"></td>
				</tr>	
					
			</table>
		</form>
	</body>
