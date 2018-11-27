<?php 

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("EE",$con);

$sql="CREATE TABLE sem7(roll_number int(10),studentname varchar(150),Power_System_Operation_And_control int(2),Electric_Drives int(2),Neural_Network_And_Fuzzy_Logic int(2),ELECTIVE_I int(2),Open_Elective int(2))";
if(mysql_query($sql,$con))
{

echo "table created"; 

}
else
{

	echo"error";
}


?>
