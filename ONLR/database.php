<?php
include_once("connect.php");
$sql="CREATE DATABASE ONLR";
$result= mysql_query($sql) or die(mysql_error());
if($result)
{
	echo"data base created";
}
else{

	echo"unable";
}

?>