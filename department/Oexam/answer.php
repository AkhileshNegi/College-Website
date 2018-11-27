<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die ("unable to connect");
mysql_select_db("questions",$con);
$sql="INSERT INTO  answers (ansid,ans) VALUES('1','b')";
mysql_query($sql,$con);
$sql="INSERT INTO  answers (ansid,ans) VALUES('2','a')";
mysql_query($sql,$con);
$sql="INSERT INTO  answers (ansid,ans) VALUES('3','b')";
mysql_query($sql,$con);
$sql="INSERT INTO  answers (ansid,ans) VALUES('4','c')";
mysql_query($sql,$con);
$sql="INSERT INTO  answers (ansid,ans) VALUES('5','d')";
mysql_query($sql,$con);
$sql="INSERT INTO  answers (ansid,ans) VALUES('6','c')";
mysql_query($sql,$con);
$sql="INSERT INTO  answers (ansid,ans) VALUES('7','d')";
mysql_query($sql,$con);
$sql="INSERT INTO  answers (ansid,ans) VALUES('8','b')";
mysql_query($sql,$con);
$sql="INSERT INTO  answers (ansid,ans) VALUES('9','c')";
mysql_query($sql,$con);
$sql="INSERT INTO  answers (ansid,ans) VALUES('10','d')";
mysql_query($sql,$con);
?>
</body>
</html>