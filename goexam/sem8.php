<?php 

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("CSE",$con);

$sql="CREATE TABLE sem8(roll_number int(10),studentname varchar(150),Distributed_computing int(2),Web_technology int(2),ELECTIVE_II int(2),ELECTIVE_III int(2))";

if(mysql_query($sql,$con))
{

echo "table created"; 

}
else
{

	echo"error";
}


?>
