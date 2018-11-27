<html>
<body>
	<?php
	$host="localhost";
	$name="root";
	$password="";
	$con = mysql_connect($host,$name,$password)or die("unable to connect");
mysql_select_db("questions",$con);
$sql= "CREATE TABLE option (optionid INT,a varchar(500),b varchar(500),c varchar(500),d varchar(500))";
mysql_query($sql,$con);	
$sql="INSERT INTO option(optionid,a,b,c,d) VALUES('1','a','e','h','u')";
mysql_query($sql,$con);	
$sql="INSERT INTO option(optionid,a,b,c,d) VALUES('2','KKK','JKI','HJH','IKL')";
mysql_query($sql,$con);	
$sql="INSERT INTO option(optionid,a,b,c,d) VALUES('3','SCRIPT','PEN','PAPER','BOOK')";
mysql_query($sql,$con);	
$sql="INSERT INTO option(optionid,a,b,c,d) VALUES('4','Teacher','School','Student','tution')";
mysql_query($sql,$con);	
$sql="INSERT INTO option(optionid,a,b,c,d) VALUES('5','11','10','8','9')";
mysql_query($sql,$con);	
$sql="INSERT INTO option(optionid,a,b,c,d) VALUES('6','48','52','49','56')";
mysql_query($sql,$con);	
$sql="INSERT INTO option(optionid,a,b,c,d) VALUES('7','N','L','O','None of these')";
mysql_query($sql,$con);	
$sql="INSERT INTO option(optionid,a,b,c,d) VALUES('8','V','T','W','Y')";
mysql_query($sql,$con);	
$sql="INSERT INTO option(optionid,a,b,c,d) VALUES('9','VSS','URR','VTT','UTF')";
mysql_query($sql,$con);	
$sql="INSERT INTO option(optionid,a,b,c,d) VALUES('10','NOITIBIHORP','IHORPBITION','ITIONBIHOTP,IHORPBNOITI,)";
mysql_query($sql,$con);	
	?>
</body>
</html>