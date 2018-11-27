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

<form>
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

            <H1>   <FONT color="black" face="Magneto" size='15' >CHOOSE</FONT></H1>
 <ul>
                    <li><H1>   <FONT color="black" face="Magneto" size='5' >1 : <a href="login.php">TAKE a test</a></FONT></H1></li>
                    <li><H1>   <FONT color="black" face="Magneto" size='5' >2 : <a href="login2.php">SEE your result</a></FONT></H1></li>
                 
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
