<?php 

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("ECE",$con);

$sql="CREATE TABLE sem5(roll_number int(10),studentname varchar(150),Automatic_control_system int(2),Digital_signal_processing int(2),VLSI_technology int(2),Advanced_microprocessors int(2),Antenna_and_wave_propagation int(2),Concepts_of_programming_oops int(2))";

if(mysql_query($sql,$con))
{

echo "table created"; 

}
else
{

	echo"error";
}


?>

