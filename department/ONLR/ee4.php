<?php 

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("ONLR",$con);

$sql="CREATE TABLE ee4(s_no int(10),oddsem varchar(50),evensem varchar(50))";

if(mysql_query($sql,$con))
{

echo "table created"; 

}
else
{

	echo"error";
}


	$insert = "INSERT INTO  ee4(s_no ,oddsem ,evensem) VALUES ('1','Power_System_Operation_And_Control' ,'Instrumentation_and_process_Control')";
	mysql_query($insert,$con);
    $insert = "INSERT INTO  ee4(s_no ,oddsem ,evensem) VALUES ('2',' Electric_Drives' ,'EHV_AC_&_DC_Transmission')";
     mysql_query($insert,$con);

	$insert = "INSERT INTO  ee4(s_no ,oddsem ,evensem) VALUES ('3',' Neural_network_and_Fuzzy_logic' ,' Elective_II')";
	mysql_query($insert,$con);

	$insert = "INSERT INTO  ee4(s_no ,oddsem ,evensem) VALUES ('4','Elective_I' ,'Elective_III')";
     mysql_query($insert,$con);

	$insert = "INSERT INTO  ee4(s_no ,oddsem ,evensem) VALUES ('5','Open_Elective','') ";
	 mysql_query($insert,$con);

	
?>


