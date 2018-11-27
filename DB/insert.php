<?php
$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
if($con)
{
	echo 'connected successfully';
mysql_select_db("ee",$con);

	$sql= "INSERT INTO   sem1(roll_number,studentname,mathematics1 ,engg_physic ,basic_technical_communication ,basic_electrical_engg ,fundamental_of_computer_and_programming) VALUES ('1','akhilesh','20','20','20','20','20')";
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