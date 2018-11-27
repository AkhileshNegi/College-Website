<?php 

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("ONLR",$con);

$sql="CREATE TABLE me4(s_no int(10),oddsem varchar(50),evensem varchar(50))";

if(mysql_query($sql,$con))
{

echo "table created"; 

}
else
{

	echo"error";
}
    
	
    $insert = "INSERT INTO  me4(s_no,oddsem,evensem) VALUES('1','CAD/CAM','power_plant')";
	mysql_query($insert,$con);
    $insert= "INSERT INTO me4(s_no,oddsem,evensem) VALUES('2','experimental_stress_analysis','automobile_engg')";
    mysql_query($insert,$con);
    $insert= "INSERT INTO me4(s_no,oddsem,evensem) VALUES('3','Elective_1','Elective_3')";
    mysql_query($insert,$con);
    $insert= "INSERT INTO me4(s_no,oddsem,evensem) VALUES('4','Elective_2',Elective_4')";
    mysql_query($insert,$con);
    $insert= "INSERT INTO me4(s_no,oddsem,evensem) VALUES('5','open_elective','')";
    mysql_query($insert,$con);
    

?>


