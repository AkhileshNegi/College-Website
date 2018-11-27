<?php 

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("ONLR",$con);

$sql="CREATE TABLE me3(s_no int(10),oddsem varchar(50),evensem varchar(50))";

if(mysql_query($sql,$con))
{

echo "table created"; 

}
else
{

	echo"error";
}
    
	
    $insert = "INSERT INTO  me3(s_no,oddsem,evensem) VALUES('1','mechanical_vibrations','operation_research')";
	mysql_query($insert,$con);
    $insert= "INSERT INTO me3(s_no,oddsem,evensem) VALUES('2','machine_design_1','ic_engine')";
    mysql_query($insert,$con);
    $insert= "INSERT INTO me3(s_no,oddsem,evensem) VALUES('3','dynamics_of_machine','fluid_machinery')";
    mysql_query($insert,$con);
    $insert= "INSERT INTO me3(s_no,oddsem,evensem) VALUES('4','Manufacturing_science_2','machine_design_2')";
    mysql_query($insert,$con);
    $insert= "INSERT INTO me3(s_no,oddsem,evensem) VALUES('5','heat_and_mass_transfer','refrigeration_and_air_conditioning')";
    mysql_query($insert,$con);
    $insert= "INSERT INTO me3(s_no,oddsem,evensem) VALUES('5','concepts_of_programming_and_oops','priciple_of_management')";
    mysql_query($insert,$con);
   


?>


