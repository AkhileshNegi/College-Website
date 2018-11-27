<?php 

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("EE",$con);

$sql="CREATE TABLE sem4(roll_number int(10),studentname varchar(150),Electromechanical_Energy_Conversion_I int(2),Network_Analysis_And_Synthesis int(2),Electrical_And_Electronic_Engineering_Materials int(2),Microprocessor_Its_Application int(2),Electromagnetic_Magnetic_Field_Theory int(2),Industrial_Economics int(2))";

if(mysql_query($sql,$con))
{

echo "table created"; 

}
else
{

	echo"error";
}


?>







