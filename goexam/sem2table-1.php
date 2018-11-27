<?php 

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("CSE",$con);

$sql="CREATE TABLE sem2(roll_number int(10),studentname varchar(150),mathematics2 int(2),chemistry int(2),advance_technical_communication int(2),basic_mechanical_engg int(2),fundamental_of_electronics_engg int(2),environmental_studies int(2))";

if(mysql_query($sql,$con))
{

echo "table created"; 

}
else
{

	echo"error";
}


?>