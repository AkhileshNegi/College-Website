<?php 

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("cse_first_year",$con);

$sql="CREATE TABLE sem2(roll_number varchar(50),studentname varchar(150),mathematics2 varchar(150),chemistry varchar(150),advance_technical_communication varchar(150),basic_mechanical_engg varchar(150),fundamental_of_electronics_engg varchar(150))";

if(mysql_query($sql,$con))
{

echo "table created"; 

}
else
{

	echo"error";
}


?>