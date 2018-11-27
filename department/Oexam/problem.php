<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
</head>
<body>
<?php
$ans1= $_GET["1"];
echo "previous answer was:"."$ans1";
echo"<br/>";
//setting COOKIE
$_COOKIE['ques'] = $_COOKIE['ques']+1;

$var=$_COOKIE['ques'];
setcookie("ques","$var");
echo "variable is:"."$var";
echo"<br/>";
echo "cookie is:".$_COOKIE['ques'];
echo"<br/>";
?>
 <?php

//ANSWER WILL BE INSERTED

//MYSQL CONNECTION 
$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("questions",$con);




$username=  $_COOKIE['name'];
$password=  $_COOKIE['pass']; 

//INSERTION

$sql= "INSERT INTO given (ansid,ans) VALUES ('$var','$ans1')";
$query= mysql_query($sql,$con);

//ANSWER INSERTED







mysql_close($con);

?>


<?php
//DATABASE SELECTION1
$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("questions",$con);


$sql="SELECT ans FROM answer WHERE name='$NAME'";
$query=mysql_query($sql,$con);
if(mysql_num_rows($query) > 0)
{
$row1 = mysql_fetch_array($query);

?>









<?php
//DATABASE SELECTION2
$host1="localhost";
$user1="root";
$pass1="";
$con1=mysql_connect($host1,$user1,$pass1) or die("unable to connect");
mysql_select_db("questions",$con1);


$sql1="SELECT ans FROM given WHERE name='$NAME'";
$query1=mysql_query($sql1,$con1);
if(mysql_num_rows($query1) > 0)
{
$row2 = mysql_fetch_array($query1);

	}







             
$result=array_intersect($row2, $row1);
echo "YOUR MARKS ARE:";
$s=  count($result);
echo $s;

//MYSQL CONNECTION 
$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("Person",$con);




$username=  $_COOKIE['name'];
$password=  $_COOKIE['pass'];
//INSERTION
$sql= "INSERT INTO user (name,password,marks) VALUES ('$username','$password','$s')";
$query= mysql_query($sql,$con);



mysql_close($con);




?>

</body>
</html>