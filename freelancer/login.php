<?php
ob_start();
?>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Apple-like Login Form | Tutorialzine Demo</title>
        
        <!-- Our CSS stylesheet file -->
        <link rel="stylesheet" href="assets/css/styles.css" />
        
        <!--[if lt IE 9]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
	<body>
		<?php
		include("connection.php");
		session_start();
		if(isset($_POST['submit'])=='LOGIN')
	{
	$uname=$_POST['uname'];
	$pwd=$_POST['pwd'];
	$query="select * from signup where uname='$uname' and pwd='$pwd'";  
	$result=mysql_query($query);
	$num_rows=mysql_num_rows($result);
	if($num_rows=='1')
{
$_SESSION['uname']=$uname;
$_SESSION['pwd']=$pwd;
header("location:wlcme.php");
}
else
{
echo"Username and password doesn't matched.Please try again.";
}
}
		?>
		<div id="formContainer">
			<form id="login" method="post" action="">
				<a href="#" id="flipToRecover" class="flipLink">Forgot?</a>
				<input type="text" name="uname" id="loginEmail" value="Email" />
				<input type="password" name="pwd" id="loginPass" value="pass" />
				<input type="submit" name="submit" value="LOGIN" />
			</form>
			<form id="recover" method="post" action="./">
				<a href="#" id="flipToLogin" class="flipLink">Forgot?</a>
				<input type="text" name="recoverEmail" id="recoverEmail" value="Email" />
				<input type="submit" name="submit" value="Recover" />
			</form>
		</div>

       
        <!-- JavaScript includes -->
		<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		<script src="assets/js/script.js"></script>

    </body>
</html>
<?php
ob_flush();
?>


		