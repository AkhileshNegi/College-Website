<!DOCTYPE html>
<html>
<head>
<title>welcome</title>
    <style>
        table {
            width: 100%;
            border: 0;
        }
        td.header {
            background-color: grey;
             height: 130px;
             background-image: url('purple.JPG');
             
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
<form action="result.php" method="GET"  >




<?php
$ans1= $_GET["1"];

//MYSQL CONNECTION 
$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("project",$con);
$var=$_COOKIE['ques'];
$sql= "INSERT INTO given (ansid,ans) VALUES ('$var','$ans1')";
$var=$_COOKIE['ques'];
$query= mysql_query($sql,$con);
setcookie("ques","$var");
?>
    <table border="0">
        <tr>
            <td colspan="2" class="header">
            <H1>   <FONT color="white" face="Engravers MT" size='15' >welcome</FONT></H1></td>
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

            <H1>   <FONT color="black" face="Magneto" size='6' ><?php
//QUESTIONS:

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("project",$con);
$sql="SELECT * FROM set4 WHERE id='$var'";//QUESTION ID
$query=mysql_query($sql,$con);
if(mysql_num_rows($query) > 0)
{
while($row = mysql_fetch_array($query))
{
echo"Question:".$row["question"]."?";
    echo"<br/>";
}
    }
mysql_close($con);
?>
</FONT></H1>
 <ul>
  <li><H1>   <FONT color="black" face="Magneto" size='5' ><input type="radio" name ="1" value="a" >

<?php
//OPTION 1:

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("project",$con);
$sql="SELECT * FROM set4 WHERE id='$var'";//QUESTION ID
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
</FONT></H1></li>
  




  <li><H1>   <FONT color="black" face="Magneto" size='5' >

<input type="radio" name ="1" value="b">

<?php
//OPTION 2:

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("project",$con);
$sql="SELECT * FROM set4 WHERE id='$var'";//QUESTION ID
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

</FONT></H1></li>
     



     <li><H1>   <FONT color="black" face="Magneto" size='5' >
         
<input type="radio" name ="1" value="c">
<?php





//OPTION 3:

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("project",$con);
$sql="SELECT * FROM set4 WHERE id='$var'";//QUESTION ID
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


     </FONT></H1></li>
  












  <li><H1>   <FONT color="black" face="Magneto" size='5' ><input type="radio" name ="1" value="d">
<?php
//OPTION 4:

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("project",$con);
$sql="SELECT * FROM set4 WHERE id='$var'";//QUESTION ID
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
?></FONT></H1></li>
                <input type="submit" name='c' value="next">
<input type="reset" name ="d">
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
