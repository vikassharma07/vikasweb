<?php
	include("connection.php");
	session_start();
	if($_SESSION['uname'])
	{
	unset($_SESSION['uname'],$_SESSION['pwd']);
	header("location:index.php");
	
	}

?>	