<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$host="localhost";
$username="root";
$password="";
$con=mysql_connect($host,$username,$password) or die ("unable to connect");
mysql_select_db("questions");
$query="TRUNCATE TABLE given";
mysql_query($query,$con);


?>
</body>
</html>