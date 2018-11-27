<html>
<?php
echo "hello man this is my website";
?>   	
<br>
<?php
$name='akhilesh';
$age='21';
if($name===strtolower("akhilesh"))
if($age>=21)
{echo "you are over";
}
else
{
echo "you are not ";	
}	

?>
<?php
$day = 'monday';
$date = 13;
$year = 2016;
echo 'this is the day '.$day.' '.$date.' '.$year;

?>

</head>
<body>
<form method="post" action="http:\\www.google.com">
<input type="text" name="search" size="80" value="search here ">
<input type="submit" value="Search">  <br>
<input type="hidden" name="HIDE" size="80" value="search here ">
<input type="password" name="password" size="80" value="search here ">
<br>
<input type="checkbox" name="male" value="male">male 
<input type="checkbox" name="female" value="female">female 
<br>
<input type="radio" name ="10th" value="10">
<input type="radio" name ="12th" value="12">
<input type="radio" name ="btech" value="btech">
<input type="radio" name ="mtech" value="mtech">
<br>
<select name ="colors" size="1">
<option>red
<option>blue
<option selected>pink
<option>orange
<option>green
</select>
</form>
</body>
</html>