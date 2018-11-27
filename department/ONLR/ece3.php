<?php 

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("ONLR",$con);

$sql="CREATE TABLE ece3(s_no int(10),oddsem varchar(50),evensem varchar(50))";

if(mysql_query($sql,$con))
{

echo "table created"; 

}
else
{

	echo"error";
}



	$insert = "INSERT INTO  ece3(s_no ,oddsem ,evensem) VALUES ('1','Automatic_Control_Systems' ,'Microwave_Techniques')";
	mysql_query($insert,$con);
    $insert = "INSERT INTO  ece3(s_no ,oddsem ,evensem) VALUES ('2','Digital_Signal_Processing' ,'VLSI_Circuit_Design')";
     mysql_query($insert,$con);

	$insert = "INSERT INTO  ece3(s_no ,oddsem ,evensem) VALUES ('3','VLSI_Technology' ,' Telecommunication_Switching_Systems')";
	mysql_query($insert,$con);

	$insert = "INSERT INTO  ece3(s_no ,oddsem ,evensem) VALUES ('4',' Advanced_Microprocessors' ,'Digital_Communication')";
     mysql_query($insert,$con);

	$insert = "INSERT INTO  ece3(s_no ,oddsem ,evensem) VALUES ('5',' Antenna_And_Wave_Propagation','Data_Structures_Using_C++') ";
	 mysql_query($insert,$con);

	$insert = "INSERT INTO  ece3(s_no ,oddsem ,evensem) VALUES ('6','Concepts_of_Programming_and_OOPs','Principles_of_Management')";
	mysql_query($insert,$con);

?>

 