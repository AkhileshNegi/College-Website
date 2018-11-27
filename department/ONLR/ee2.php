<?php 

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("ONLR",$con);

$sql="CREATE TABLE ee2(s_no int(10),oddsem varchar(50),evensem varchar(50))";

if(mysql_query($sql,$con))
{

echo "table created"; 

}
else
{

	echo"error";
}


	$insert = "INSERT INTO  ee2(s_no ,oddsem ,evensem) VALUES ('1','Mathematics_III' ,'Electromechanical_Energy_Conversion_I')";
	mysql_query($insert,$con);
    $insert = "INSERT INTO  ee2(s_no ,oddsem ,evensem) VALUES ('2',' Basic_Network_Analysis' ,'Network_Analysis_&_Synthesis')";
     mysql_query($insert,$con);

	$insert = "INSERT INTO  ee2(s_no ,oddsem ,evensem) VALUES ('3',' Thermal_&_Fluid_Machines' ,' Electrical_&_Electronics_Engineerin_ Materials')";
	mysql_query($insert,$con);

	$insert = "INSERT INTO  ee2(s_no ,oddsem ,evensem) VALUES ('4','Electrical_Measurement_and_Instruments' ,' Microprocessors_&_its_Applications')";
     mysql_query($insert,$con);

	$insert = "INSERT INTO  ee2(s_no ,oddsem ,evensem) VALUES ('5','Solid_State_Devices_and_Circuits','Electromagnetic_Field_Theory') ";
	 mysql_query($insert,$con);

	$insert = "INSERT INTO ee2(s_no ,oddsem ,evensem) VALUES ('6','Digital_Electronics','Industrial_Economics')";
	mysql_query($insert,$con);


?>
 
