<?php
$host='localhost';
$user='root';
$pass='';
$db='ONLR';
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("ONLR",$con);
	
	$insert = "INSERT INTO  cse1(s_no ,oddsem ,evensem) VALUES ('1','' ,'')";
	mysql_query($insert,$con);
    $insert = "INSERT INTO  cse1(s_no ,oddsem ,evensem) VALUES ('2','' ,'')";
     mysql_query($insert,$con);

	$insert = "INSERT INTO  cse1(s_no ,oddsem ,evensem) VALUES ('3','' ,'')";
	mysql_query($insert,$con);

	$insert = "INSERT INTO  cse1(s_no ,oddsem ,evensem) VALUES ('4','' ,'')";
     mysql_query($insert,$con);

	$insert = "INSERT INTO  cse1(s_no ,oddsem ,evensem) VALUES ('5','','') ";
	 mysql_query($insert,$con);

	$insert = "INSERT INTO  cse1(s_no ,oddsem ,evensem) VALUES ('6','','')";
	mysql_query($insert,$con);

?>