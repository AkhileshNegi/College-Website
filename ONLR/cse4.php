<?php 

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("ONLR",$con);

$sql="CREATE TABLE cse4(s_no int(10),oddsem varchar(50),evensem varchar(50))";

if(mysql_query($sql,$con))
{

echo "table created"; 

}
else
{

	echo"error";
}
    $insert = "INSERT INTO  cse4(s_no ,oddsem ,evensem) VALUES ('1','System_Administration' ,' Distributed_Computing')";
	mysql_query($insert,$con);
    $insert = "INSERT INTO  cse4(s_no ,oddsem ,evensem) VALUES ('2','Advance_Computer_Architecture' ,' Web_Technology')";
     mysql_query($insert,$con);

	$insert = "INSERT INTO  cse4(s_no ,oddsem ,evensem) VALUES ('3',' Data_Warehousing_&_Mining' ,'')";
	mysql_query($insert,$con);

	$insert = "INSERT INTO  cse4(s_no ,oddsem ,evensem) VALUES ('4','ELECTIVE_I' ,'ELECTIVE_II')";
     mysql_query($insert,$con);

	$insert = "INSERT INTO  cse4(s_no ,oddsem ,evensem) VALUES ('5','Open_Elective','ELECTIVE_III') ";
	 mysql_query($insert,$con);


?>
 