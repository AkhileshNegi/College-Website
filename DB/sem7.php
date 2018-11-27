<?php 

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("CSE",$con);

$sql="CREATE TABLE sem7(roll_number int(10),studentname varchar(150),System_Administration int(2),Advance_Computer_Architecture int(2),Data_Warehousing_Mining int(2),ELECTIVE_I int(2),Open_Elective int(2))";
if(mysql_query($sql,$con))
{

echo "table created"; 

}
else
{

	echo"error";
}


?>
