<?php 

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("ONLR",$con);

$sql="CREATE TABLE cse3(s_no int(10),oddsem varchar(50),evensem varchar(50))";

if(mysql_query($sql,$con))
{

echo "table created"; 

}
else
{

	echo"error";
}

   $insert = "INSERT INTO  cse3(s_no ,oddsem ,evensem) VALUES ('1','Computer_Graphics' ,'Operating_System')";
	mysql_query($insert,$con);
    $insert = "INSERT INTO  cse3(s_no ,oddsem ,evensem) VALUES ('2','Computer_Network' ,'Compiler_Design ')";
     mysql_query($insert,$con);

	$insert = "INSERT INTO  cse3(s_no ,oddsem ,evensem) VALUES ('3','Design_&_Analysis_of_Algorithms' ,'Artificial_Intelligence')";
	mysql_query($insert,$con);

	$insert = "INSERT INTO  cse3(s_no ,oddsem ,evensem) VALUES ('4',' Principles_of_Programming_Languages' ,'Graph_Theory')";
     mysql_query($insert,$con);

	$insert = "INSERT INTO  cse3(s_no ,oddsem ,evensem) VALUES ('5','Advance_Java_Programming','Visual_Programming_&_DotNet_Technologies') ";
	 mysql_query($insert,$con);

	$insert = "INSERT INTO  cse3(s_no ,oddsem ,evensem) VALUES ('6','Modeling_&_Simulation','Principles_of_Management')";
	mysql_query($insert,$con);
?>


 