<?php 

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("ONLR",$con);

$sql="CREATE TABLE ece4(s_no int(10),oddsem varchar(50),evensem varchar(50))";

if(mysql_query($sql,$con))
{

echo "table created"; 

}
else
{

	echo"error";
}


	$insert = "INSERT INTO  ece4(s_no ,oddsem ,evensem) VALUES ('1','Optical_Fiber_Communication' ,'Wireless_Communication')";
	mysql_query($insert,$con);
    $insert = "INSERT INTO  ece4(s_no ,oddsem ,evensem) VALUES ('2',' Electronics_Switching' ,'Data_Communication_Networks')";
     mysql_query($insert,$con);

	$insert = "INSERT INTO  ece4(s_no ,oddsem ,evensem) VALUES ('3',' Elective_I' ,'Elective_III ')";
	mysql_query($insert,$con);

	$insert = "INSERT INTO  ece4(s_no ,oddsem ,evensem) VALUES ('4','Elective_II' ,'Elective_IV')";
     mysql_query($insert,$con);

	$insert = "INSERT INTO  ece4(s_no ,oddsem ,evensem) VALUES ('5','Open_Elective','') ";
	 mysql_query($insert,$con);

	
?>
  