<?php 

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("ONLR",$con);

$sql="CREATE TABLE ece2(s_no int(10),oddsem varchar(50),evensem varchar(50))";

if(mysql_query($sql,$con))
{

echo "table created"; 

}
else
{

	echo"error";
}


	$insert = "INSERT INTO  ece2(s_no ,oddsem ,evensem) VALUES ('1','Electronic_Measurement_and_Instrumentation' ,'Electro_Magnetic_Field_Theory')";
	mysql_query($insert,$con);
    $insert = "INSERT INTO  ece2(s_no ,oddsem ,evensem) VALUES ('2','Computer_Based_Numerical_&_Statistical_Techniques' ,'Analog_Integrated_Circuits')";
     mysql_query($insert,$con);

	$insert = "INSERT INTO  ece2(s_no ,oddsem ,evensem) VALUES ('3','Digital_Electronic_and_Design_Aspects' ,'Computer_Organization_and_Architecture')";
	mysql_query($insert,$con);

	$insert = "INSERT INTO  ece2(s_no ,oddsem ,evensem) VALUES ('4',' Electronic_Devices_and_Circuits ' ,'Signal_and_Systems')";
     mysql_query($insert,$con);

	$insert = "INSERT INTO  ece2(s_no ,oddsem ,evensem) VALUES ('5',' Network_Analysis_and_Synthesis',' Analog_Communication') ";
	 mysql_query($insert,$con);

	$insert = "INSERT INTO  ece2(s_no ,oddsem ,evensem) VALUES ('6','Engineering_Economics_&_Costing','Solid_State_Devices_and_Semiconductor_Materials')";
	mysql_query($insert,$con);

?>

