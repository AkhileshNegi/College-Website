<?php 

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("EE",$con);

$sql="CREATE TABLE sem6(roll_number int(10),studentname varchar(150),Power_System_Analysis int(2),Control_System int(2),Power_Electronics int(2),Electrical_Machine_Design int(2),Data_Structure_Using_C_plus_plus int(2),Principles_Of_Management int(2))";

if(mysql_query($sql,$con))
{

echo "table created"; 

}
else
{

	echo"error";
}
?>
