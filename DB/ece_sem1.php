<?php 

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("ECE",$con);

$sql="CREATE TABLE sem1(roll_number int(10),studentname varchar(150),mathematics1 int(2),engg_physic int(2),basic_technical_communication int(2),basic_electrical_engg int(2),fundamental_of_computer_and_programming int(2))";

if(mysql_query($sql,$con))
{

echo "table created"; 

}
else
{

	echo"error";
}
?>