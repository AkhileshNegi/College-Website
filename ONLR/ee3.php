<?php 

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("ONLR",$con);

$sql="CREATE TABLE ee3(s_no int(10),oddsem varchar(50),evensem varchar(50))";

if(mysql_query($sql,$con))
{

echo "table created"; 

}
else
{

	echo"error";
}


	$insert = "INSERT INTO  ee3(s_no ,oddsem ,evensem) VALUES ('1','Electromechanical_Energy_Conversion_II' ,'Power_System_Analysis')";
	mysql_query($insert,$con);
    $insert = "INSERT INTO  ee3(s_no ,oddsem ,evensem) VALUES ('2','System_Engineering' ,'Control_System')";
     mysql_query($insert,$con);

	$insert = "INSERT INTO  ee3(s_no ,oddsem ,evensem) VALUES ('3','Applied_&_Electronics_Instrumentation' ,'Power_Electronics')";
	mysql_query($insert,$con);

	$insert = "INSERT INTO  ee3(s_no ,oddsem ,evensem) VALUES ('4','Digital_Signal_Processing' ,'Electrical_Machine_Design')";
     mysql_query($insert,$con);

	$insert = "INSERT INTO  ee3(s_no ,oddsem ,evensem) VALUES ('5','Fundamental_Of_Power_System','Data_Structure_Using_C++') ";
	 mysql_query($insert,$con);

	$insert = "INSERT INTO  ee3(s_no ,oddsem ,evensem) VALUES ('6','Concepts_Of_Programming_&_OOPS','Principles_Of_Management')";
	mysql_query($insert,$con);


?>