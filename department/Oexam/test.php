<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>

<title></title>

</head>

<body style="margin: 0px; padding: 0px; font-family: 'Trebuchet MS',verdana;">

<table width="100%" style="height: 100%;" cellpadding="10" cellspacing="0" border="0">
<tr>

<!-- ============ HEADER SECTION ============== -->
<td colspan="2" style="height: 100px;" background="purple.JPG"><h1><FONT color="white" face="Magneto" size='7' ><marquee>WELCOME</marquee></FONT></h1></td></tr>


<!-- ============ NAVIGATION BAR SECTION ============== -->
<tr><td colspan="2" valign="middle" height="30"  bgcolor="#a9ae9f" >
<a href="homepage.php">Home</a>     
   &nbsp &nbsp<a href="welcome.php">SIGNUP</a>
   &nbsp &nbsp<a href="#">SAMPLE PAPERS</a>
   &nbsp &nbsp<a href="#">INSTRUCTIONS</a>
    &nbsp &nbsp<a href="#">CONTACT US</a></td></tr>

<tr>
<!-- ============ LEFT COLUMN (MENU) ============== -->
<td width="20%" valign="top" bgcolor="#d2d8c7" height="50">
<img src="capture.png" align="left" width="270" height="200" alt="THDC INDIA PVT. LIMITED"  class="capture" />
<a ><br>ANNOUNCEMENTS</a>
<marquee direction="up">
<p>YOU can see result now</p>
<p>Renew your library card</p>
<p>New editions of this month magazine are available in library</p>
</marquee>
</td>

<!-- ============ RIGHT COLUMN (CONTENT) ============== -->
<td width="80%" valign="top"  background="aero.JPG">

<h2>Congratulations! You have completed the test</h2>
<br>
<FONT color="white" face="Engravers MT" size='3' > Your answers were:</FONT>
<br>
<?php
$ans1= $_GET["1"];
$var=$_COOKIE['ques'];
setcookie("ques","$var");
$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("questions",$con);
$username=  $_COOKIE['name'];
$password=  $_COOKIE['pass']; 
$sql= "INSERT INTO given (ansid,ans) VALUES ('$var','$ans1')";
$query= mysql_query($sql,$con);
mysql_close($con);
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
$sql = "SELECT ansid,ans FROM given ";
   mysql_select_db('questions');
   $retval = mysql_query( $sql, $conn );
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   while($row2 = mysql_fetch_array($retval, MYSQL_ASSOC)) {
$ansid2=$row2['ansid'];
$ans2=$row2['ans'];
$num2=$ansid2;
$GLOBAL["ans".$ansid2]=$ans2;
$re=$GLOBAL["ans".$ansid2];
   }
   mysql_close($conn);
$mark=0;
for ($i=1; $i <6; $i++) { 
if($GLOBAL["ansid".$i]==$GLOBAL["ans".$i])
{
$mark++;
echo"CORRECT" ."<br>";
}
else
{

  echo"INCORRECT" ."<br>"; 
}  
}
?>
<FONT color="gold" face="Engravers MT" size='6' >
<?php echo "YOUR MARKS ARE:";
echo $mark;?>
</FONT>
<?php
setcookie("ques","",time()-36000);
//MYSQL CONNECTION 
$host="localhost";
$username="root";
$password="";
$con=mysql_connect($host,$username,$password) or die ("unable to connect");
mysql_select_db("questions");
$query="TRUNCATE TABLE given";
mysql_query($query,$con);
$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("Person",$con);
$username=  $_COOKIE['name'];
$password=  $_COOKIE['pass'];
//INSERTION





$dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   $sql = "SELECT ansid,ans FROM given";
   mysql_select_db('questions');
   $retval = mysql_query( $sql, $conn );
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
$ansid=$row['ansid'];
$ans=$row['ans'];
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

$sql= "INSERT INTO answersheet (lname,password,marks,op1,op2,op3,op4,op5) VALUES ('$username','$password','$mark','$GLOBAL[ansid1]','$GLOBAL[ansid2]','$GLOBAL[ansid3]','$GLOBAL[ansid4]','$GLOBAL[ansid5]')" ;
$query= mysql_query($sql,$con);


//$sql= "INSERT INTO user (name,password,marks) VALUES ('$username','$password','$mark')";
//$query= mysql_query($sql,$con);
mysql_close($con);
?>
</td></tr>

<!-- ============ FOOTER SECTION ============== -->
<tr><td colspan="2" align="center" height="20" face="Lucida Calligraphy" bgcolor="#777d6a" background="green.JPG"><FONT color="white" size='3' >&copy Copyright 2017 </FONT></td></tr>
</table>
</body>
<html>