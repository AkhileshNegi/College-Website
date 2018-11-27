<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   $rip="KKK";
   $sql = "SELECT optionid,a,b,c,d FROM option WHERE a= '$rip'";
   mysql_select_db('questions');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo "EMP marks :{$row['a']}  <br> ".
         "EMP NAME : {$row['optionid']} <br> ".
         "EMP pass : {$row['b']} <br> ".
         "--------------------------------<br>";
   }
   
   echo "Fetched data successfully\n";
   
   mysql_close($conn);
?>
