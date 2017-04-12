<?php
$id=$_GET['id'];
include("connection.php");
$query="delete from postmanagement where id=".$id;
$result=mysql_query($query);
if($result=='1')
{
header("location:managepost.php");
}
else
{
echo"deletion not done";
}