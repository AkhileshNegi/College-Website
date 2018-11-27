<!DOCTYPE html>
<html>
<head>
<title>LOGIN</title>
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
        }
        td.footer {
            background-color:steelblue;
            height: 130px;
        }

    </style>
</head>

<body>

<?php

session_start();
if(isset($_SESSION["name"],$_SESSION["password"]))
{
header("Location:projectx.php");

}
?>

<form action="projectx.php" method="POST">
    <table border="0">
        <tr>
            <td colspan="2" class="header">
            <H1>   <FONT color="gold" face="Engravers MT" size='15' >LOGIN FIRST</FONT></H1></td>
        </tr>
        <tr>
            <td class="sidebar">
        <br/>
                <ul>
        
                </ul>
            </td>
            <td class="article">

            <H1>   <FONT color="black" face="Magneto" size='15' >Enter Details</FONT></H1>
 <ul>
                    <li><H1>   <FONT color="black" face="Magneto" size='5' >NAME:<input type="text" name="name" size="30" required></FONT></H1></li>
                    <li><H1>   <FONT color="black" face="Magneto" size='5' >PASSWORD:<input type="password" name="password" size="30" required>
<br><br></FONT></H1></li>
                      &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                      <input type="submit" value="submit" name='c' size="30">&nbsp &nbsp &nbsp &nbsp
<input type="reset" value="reset" name='d'>
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
