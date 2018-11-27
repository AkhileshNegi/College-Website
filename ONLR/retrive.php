$result = mysql_query("show tables"); // run the query and assign the result to $result
while($table = mysql_fetch_array($result)) { // go through each row that was returned in $result
    echo($table[0] . "<BR>");    // print the table that was returned on that row.
}

<?php
$mysql_tb = 'tb_registered_users';
$query = "SELECT `stud_no` FROM `{$mysql_tb}` WHERE `stud_no`='$studno'";
$query = "INSERT INTO `{$mysql_tb}` VALUES ('".$studno."','".$firstname."','".$lastname."')";




$mysql_tb = 'tb_registered_users';

$query = "SELECT `stud_no` FROM `".$mysql_tb."` WHERE `stud_no`='$studno'";

<?php
$dbname = 'my_db';

if (!mysql_connect('localhost', 'username', 'password')) {
    echo 'Could not connect to mysql';
    exit;
}

$sql = "SHOW TABLES FROM $dbname";
$result = mysql_query($sql);

if (!$result) {
    echo "DB Error, could not list tables\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}

while ($row = mysql_fetch_row($result)) {
    echo "Table: {*}\n";
}

mysql_free_result($result);
?>

mysql_select_db($dbname);
while ($row = mysql_fetch_row($result)) {
    //echo "Table: {$row[0]}\n";

    $query = "SELECT * FROM $row[0]";
    $table = mysql_query($query);

    echo "<table>";
    while($content = mysql_fetch_array($table)){
            echo "<tr>";
        foreach($content as $key => $value){
            echo "<td>" . $value . "</td>";
        }
            echo "</tr>";
    }
    echo "</table>";

}

