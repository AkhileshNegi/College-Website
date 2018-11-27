<?php
$dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   $sql = "SELECT id,answer FROM set4 ";
   mysql_select_db('project');
   $retval = mysql_query( $sql, $conn );
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
$ansid=$row['id'];
$ans=$row['answer'];
$GLOBAL["ansid".$ansid]=$ans;
   }
$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("user",$con);
//INSERTION
//$sql= "INSERT INTO testsheet ($opt) VALUES ('$ans')";
//$query= mysql_query($sql,$con);

$sql= "INSERT INTO answersheet (op1,op2,op3,op4,op5) VALUES ('$GLOBAL[ansid1]','$GLOBAL[ansid2]','$GLOBAL[ansid3]','$GLOBAL[ansid4]','$GLOBAL[ansid5]')" ;
$query= mysql_query($sql,$con);

?>