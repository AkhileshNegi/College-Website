<!DOCTYPE html>
<html>
<head>
<title>HOMEPAGE</title>
    <style>
        table {
            width: 100%;
            border: 0;
        }
        td.header {
            background-color: grey;
             height: 130px;
             
        }
        td.sidebar {
            background-color: orange;
            width: 3%;
            vertical-align: top;
        }
        td.sidebar>ul {
            list-style: none;
            padding-left: 0;
        }
        td.article {
            background-color: #eeeeee;
            height: 400px;
            width: 97%;
            vertical-align: top;
          <?php //  background-image: url('bat.JPG');?>

        }
        td.footer {
            background-color:steelblue;
            height: 130px;
        }

    </style>
</head>
<body >
<?php


//setting COOKIE
$r="1";
setcookie("ques","$r");

$var=$_COOKIE['ques'];
$NAME=$_GET["name"];
$PASSWORD=$_GET["password"];

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
<form>

<br>



    <table border="0">
        <tr>
            <td colspan="2" class="header">
            <H1>   <FONT color="gold" face="Engravers MT" size='15' >  <?php echo ("WELCOME"); ?>&nbsp  &nbsp  &nbsp
<?php echo $NAME;?></FONT></H1></td>
        </tr>
        <tr>
            <td class="sidebar">
        <br/>
                <ul>
                    <li>  </li>
                    <li>  </li>
        
                </ul>
            </td>
            <td class="article">

            <H1>   <FONT color="black" face="Magneto" size='15' >Questions</FONT></H1>
 <ul>
                    <li><H1>   <FONT color="black" face="Magneto" size='5' ></FONT></H1></li>





<?php //starts here ?>




<form action="result.php" method="GET"  >
<left>


<?php
//QUESTIONS:

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("questions",$con);
$sql="SELECT * FROM quesnew WHERE quesid='$var'";//QUESTION ID
$query=mysql_query($sql,$con);
if(mysql_num_rows($query) > 0)
{
while($row = mysql_fetch_array($query))
{

?>

<H1>   <FONT color="black" face="Magneto" size='5' ><?php echo"Question:".$row["ques"]."?"; ?></FONT></H1>

<?php



}
    }
mysql_close($con);
?>





<H1>   <left><FONT color="black" face="Magneto" size='5' >  

<input type="radio" name ="1" value="a" >
<?php
//OPTION 1:

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("questions",$con);
$sql="SELECT * FROM option WHERE optionid='$var'";//QUESTION ID
$query=mysql_query($sql,$con);
if(mysql_num_rows($query) > 0)
{
while($row = mysql_fetch_array($query))
{
echo"a:".$row["a"];
    echo"<br/>";

}
    }
mysql_close($con);
?>


<input type="radio" name ="1" value="b">

<?php
//OPTION 2:

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("questions",$con);
$sql="SELECT * FROM option WHERE optionid='$var'";//QUESTION ID
$query=mysql_query($sql,$con);
if(mysql_num_rows($query) > 0)
{
while($row = mysql_fetch_array($query))
{
echo"b:".$row["b"];
    echo"<br/>";
    
}
    }
mysql_close($con);
?>



<input type="radio" name ="1" value="c">
<?php





//OPTION 3:

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("questions",$con);
$sql="SELECT * FROM option WHERE optionid='$var'";//QUESTION ID
$query=mysql_query($sql,$con);
if(mysql_num_rows($query) > 0)
{
while($row = mysql_fetch_array($query))
{
echo"c:".$row["c"];
    echo"<br/>";
    
}
    }
mysql_close($con);
?>




<input type="radio" name ="1" value="d">
<?php
//OPTION 4:

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("questions",$con);
$sql="SELECT * FROM option WHERE optionid='$var'";//QUESTION ID
$query=mysql_query($sql,$con);
if(mysql_num_rows($query) > 0)
{
while($row = mysql_fetch_array($query))
{
echo"d:".$row["d"];
    echo"<br/>";
    
}
    }
mysql_close($con);
?>
</FONT></H1></left>



<br><br>

<input type="submit" name='c' value="next">
<input type="reset" name ="d">
</form>

















<?php //ends here?>





    
                 
                </ul>


            </td>

        </tr>
        <tr>
            <td colspan="2" class="footer"><FONT color="white" face="Lucida Calligraphy" size='15' >copyright 2017</FONT></H1></td>
        </tr>
    </table>
</form>
</body>
</html>
