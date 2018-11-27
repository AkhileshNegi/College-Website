<?php 
$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("EE",$con);
$sql="CREATE TABLE sem5(roll_number int(10),studentname varchar(150),Electromechanical_Energy_conversion_II int(2),System_Engineering int(2),Applied_And_Electronic_Instrumentation int(2),Fundamental_Of_Power_System int(2),Digital_Signal_Processing int(2),Concepts_Of_Programming int(2))";

if(mysql_query($sql,$con))
{

echo "table created"; 

}
else
{

	echo"error";
}
?>
