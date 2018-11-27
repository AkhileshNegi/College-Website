<?php
include_once("connect2.php");
$sql="CREATE DATABASE ECE";
$result= mysql_query($sql) or die(mysql_error());
if($result)
{
	echo"data base created";
}
else{

	echo"unable";
}

?>