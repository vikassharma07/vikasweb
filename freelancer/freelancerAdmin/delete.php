<?php
	$id=$_GET['id'];
	include("connection.php");
	$query="delete from addpages where id=".$id;
	$result=mysql_query($query);
	if($result=='1')
	{
	header("location:pagelisting.php");
	}
	else
	{
	echo"Deletion not done.";
	}
	?>