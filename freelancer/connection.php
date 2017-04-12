<?php
	$conn=mysql_connect("localhost","root","");
	if(!$conn)
	{
	echo "database error:".mysql_error();
	}
	mysql_select_db("freelancer",$conn);
?>	