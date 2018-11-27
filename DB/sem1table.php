<?php 

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("cse_first_year",$con);

$sql="CREATE TABLE sem1(roll_number varchar(50),studentname varchar(150),mathematics1 varchar(150),engg_physic varchar(150),basic_technical_communication varchar(150),basic_electrical_engg varchar(150),fundamental_of_computer_and_programming varchar(150), enviromental_studies varchar(150))";

if(mysql_query($sql,$con))
{

echo "table created"; 

}
else
{

	echo"error";
}


?>