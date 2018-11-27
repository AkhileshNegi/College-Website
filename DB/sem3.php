<?php 

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("CSE",$con);

$sql="CREATE TABLE sem3(roll_number int(10),studentname varchar(150),Discrete_structures int(2),Computer_based_numerical_and_statistical_technique int(2),Data_structure int(2),Digital_electronics int(2),Object_oriented_programming int(2),Engineering_economics_and_costing int(2))";

if(mysql_query($sql,$con))
{

echo "table created"; 

}
else
{

	echo"error";
}
?>