<?php 

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("ONLR",$con);

$sql="CREATE TABLE me2(s_no int(10),oddsem varchar(50),evensem varchar(50))";

if(mysql_query($sql,$con))
{

echo "table created"; 

}
else
{

	echo"error";
}
    
	
    $insert = "INSERT INTO  me2(s_no,oddsem,evensem) VALUES('1','mathematics3','Industrial_engg')";
	mysql_query($insert,$con);
    $insert= "INSERT INTO me2(s_no,oddsem,evensem) VALUES('2','Material_science','Kinematics_of_machine')";
    mysql_query($insert,$con);
    $insert= "INSERT INTO me2(s_no,oddsem,evensem) VALUES('3','Applied_thermodynamics ','Manufacturing_science_1')";
    mysql_query($insert,$con);
    $insert= "INSERT INTO me2(s_no,oddsem,evensem) VALUES('4','Fluid_mechanics','Electrical_machines')";
    mysql_query($insert,$con);
    $insert= "INSERT INTO me2(s_no,oddsem,evensem) VALUES('5','Strength_of_material','Measurement_metrology_and_control')";
    mysql_query($insert,$con);
    
   
   
   


?>


