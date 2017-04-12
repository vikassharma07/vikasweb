<?php
$id=$_GET['id'];
include("connection.php");
$query="delete from signup where id=".$id;
$result=mysql_query($query);
if($result=='1')
{
header("location:manageuser.php");
}
else
{
echo"deletion not done";
}