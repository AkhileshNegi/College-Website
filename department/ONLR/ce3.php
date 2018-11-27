<?php 

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("ONLR",$con);

$sql="CREATE TABLE ce3(s_no int(10),oddsem varchar(50),evensem varchar(50))";

if(mysql_query($sql,$con))
{

echo "table created"; 

}
else
{

	echo"error";
}
 $insert = "INSERT INTO  ce3(s_no,oddsem,evensem) VALUES('1','Design_of_RC_element','Design_of_RC_structures')";
	mysql_query($insert,$con);
    $insert= "INSERT INTO ce3(s_no,oddsem,evensem) VALUES('2','Structural_analysis_2','Design_of_steel_elements')";
    mysql_query($insert,$con);
    $insert= "INSERT INTO ce3(s_no,oddsem,evensem) VALUES('3','Hydrology','Foundation_engg')";
    mysql_query($insert,$con);
    $insert= "INSERT INTO ce3(s_no,oddsem,evensem) VALUES('4','Water_resource_engg','Transportation_engg_1')";
    mysql_query($insert,$con);
    $insert= "INSERT INTO ce3(s_no,oddsem,evensem) VALUES('5','Soil_mechanics_and_engg_geology','Theory_and_application_of_GIS_ans_GPS')";
    mysql_query($insert,$con);
     $insert= "INSERT INTO ce3(s_no,oddsem,evensem) VALUES('6','Enviromental_engg_2','Principles_of_management')";
   mysql_query($insert,$con);
   ?>