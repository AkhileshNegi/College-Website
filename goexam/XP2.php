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
<tr><td colspan="2" valign="middle" height="30"  bgcolor="#a9ae9f" ><a href="#">Home</a>     
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
<p>This is to tell students that john cena is the best</p>
<p>TVF PLAY online</p>
<p>Clash of clans jinda baad </p>
</marquee>
</td>

<!-- ============ RIGHT COLUMN (CONTENT) ============== -->
<td width="80%" valign="top"  background="aero.JPG">

<h2>Welcome</h2>

<?php
$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("Person",$con);

if(isset($_GET['name']) && isset($_GET['password']))
{
$NAME=$_GET["name"];
$PASSWORD=$_GET["password"];

 ?> <FONT color="white" face="Magneto" size='7' ><?php
echo $NAME;?></FONT>
<?php


echo"<br/>";echo"<br/>";
echo"<br/>";
//echo"<br/>";
//echo $PASSWORD ;


$sql="SELECT * FROM user WHERE name='$NAME'";
$query=mysql_query($sql,$con);
/*while($row2 = mysql_fetch_array($query, MYSQL_ASSOC)) 
{

echo $row2['password'];
}*/
echo $query['password'];
if(mysql_num_rows($query) > 0)
{
   echo $query['password'];
while($row = mysql_fetch_array($query))
{
  ?> <FONT color="black" face="Georgia" size='5' ><?php echo"Your marks is:".$row["marks"];?></FONT>
<?php

}
   }

 else
{

?> <FONT color="black" face="Georgia" size='5' ><?php echo"You have not given the test. First give the test";?></FONT>
<?php




?>
<a href="welcome.php"> Click here</a>
<?php 
 }


/**/
mysql_close($con);
}

else
   {
      echo"error";
                            
   }?>
</td></tr>

<!-- ============ FOOTER SECTION ============== -->
<tr><td colspan="2" align="center" height="20" face="Lucida Calligraphy" bgcolor="#777d6a" background="green.JPG"><FONT color="white" size='3' >&copy Copyright 2017 </FONT></td></tr>
</table>
</body>
<html>


