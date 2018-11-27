<?php 

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("CSE",$con);

$sql="CREATE TABLE sem5(roll_number int(10),studentname varchar(150),Computer_graphics int(2),Computer_network int(2),Design_and_analysis_of_algorithm int(2),princple_of_programming_language int(2),Advance_java int(2),Modeling_and_simulation int(2))";

if(mysql_query($sql,$con))
{

echo "table created"; 

}
else
{

	echo"error";
}


?>

