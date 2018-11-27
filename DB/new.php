<?php
require_once('conn.php');
$YEAR=$_POST["year"];
$BRANCH=$_POST["branch"];
$table_name=$BRANCH.$YEAR; // put table name here
$qs  = mysqli_query($con,"SELECT * FROM $table_name"); 
echo "<tr><b><td>user</td></b></tr><tr>";
while ($row = mysqli_fetch_assoc($qs)) 
{
	echo "<br><td>".$row['oddsem']."</td>";
	
}
echo "</tr>";
?>
<?php

