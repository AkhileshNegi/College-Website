
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
mysql_select_db("project",$con);
$query="CREATE TABLE set4( id int ,question varchar(1000),a varchar(100),b varchar(100),c varchar(100), d varchar(100),answer varchar(10))";
mysql_query($query,$con);
$sql="INSERT INTO set4 (id,question,a,b,c,d,answer) VALUES('1','For galvanizing iron which of the following metals is used?','Aluminium	','Copper','Lead','Zinc','d')";
mysql_query($sql,$con);//question1
$sql="INSERT INTO set4 (id,question,a,b,c,d,answer) VALUES('2','Economic goods are','all commodities that are limited in quantity as compared to their demand
	','Commodities that is available according to their demand','Commodities that is available more as compared to demand','None of the above','a')";
mysql_query($sql,$con);//question2
$sql="INSERT INTO set4 (id,question,a,b,c,d,answer) VALUES('3','For purifying drinking water alum is used','for coagulation of mud particles','to kill bacteria','to remove salts','to remove gases','a')";
mysql_query($sql,$con);//question3
$sql="INSERT INTO set4 (id,question,a,b,c,d,answer) VALUES('4','Hockey was introduced in the Asian Games in','1958 in Tokyo','1962 in Jakarta','1966 in Bangkok','1970 in Bangkok','a')";
mysql_query($sql,$con);//question4
$sql="INSERT INTO set4 (id,question,a,b,c,d,answer) VALUES('5','ESCAP stands for','Economic and Social Commission for Asia and Pacific','	European Society Council for Africa and Pacific','Economic and Social Commission for Africa and Pacific','None of the above','a')";
mysql_query($sql,$con);//question5
//$sql="INSERT INTO set4 (id,question,a,b,c,d,answer) VALUES('6','Firdausi was','a poet','well known for his epic 'Shahnama'','Both option A and B','None of the above','c')";
$sql="INSERT INTO set4 (id,question,a,b,c,d,answer) VALUES('6','Firdausi was','	a poet','well known for his epic Shahnama','Both option A and B','None of the above','c')";
mysql_query($sql,$con);//question6
$sql="INSERT INTO set4 (id,question,a,b,c,d,answer) VALUES('7','Himalayan Mountaineering Institute is at','	Darjeeling','Dehradun','Marmago','Dispur','a')";
mysql_query($sql,$con);//question7
$sql="INSERT INTO set4 (id,question,a,b,c,d,answer) VALUES('8','Gabriel Daniel Fahrenheit was','a German Physicist','developed the mercury thermometer in 1714','devised temperature scale','All of the above','c')";//question8
mysql_query($sql,$con);
$sql="INSERT INTO set4 (id,question,a,b,c,d,answer) VALUES('9','During the first crusade, crusaders reached Jerusalem and captured it in','1000 AD','1099 AD','1200 AD','1515 AD','b')";//question9
mysql_query($sql,$con);
$sql="INSERT INTO set4 (id,question,a,b,c,d,answer) VALUES('10','Dr. Linus Carl Pauling is the only person to have won two Nobel prizes individually for
','Chemistry in 1954, Peace Prize in 1962','Peace Prize in 1954, Chemistry in 1962','Physics in 1954, Medicine in 1962','Medicine in 1954, Physics in 1962 ','a')";
mysql_query($sql,$con);//question10
$sql="INSERT INTO set4 (id,question,a,b,c,d,answer) VALUES('11',' East Timor, which became the 191st member of the UN, is in the continent of','Asia','Africa','Europe','South America','a')";
mysql_query($sql,$con);//question11
$sql="INSERT INTO set4 (id,question,a,b,c,d,answer) VALUES('12','Free market is','a condition in the international market where nations do not impose customs duty or other taxes on import of goods','market where the price of a commodity is determined by free play of the forces of supply and demand','ports that are exempted from payment of customs duty on articles of commerce, primarily to encourage tourism','None of the above','b')";
mysql_query($sql,$con);//question12
$sql="INSERT INTO set4 (id,question,a,b,c,d,answer) VALUES('13','Free surface of a liquid behaves like a sheet and tends to contract to the smallest possible area due to the','force of adhesion','force of friction','centrifugal force','force of cohesion','d')";
mysql_query($sql,$con);//question13
$sql="INSERT INTO set4 (id,question,a,b,c,d,answer) VALUES('14','Gopal Krishna Gokhale','started as a maths teacher and rose to the position of the principal of Ferguson College, Pune','founded the servants of India Society
','served as President of the Indian National Congress in 1905','All of the above','d')";
mysql_query($sql,$con);//question14
$sql="INSERT INTO set4 (id,question,a,b,c,d,answer) VALUES('15','GNLF stands for','Gorkha National Liberation Front','Gross National Liberation Form','Both option A and B','None of the above','a')";
mysql_query($sql,$con);//question15
$sql="INSERT INTO set4 (id,question,a,b,c,d,answer) VALUES('16','Excessive secretion from the pituitary gland in the children results in','increased height','	retarded growth ','weakening of bones','None of the above','a')";
mysql_query($sql,$con);//question16
$sql="INSERT INTO set4 (id,question,a,b,c,d,answer) VALUES('17','Fa-Hien was','the first Buddhist pilgrim of China to visit India during the reign of Chandragupta Vikramaditya','the discoverer of Puerto Rico and Jamaica','the first Buddhist pilgrim of India to visit China','None of the above','a')";
mysql_query($sql,$con);//question17
$sql="INSERT INTO set4 (id,question,a,b,c,d,answer) VALUES('18','In which year of First World War Germany declared war on Russia and France?','1914','1915','1916','1917','a')";
mysql_query($sql,$con);//question18
$sql="INSERT INTO set4 (id,question,a,b,c,d,answer) VALUES('19','ICAO stands for','International Civil Aviation Organization','Indian Corporation of Agriculture Organization','Institute of Company of Accounts Organization','None of the above','a')";
mysql_query($sql,$con);//question19 

$sql="INSERT INTO set4(id,question,a,b,c,d,answer) VALUES('20','India s first Technicolor film ____in the early 1950s was produced by ____','Jhansi Ki Rani, Sohrab Modi','Jhansi Ki Rani , Sir Syed Ahmed','Mirza Ghalib, Sohrab Modi','Mirza Ghalib, Munshi Premchand','a')";
mysql_query($sql,$con);//question20

?>
</body>
</html>