<?php
$id=$_GET['id'];
include("connection.php");
$query="delete from category where id=".$id;
$result=mysql_query($query);
if($result=='1')
{
header("location:managecategory.php");
}
else
{
echo"deletion not done";
}