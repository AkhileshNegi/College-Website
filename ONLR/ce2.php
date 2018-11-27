<?php 

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("ONLR",$con);

$sql="CREATE TABLE ce2(s_no int(10),oddsem varchar(50),evensem varchar(50))";

if(mysql_query($sql,$con))
{

echo "table created"; 

}
else
{

	echo"error";
}
$insert = "INSERT INTO  ce2(s_no,oddsem,evensem) VALUES('1','mathematics3','hydraulics_and_hydraulic_machines')";
	mysql_query($insert,$con);
    $insert= "INSERT INTO ce2(s_no,oddsem,evensem) VALUES('2','engg_economics','structural_analysis')";
    mysql_query($insert,$con);
    $insert= "INSERT INTO ce2(s_no,oddsem,evensem) VALUES('3','fluid_mechanics','advanced_surveying')";
    mysql_query($insert,$con);
    $insert= "INSERT INTO ce2(s_no,oddsem,evensem) VALUES('4','solid_mechanics','engg_geology')";
    mysql_query($insert,$con);
    $insert= "INSERT INTO ce1(s_no,oddsem,evensem) VALUES('5','building_material_and_construction','enviromental_engg_1')";
    mysql_query($insert,$con);
     $insert= "INSERT INTO ce2(s_no,oddsem,evensem) VALUES('6','basic_surveying','concrete_technology')";
   mysql_query($insert,$con);
   ?>