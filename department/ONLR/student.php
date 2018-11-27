<?php 

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("ONLR",$con);

$sql="CREATE TABLE student(s_no int(10),student_name varchar(50))";

if(mysql_query($sql,$con))
{

echo "table created"; 

}
else
{

	echo"error";
}
   $insert = "INSERT INTO  student(s_no ,student_name) VALUES ('1','Akriti_Rana')";
	mysql_query($insert,$con);
  $insert = "INSERT INTO  student(s_no ,student_name) VALUES ('2','Anvesha_Negi')";
	mysql_query($insert,$con);
  $insert = "INSERT INTO  student(s_no ,student_name) VALUES ('3','Manish_Negi')";
	mysql_query($insert,$con);
  $insert = "INSERT INTO  student(s_no ,student_name) VALUES ('4','Robin_Negi')";
	mysql_query($insert,$con);
  $insert = "INSERT INTO  student(s_no ,student_name) VALUES ('5','Abhay_Ramola')";
	mysql_query($insert,$con);
  $insert = "INSERT INTO  student(s_no ,student_name) VALUES ('6','Sagar_Ramola')";
	mysql_query($insert,$con);
  $insert = "INSERT INTO  student(s_no ,student_name) VALUES ('7,'Aman_Sajwan')";
	mysql_query($insert,$con);
  $insert = "INSERT INTO  student(s_no ,student_name) VALUES ('8','Pragati_Panwar')";
	mysql_query($insert,$con);
  $insert = "INSERT INTO  student(s_no ,student_name) VALUES ('9','Shailja_Sajwan')";
	mysql_query($insert,$con);
  $insert = "INSERT INTO  student(s_no ,student_name) VALUES ('10','Arundhati_chand')";
	mysql_query($insert,$con);
  
?> 
