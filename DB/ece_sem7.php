<?php 

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("ECE",$con);

$sql="CREATE TABLE sem7(roll_number int(10),studentname varchar(150),Optical_fiber_communication int(2),Electronics_switching int(2),Elective_II int(2),ELECTIVE_I int(2),Open_Elective int(2))";
if(mysql_query($sql,$con))
{

echo "table created"; 

}
else
{

	echo"error";
}


?>

