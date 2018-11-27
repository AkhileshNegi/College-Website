<?php 

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("EE",$con);

$sql="CREATE TABLE sem3(roll_number int(10),studentname varchar(150),Mathematics_III int(2),Basic_network_analysis int(2),Thermal_and_fluid_analysis int(2),Electrical_Measurement_and_Instruments int(2),Solid_state_devices_and_circuits int(2),Digital_electronics int(2))";

if(mysql_query($sql,$con))
{

echo "table created"; 

}
else
{

	echo"error";
}
?>
