<?php
$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
if($con)
{
	echo 'connected successfully';
mysql_select_db("eesub",$con);

	$sql= "INSERT INTO   sub(subject) VALUES ('fundamental_of_computer_and_programming')";
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