<?php 

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("CSE",$con);

$sql="CREATE TABLE sem4(roll_number int(10),studentname varchar(150),Computer_organization int(2),Unix_and_shell_programming int(2),Theory_automata_and_formal_language int(2),Database_management_system int(2),Microprocessor int(2),Software_engineering int(2))";

if(mysql_query($sql,$con))
{

echo "table created"; 

}
else
{

	echo"error";
}


?>
