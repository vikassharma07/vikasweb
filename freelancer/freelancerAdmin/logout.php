<?php
	include("connection.php");
	session_start();
	if($_SESSION['username'])
	{
	unset($_SESSION['username'],$_SESSION['password']);
	header("location:index.php");
	
	}

?>	