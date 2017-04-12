<?php
	$id=$_GET['id'];
	include("connection.php");
	$query="delete from latestnews where id=".$id;
	$result=mysql_query($query);
	if($result=='1')
	{
	header("location:managenews.php");
	}
	else
	{
	echo"Deletion not done.";
	}
	?>