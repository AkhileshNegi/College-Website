<?php
$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
if($con)
{
	echo 'connected successfully';
mysql_select_db("student",$con);

	$sql= "INSERT INTO   attend(roll,name,attendance) VALUES ('5','parth','2')";
	$query= mysql_query($sql,$con);
if($query)
	{
		echo "data inserted";
	}
	else
	{
		echo "data not inserted";
	}
}
?>