<?php 

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("user",$con);

$sql="CREATE TABLE answersheet(rollno INT(50),fname VARCHAR(50),lname VARCHAR(50),password VARCHAR(50),pset VARCHAR(50),marks INT(50),op1 INT(50),op2 INT(50),op3 INT(50),op4 INT(50),op5 INT(50),op6 INT(50),op7 INT(50),op8 INT(50),op9 INT(50),op10 INT(50),op11 INT(50),op12 INT(50),op13 INT(50),op14 INT(50),op15 INT(50),op16 INT(50),op17 INT(50),op18 INT(50),op19 INT(50),op20 INT(50))";

if(mysql_query($sql,$con))
{

echo "table created"; 

}
else
{

	echo"error";
}


?>