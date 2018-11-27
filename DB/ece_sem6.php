<?php 

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("ECE",$con);

$sql="CREATE TABLE sem6(roll_number int(10),studentname varchar(150),Microwave_technique int(2),VLSI_circuit_design int(2),Telecommunication_Switching_Systems int(2),Digital_communication int(2),Data_structure_using_cplusplus int(2),principles_of_management int(2))";

if(mysql_query($sql,$con))
{

echo "table created"; 

}
else
{

	echo"error";
}


?>
