<?php 

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("user",$con);

$sql="CREATE TABLE answersheet(rollno INT(50),fname VARCHAR(50),lname VARCHAR(50),password VARCHAR(50),setg VARCHAR(5),marks INT(50),op1 VARCHAR(5),op2 VARCHAR(5),op3 VARCHAR(5),op4 VARCHAR(5),op5 VARCHAR(5),op6 VARCHAR(5),op7 VARCHAR(5),op8 VARCHAR(5),op9 VARCHAR(5),op10 VARCHAR(5),op11 VARCHAR(5),op12 VARCHAR(5),op13 VARCHAR(5),op14 VARCHAR(5),op15 VARCHAR(5),op16 VARCHAR(5),op17 VARCHAR(5),op18 VARCHAR(5),op19 VARCHAR(5),op20 VARCHAR(5))";

if(mysql_query($sql,$con))
{

echo "table created"; 

}
else
{

	echo"error";
}


?>