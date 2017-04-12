<?php
			include("connection.php");
			
			if(isset($_SESSION['uname']))
			{
			$uname=$_SESSION['uname'];
			$query="select * from signup where uname='".$uname."'";
			$result=mysql_query($query);
			 while($row=mysql_fetch_array($result))
				{
				$id=$row['id'];
				$image=$row['image'];
				}?>
			<div style="background-color:#03AAF4; border-radius:30px; border:4px solid #FF6600; padding:20px">
			<div class="profilehead">My Profile</div>
			<div class="profile_image">
			<img src="../freelancer/user/<?php echo $image;?>"height="200px" width="150px"style="border-radius:30px; border:4px solid #FF6600;"></div>
			<div>
				<a href="editprofile.php?id=<?php echo $id;?>" style="color:#FFF; text-decoration:none; font-weight:bold">
				Edit your profile
				</a>
			</div>
			<br/>
			<div>
				<a href="myprofile.php" style="color:#FFF; text-decoration:none; font-weight:bold">
					View my profile
				</a>
			</div>
			<div><hr></hr></div>
		
		</div>
		
			<?php } ?>
			<div style="height:30px">&nbsp;</div>
			
			
			<div style="background-color:#03AAF4; border-radius:30px; border:4px solid #FF6600; padding:10px">
				<div class="testimonials-info-sec" >
				<h1 class="profilehead" >Recent News</h1>
				<marquee direction="up" onmouseover="this.stop();" onmouseout="this.start();">

				<?php 
				include("connection.php");
				$query="select * from latestnews";
				$result=mysql_query($query);
				while($row=mysql_fetch_array($result))
				{
				$id=$row['id'];
				$m_news=$row['m_news'];
				$description=$row['description'];
				$desc=substr($description,0,150);
				$m_date=$row['m_date'];

				$image=$row['image'];
				?> 
				<table width="100%" border="3">
					<tr>
						<td colspan="2"><h3 style="color:#FF6600; text-decoration:none; font-size:18px; font-weight:bold"><?php echo $m_news;?></h3></td>
						</tr>
						<tr><td colspan="2" style="color:#FFF">(published by: <?php echo $m_date;?>)</td>
						</tr>
						<tr>
						<td  valign="top" width="100"><img src="freelanceradmin/news/<?php echo $image;?>" width="100" height="150"/></td>
							
						<td valign="top" style="color:#FFF; text-decoration:none; font-weight:bold"><?php echo $desc; ?>......<a href="news.php" style="color:#FF6600; text-decoration:none; font-weight:bold">Read More</a></td>
						</tr>
						</table>
		<hr />
				<?php } ?>
			</marquee>	
			</div>	
                

					<br></br>
					
					<a href="news.php" style="color:#FFF; text-decoration:none; font-weight:bold">See More News</a>
				
				<br></br>
				
				</div>
				
							<div style="height:30px">&nbsp;</div>

<div style="background-color:#03AAF4; border-radius:30px; border:4px solid #FF6600; padding:10px">
<h1 class="profilehead" style="align:left">Enquiry Form</h1>

<?php
	include("connection.php");
	
	if(isset($_POST['Register'])=='Send')
		{
			$yourname=$_POST['yourname'];
			$email=$_POST['email'];
			$phone=$_POST['phone'];
			$message=$_POST['message'];
			 $query="insert into enquirydetails(yourname,email,contactnumber,message) value('$yourname','$email','$phone','$message')";
			$result=mysql_query($query);
			if($result=='1')
			{
			echo"Your enquiry successfully send"; 
			//header("location:enqurieslisting.php");
			}
			else
			{
			echo "registration failed";
			}
		}
		else
		{
?>

<form name="myform" action="" method="post" onsubmit="validation();">
<table border="0" cellpadding="0" cellspacing="0">

						<tr>
							<td><b>YourName:</b></td>
						</tr>
						
						<tr>	
							
							<td><input type="text" style="border-radius:15px;border:2px solid #FF6600; "name="yourname"></td>
						</tr>
						
						<tr>
							<td><b>Email:</b></td>
							</tr>
						
						<tr>
							<td><input type="text" style="border-radius:15px;border:2px solid #FF6600;" name="email"></td>
						</tr>
						<tr>
							<td><b>ContactNumber:</b> </td>
							</tr>
						
						<tr>
							<td><input type="tel"  style="border-radius:15px;border-color:#FF6600;border:2px solid #FF6600;" name="phone"></td>
						</tr>
						
						
						<tr>
							<td><b>Message:</b></td>
							</tr>
						
						<tr>
							<td><textarea name="message" rows="4" col="4" style="border-radius:15px;border:2px solid #FF6600;;"></textarea></td>
						
						
						<tr>
							
							<td><input type="submit" name="Register" style="border-radius:15px;background-color:#FF6600;color:white;" value="Send"></td>
						</tr>
</table>
</form>
<?php } ?>
</div>				