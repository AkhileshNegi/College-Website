<?php 

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("EE",$con);

$sql="CREATE TABLE sem4(roll_number int(10),studentname varchar(150),Electromechanical_energy_conversion_I int(2),Network_analysis_and_synthesis int(2),Electrical_electronic_engineering_materials int(2),Microprocessors_and_its_application int(2),Electromagnetic_field_theory int(2),Industrial_economics int(2))";

if(mysql_query($sql,$con))
{

echo "table created"; 

}
else
{

	echo"error";
}


?>
