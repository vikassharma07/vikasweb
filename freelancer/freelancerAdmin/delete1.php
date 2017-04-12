<?php
	include("connection.php");
	$chk=$_POST['checkbox'];
	foreach($chk as $id)
	{
	$query="delete from addpages where id=".$id;
	$result=mysql_query($query);
	{
	if($result=='1')
	{
	header("pagelisting.php");
	}
	else
	{
	echo"Error";
	
	}
	}
	}
?>