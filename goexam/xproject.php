<!DOCTYPE html>
<html>
<head>
<font face="forte" size='5'  >
<center>THIS is a exam form</center>
</font>
</head>
<body>


<?php
$NAME=$_GET["name"];
$PASSWORD=$_GET["password"];
echo ("WELCOME");
echo $NAME;
if(isset($_GET["name"],$_GET["password"]))
{
$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("Person",$con);
setcookie("name","$NAME");
setcookie("pass","$PASSWORD");

mysql_close($con);
}
else{
	echo"error";
}

?>





<form action="result.php" method="GET"  >
<left>
<b>1. Which is the most frequent letter used in the english language .?<b>
<br><input type="radio" name ="1" value="a">a
<input type="radio" name ="1" value="e">e
<input type="radio" name ="1" value="h">h
<input type="radio" name ="1" value="u">u
<br><br>
<b>2 What should come in the place of (?) in the given series?
ACE, FGH, ?, PON <b>
<br><input type="radio" name ="2" value="KKK">(A) KKK
<input type="radio" name ="2" value="JKI">(B) JKI
<input type="radio" name ="2" value="HJH">(C) HJH
<input type="radio" name ="2" value="IKL">(D) IKL
<br><br>
<b>3. Typist : Typewriter : : Writer: ?<b>

<br><input type="radio" name ="3" value="Script">(A) Script

<input type="radio" name ="3" value="PEN">(B) Pen

<input type="radio" name ="3" value="Paper">(C) Paper

<input type="radio" name ="3" value="Book">(D) Book
<br><br>
<b>4. Paint: Artist : : Wood: ?<b>

<br><input type="radio" name ="4" value="Furniture">(A) Furniture

<input type="radio" name ="4" value="Forest">(B) Forest

<input type="radio" name ="4" value="Fire">(C) Fire


<input type="radio" name ="4" value="Carpenter">(D) Carpenter
<br><br>
<b>5. Medicine is related to Patient in the same way as Education is related to—<b>
<br><input type="radio" name ="5" value="teacher">(A) Teacher

<input type="radio" name ="5" value="School">(B) School

<input type="radio" name ="5" value="Student">(C) Student

<input type="radio" name ="5" value="Tuition">(D) Tuition
<br><br>
<b>6. What should come in the place of question mark in the following series?<b>
3, 8, 6, 14, ?, 20
<br><input type="radio" name ="6" value="11">(A) 11

<input type="radio" name ="6" value="10">(B) 10

<input type="radio" name ="6" value="8">(C) 8

<input type="radio" name ="6" value="9">(D) 9
<br><br>
<b>7. What should come in the place of question mark in the following series?
1, 4, 9, 25, 36, ?<b>

<br><input type="radio" name ="7" value="48">(A) 48

<input type="radio" name ="7" value="52">(B) 52

<input type="radio" name ="7" value="49">(C) 49

<input type="radio" name ="7" value="56">(D) 56
<br><br>
<b>8. If the sequence of the alphabets is reversed which of the following would be the 14th letter from your left?<b>

<br><input type="radio" name ="8" value="N">(A) N

<input type="radio" name ="8" value="L">(B) L

<input type="radio" name ="8" value="O">(C) O

<input type="radio" name ="8" value="A">(D) None of these

<br><br>
<b>9. Which letter is the 8th letter to the right of the letter which is 10th to the left of the last but one
letter from the right?<b>
<br><input type="radio" name ="9" value="V">(A) V

<input type="radio" name ="9" value="T">(B) T

<input type="radio" name ="9" value="W">(C) W

<input type="radio" name ="9" value="Y">(D) Y
<br><br>
<b>10. If CAT and BOAT are written as XZG and YLZG respectively in a code language how is ‘EGG’ to
be written in the same language?<b>

<br><input type="radio" name ="10" value="VSS">(A) VSS

<input type="radio" name ="10" value="URR">(B) URR

<input type="radio" name ="10" value="VTT">(C) VTT

<input type="radio" name ="10" value="UTF">(D) UTF
<br><br>
<b>11. In a certain code CONTRIBUTOR is written as RTNOCIROTUB. How is ‘prohibition’ written in that code?<b>

<br><input type="radio" name ="11" value="NOITIBIHORP">(A) NOITIBIHORP
<input type="radio" name ="11" value="IHORPBITION">(B) IHORPBITION

<input type="radio" name ="11" value="ITIONBIHOTP">(C) ITIONBIHOTP

<input type="radio" name ="11" value="IHORPBNOITI">(D) IHORPBNOITI
<br>
<input type="submit" name='c'>
<input type="reset" name ="d">
</form>
</body>
</html>