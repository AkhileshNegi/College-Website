<?php 

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("ONLR",$con);

$sql="CREATE TABLE cse2(s_no int(10),oddsem varchar(50),evensem varchar(50))";

if(mysql_query($sql,$con))
{

echo "table created"; 

}
else
{

	echo"error";
}

    $insert = "INSERT INTO  cse2(s_no ,oddsem ,evensem) VALUES ('1','Discrete_Structures' ,'Computer_Organization')";
	mysql_query($insert,$con);
    $insert = "INSERT INTO  cse2(s_no ,oddsem ,evensem) VALUES ('2','Computer_Based_Numerical_&_Statistical_Techniques' ,' Unix_&_Shell_Programming')";
     mysql_query($insert,$con);

	$insert = "INSERT INTO  cse2(s_no ,oddsem ,evensem) VALUES ('3','Data Structures' ,'Theory_Of_Automata_&_Formal_Language ')";
	mysql_query($insert,$con);

	$insert = "INSERT INTO  cse2(s_no ,oddsem ,evensem) VALUES ('4',' Digital_Electronics_&_Design_Aspect' ,'Database_Management_System')";
     mysql_query($insert,$con);

	$insert = "INSERT INTO  cse2(s_no ,oddsem ,evensem) VALUES ('5',' Object_Oriented_Programming ','Microprocessor') ";
	 mysql_query($insert,$con);

	$insert = "INSERT INTO  cse2(s_no ,oddsem ,evensem) VALUES ('6','Engineering_Economics_&_Costing','Software Engineering')";
	mysql_query($insert,$con);
?>