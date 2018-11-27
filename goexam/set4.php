
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
mysql_select_db("questions",$con);
$query="CREATE TABLE setnew(id INT ,question VARCHAR(1000),a VARCHAR(100),b VARCHAR(100),c VARCHAR(100), d VARCHAR(100),answer VARCHAR(10))";
mysql_query($query,$con);
$sql="INSERT INTO set1 (id,questions,a,b,c,d,answer) VALUES ('1','Grand Central Terminal, Park Avenue, New York is the worlds','largest railway station','highest railway station','longest railway station','None of the above','a')";
mysql_query($sql,$con);
$sql="INSERT INTO set1 (id,questions,a,b,c,d,answer) VALUES ('2','Entomology is the science that studies','Behavior of human beings','Insects','The origin and history of technical and scientific term','The formation of rocks','b')";
mysql_query($sql,$con);
$sql="INSERT INTO set1 (id,questions,a,b,c,d,answer) VALUES ('3','Eritrea, which became the 182nd member of the UN in 1993, is in the continent of','Asia','Africa ','Europe','Australia','b')";
mysql_query($sql,$con);
$sql="INSERT INTO set1 (id,questions,a,b,c,d,answer) VALUES ('4','Garampani sanctuary is located at','Junagarh, Gujarat','Diphu, Assam','Kohima, Nagaland','Gangtok, Sikkim','b')";
mysql_query($sql,$con);
$sql="INSERT INTO set1 (id,questions,a,b,c,d,answer) VALUES ('5','For which of the following disciplines is Nobel Prize awarded?','Physics and Chemistry','Physiology or Medicine','Literature, Peace and Economics','All of the above','d')";
mysql_query($sql,$con);
$sql="INSERT INTO set1 (id,questions,a,b,c,d,answer) VALUES ('6','Hitler party which came into power in 1933 is known as','Labour Party','Nazi Party','Ku-Klux-Klan','Democratic Party','b')";
mysql_query($sql,$con);
$sql="INSERT INTO set1 (id,questions,a,b,c,d,answer) VALUES ('7','FFC stands for','Foreign Finance Corporation','Film Finance Corporation',Federation of Football Council,'None of the above','b')";
mysql_query($sql,$con);
$sql="INSERT INTO set1 (id,questions,a,b,c,d,answer) VALUES ('8','Fastest shorthand writer was','	Dr. G. D. Bist','J.R.D. Tata','J.M. Tagore','Khudada Khan','a')";
mysql_query($sql,$con);
$sql="INSERT INTO set1 (id,questions,a,b,c,d,answer) VALUES ('9','Epsom (England) is the place associated with','Horse racing','Polo','Shooting','Snooker','a')";
mysql_query($sql,$con);
$sql="INSERT INTO set1(id,questions,a,b,c,d,answer) VALUES ('10','First human heart transplant operation conducted by Dr. Christiaan Barnard on Louis Washkansky, was conducted in','1967','1968','1958','1922','a')";
mysql_query($sql,$con);

?>
</body>
</html>