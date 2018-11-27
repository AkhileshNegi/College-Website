<?php 

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("ONLR",$con);

$sql="CREATE TABLE cse1(s_no int(10),oddsem varchar(50),evensem varchar(50))";

if(mysql_query($sql,$con))
{

echo "table created"; 

}
else
{

	echo"error";
}
    $insert = "INSERT INTO  cse1(s_no ,oddsem ,evensem) VALUES ('1','mathematics1' ,'mathematics2')";
	mysql_query($insert,$con);
    $insert = "INSERT INTO  cse1(s_no ,oddsem ,evensem) VALUES ('2','engg_physic' ,'engg_chemistry')";
     mysql_query($insert,$con);

	$insert = "INSERT INTO  cse1(s_no ,oddsem ,evensem) VALUES ('3','basic_technical_communication' ,'advance_technical_communication')";
	mysql_query($insert,$con);

	$insert = "INSERT INTO  cse1(s_no ,oddsem ,evensem) VALUES ('4','basic_electrical_engg' ,'basic_mechnical_engg')";
     mysql_query($insert,$con);

	$insert = "INSERT INTO  cse1(s_no ,oddsem ,evensem) VALUES ('5','fundamental_of_computer_and_programming','fundamental_of_electronics_engineering') ";
	 mysql_query($insert,$con);

	$insert = "INSERT INTO  cse1(s_no ,oddsem ,evensem) VALUES ('6','','environmental_studies')";
	mysql_query($insert,$con);

?>