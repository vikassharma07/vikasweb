<?php
ob_start();
?>
<script>
function submit()
{
document.forms["search"].submit();
}
</script>
    <section class="info-sec">
    	<div id="wrapper">
		
		<table border="1" width="92%">
			<tr>
				<td align="left" width="300"><div class="span4 left"><a href="#" class="logo">Sedna</a></div></td>
				<td align="right">		           </td>
				<td align="right">
					 <div class="span2 right">
					 <form name="search" method="get" action="searchh.php">
					 <input id="s" class="field input" type="text" name="find" value="Search..." onsubmit="submit();" onfocus="if (this.value == 'Search...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search...';}" ><a href=""><img src="images/search-cion.png" alt="serach-icon" class="right search-icon" /></a></div>
					<br /></form>
					 <div class="span6 right info-right-sec">
			<h2>
			<?php session_start();
			if(isset($_SESSION['uname']))
			{
			$uname=$_SESSION['uname'];
			echo"Welcome,";?>&nbsp;&nbsp;<?php	echo $uname;}
			?>
			</h2>
	</div>
				</td>
			</tr>
		</table>
        	
        
    	</div>
    </section>
    <section class="nav-bar">
    	<div id="wrapper">
            <nav class="clearfix">
                        <ul class="clearfix">
                            <li><a href="index.php" class="active"><img src="images/home-icon.png" alt="home-image" /></a></li>
                            <li><a href="details.php?pagename=About us">About Us</a></li>
                            <li><a href="jobs.php">My Jobs</a></li>
							<li><a href="test.php">Tests</a></li>
							<?php 
							if(isset($_SESSION['uname']))
							{ ?>
							<li><a href="myprofile.php">My Profile</a></li>
							<li><a href="logout.php">Logout</a></li>
							<?php } 
							else { ?>
							<li><a href="signup.php">Sign up</a></li>
							<li><a href="userlogin.php">Sign in</a></li>
							<?php } ?>
                        </ul>
                        <a href="index.html" id="pull"></a>
             </nav>
        </div>
		</section>
<?php
ob_flush();
?>