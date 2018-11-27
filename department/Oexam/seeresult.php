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
<tr><td colspan="2" valign="middle" height="30"  bgcolor="#a9ae9f" ><a href="homepage.php">Home</a>   
  &nbsp &nbsp<a href="welcome.php">SIGNUP</a>
  &nbsp &nbsp<a href="#">SAMPLE PAPERS</a>
  &nbsp &nbsp<a href="instruct.php">INSTRUCTIONS</a> 
    &nbsp &nbsp<a href="contact.php">CONTACT US</a></td></tr>

<tr>
<!-- ============ LEFT COLUMN (MENU) ============== -->
<td width="20%" valign="top" bgcolor="#d2d8c7" height="50">
<img src="capture.png" align="left" width="270" height="200" alt="THDC INDIA PVT. LIMITED"  class="capture" />
<a ><br>ANNOUNCEMENTS</a>
<marquee direction="up">
<p>online registration from 2nd April,2017</p>
<p>Odd Semester has been declared</p>
<p>renew library cards </p>
</marquee>
</td>

<!-- ============ RIGHT COLUMN (CONTENT) ============== -->
<td width="80%" height="50"valign="top"  background="aero.JPG">
<!-- ============ Php (CONTENT) ============== -->

<?php
$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("user",$con);

if(isset($_GET['name']) && isset($_GET['password']))
{
$NAME=$_GET["name"];
$PASSWORD=$_GET["password"];

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("user",$con);
$sql="SELECT * FROM answersheet WHERE lname='$NAME'";
$query=mysql_query($sql,$con);
if(mysql_num_rows($query) > 0)
{
   while($row = mysql_fetch_array($query))
   {

  ?>
<FONT color="gold" face="Magneto" size='6' >welcome &nbsp  <?php echo$row["lname"];?> </FONT>
    <?php
//echo"name:".$row["lname"];
   // echo"password:".$row["password"];
    echo"<br/>";


if($row["password"]==$PASSWORD)
    {?>
     <FONT color="gold" face="Magneto" size='6' > <?php echo"Your marks is:".$row["marks"]; ?> </marquee></FONT>    
    <?php
  }

        else
        { ?>
<FONT color="gold" face="Magneto" size='6' >Sorry! but you have entered &nbsp  <?php echo"wrong password";?> </FONT>
      <a href="login2.php"><h3>try again</h3></a>
         <?php }
    }
}
else
{

?> 
<FONT color="black" face="Georgia" size='5' ><?php echo"You have not given the test. First give the test";?></FONT>
<a href="welcome.php"> Click here</a>
<?php 
 }

  }?>







</td></tr>

<!-- ============ FOOTER SECTION ============== -->
<tr><td colspan="2" align="center" height="20" face="Lucida Calligraphy" bgcolor="#777d6a" background="green.JPG"><FONT color="white" size='3' >&copy Copyright 2017 </FONT></td></tr>
</table>
</body>
<html>





























//here
