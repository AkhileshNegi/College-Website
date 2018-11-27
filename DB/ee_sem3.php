<?php 

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("EE",$con);

$sql="CREATE TABLE sem3(roll_number int(10),studentname varchar(150),Mathematics_III int(2),Basic_Network_Analysis int(2),Thermal_And_Fluid_Machines int(2),Electrical_Measurement_And_Instruments int(2),Solid_State_Device_And_Circuit int(2),Digital_Electronics int(2))";

if(mysql_query($sql,$con))
{

echo "table created"; 

}
else
{

	echo"error";
}
?>
