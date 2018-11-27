<?php 

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("ONLR",$con);

$sql="CREATE TABLE ce4(s_no int(10),oddsem varchar(50),evensem varchar(50))";

if(mysql_query($sql,$con))
{

echo "table created"; 

}
else
{

	echo"error";
}
 $insert = "INSERT INTO  ce4(s_no,oddsem,evensem) VALUES('1','Bridge_engg','Elective_3')";
	mysql_query($insert,$con);
    $insert= "INSERT INTO ce4(s_no,oddsem,evensem) VALUES('2','Transportation_engg_1','Elective_4')";
    mysql_query($insert,$con);
    $insert= "INSERT INTO ce4(s_no,oddsem,evensem) VALUES('3','Seismology_and_earthquake_engg','Elective_5')";
    mysql_query($insert,$con);
    $insert= "INSERT INTO ce4(s_no,oddsem,evensem) VALUES('4','Elective_1','Elective_6')";
    mysql_query($insert,$con);
    $insert= "INSERT INTO ce4(s_no,oddsem,evensem) VALUES('5','Elective_2','')";
    mysql_query($insert,$con);
   


?>

