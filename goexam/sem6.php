<?php 

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("CSE",$con);

$sql="CREATE TABLE sem6(roll_number int(10),studentname varchar(150),Operating_system int(2),Compiler_design int(2),Artifical_intelligence int(2),Graph_theory int(2),Visual_programming_and_dotnet int(2),principles_of_management int(2))";

if(mysql_query($sql,$con))
{

echo "table created"; 

}
else
{

	echo"error";
}


?>
