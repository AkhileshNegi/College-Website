<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- Begin Head -->
    <head>
        <!-- Basic -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Question</title>
        <meta name="keywords" content="HTML5 Theme" />
        <meta name="description" content="Megakit - HTML5 Theme">
        <meta name="author" content="keenthemes.com">

        <!-- Web Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet">

        <!-- Vendor Styles -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/animate.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/themify/themify.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/scrollbar/scrollbar.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/swiper/swiper.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>

        <!-- Theme Styles -->
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/global/global.css" rel="stylesheet" type="text/css"/>
<link href="css/main.css" rel="stylesheet">
    
        <!-- Favicon -->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">


<!-- THEME 2 -->
    <link href="vendor2/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor2/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor2/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css2/creative.min.css" rel="stylesheet">
<!-- THEME2-->
    
<link href="css/main.css" rel="stylesheet">
    


    </head>
    <!-- End Head -->

<body >
<?php
session_start();
//setting COOKIE
$var=1;
setcookie("ques","1");
$_SESSION["ques"]="1";
$NAME=$_POST["name"];
$PASSWORD=$_POST["password"];
if(isset($_POST["name"],$_POST["password"]))
{
$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("project",$con);



$_SESSION["name"]="$NAME";

$_SESSION["pass"]="$PASSWORD";

setcookie("name","$NAME");
setcookie("pass","$PASSWORD");
mysql_close($con);
}
else{
    echo"error";
}
?>



<!--========== HEADER ==========-->
    <header class="navbar-fixed-top s-header js__header-sticky js__header-overlay">
        <!-- Navbar -->
        <div class="s-header__navbar">
            <div class="s-header__container">
                <div class="s-header__navbar-row">
                    <div class="s-header__navbar-row-col">
                        <!-- Logo -->
                        <div class="s-header__logo">
                            <a href="index.html" class="s-header__logo-link">
                                <img class="s-header__logo-img s-header__logo-img-default" src="img/goTA.png" alt="Megakit Logo">
                                <img class="s-header__logo-img s-header__logo-img-shrink" src="img/got1.png" alt="Megakit Logo">
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>
                    <div class="s-header__navbar-row-col">
                        <!-- Trigger -->
                        <a href="javascript:void(0);" class="s-header__trigger js__trigger">
                            <span class="s-header__trigger-icon"></span>
                            <svg x="0rem" y="0rem" width="3.125rem" height="3.125rem" viewbox="0 0 54 54">
                                <circle fill="transparent" stroke="#fff" stroke-width="1" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
                            </svg>
                        </a>
                        <!-- End Trigger -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navbar -->
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
  <div class="container">
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#aboutus">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#admin">Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#rd">R&D</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#library">Library</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

        <!-- Overlay -->
        <div class="s-header-bg-overlay js__bg-overlay">
            <!-- Nav -->
            <nav class="s-header__nav js__scrollbar">
                <div class="container-fluid">
                    <!-- Menu List -->                                
                    <ul class="list-unstyled s-header__nav-menu">
                        <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider -is-active" href="index.html">Student Portal</a></li>
                        <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="index_app_landing.html">Teacher Portal</a></li>
                        <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="index_portfolio.html">Departments</a></li>
                        <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="index_events.html">Events</a></li>
                        <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="index_lawyer.html">Academics</a></li>
                        <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="index_clinic.html">Gallery</a></li>
                        <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="index_coming_soon.html">Coming Soon</a></li>
                    </ul>
                    <!-- End Menu List -->
                </div>
            </nav>
            <!-- End Nav -->
            
            <!-- Action -->
            <ul class="list-inline s-header__action s-header__action--lb">
                <li class="s-header__action-item"><a class="s-header__action-link -is-active" href="#">En</a></li>
                <li class="s-header__action-item"><a class="s-header__action-link" href="#">Fr</a></li>
            </ul>
            <!-- End Action -->

            <!-- Action -->
            <ul class="list-inline s-header__action s-header__action--rb">
                <li class="s-header__action-item">
                    <a class="s-header__action-link" href="#">
                        <i class="g-padding-r-5--xs ti-facebook"></i>
                        <span class="g-display-none--xs g-display-inline-block--sm">Facebook</span>
                    </a>
                </li>
                <li class="s-header__action-item">
                    <a class="s-header__action-link" href="#">
                        <i class="g-padding-r-5--xs ti-twitter"></i>
                        <span class="g-display-none--xs g-display-inline-block--sm">Twitter</span>
                    </a>
                </li>
                <li class="s-header__action-item">
                    <a class="s-header__action-link" href="#">
                        <i class="g-padding-r-5--xs ti-instagram"></i>
                        <span class="g-display-none--xs g-display-inline-block--sm">Instagram</span>
                    </a>
                </li>
            </ul>
            <!-- End Action -->
        </div>
        <!-- End Overlay -->
    </header>
    <!--========== END HEADER ==========-->




<section style="background-color:LightSteelBlue ">
   </section>
<form action="projectx1.php" method="GET"  >
 <section id="geton">
        <div class="vertical-center sun">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">
<?php
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
echo"Question:"."1: ".$row["question"]."?";
    echo"<br/>";
}
    }
mysql_close($con);
?>
                        </h1><br><br>
                            

<div class="container ">
            <div class="row g-margin-b-70--xs g-margin-b-20--md">
                

                <div class="col-sm-4 ">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                        <input type="radio" name ="1" value="a" >



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
echo"".$row["a"];
    echo"<br/>";
}
    }
mysql_close($con);
?>
                       </div>
                    </div>
                </div>










                <div class="col-sm-4 ">
                    <div class="panel panel-success">
                         <div class="panel-heading"><input type="radio" name ="1" value="b">
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
echo"".$row["b"];
    echo"<br/>";
}
    }
mysql_close($con);
?>
                        </div>
                    </div>
                </div>
            </div>

     <div class="row">
                
                <div class="col-sm-4 ">
                    <div class="panel panel-info">
                         <div class="panel-heading"><input type="radio" name ="1" value="c">
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
echo"".$row["c"];
    echo"<br/>";
    
}
    }
mysql_close($con);
?>
                       </div>
                   </div>
                </div>
                
 
                <div class="col-sm-4 ">
                    <div class="panel panel-warning">
                       <div class="panel-heading"><input type="radio" name ="1" value="d">
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
echo"".$row["d"];
    echo"<br/>";
    
}
    }
mysql_close($con);
?>
                       </div>
                    </div>
                </div>
        </div>
                        </div>
                     </div>
                </div>
            </div><br>
&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;  <input type="submit" class="btn btn-success" name='c' value="NEXT">
&emsp; &emsp; &emsp; &emsp; <input type="reset" class="btn btn-info" name ="d" value="RESET">

        </div>


   </section>
                </form>





        <!--========== FOOTER ==========-->
        <footer class="g-bg-color--dark">
            <!-- Links -->
            <div class="g-hor-divider__dashed--white-opacity-lightest">
                <div class="container g-padding-y-80--xs">
                    <div class="row">
                        <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Home</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">About</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Work</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Twitter</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Facebook</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Instagram</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">YouTube</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-2 g-margin-b-40--xs g-margin-b-0--md">
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Subscribe to Our Newsletter</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Privacy Policy</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Terms &amp; Conditions</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-1 s-footer__logo g-padding-y-50--xs g-padding-y-0--md">
                            <h3 class="g-font-size-18--xs g-color--white">THDC IHET</h3>
                            <p class="g-color--white-opacity">THDC Institute of Hydropower Engineering and Technology is a newly established.The institute is situated at B. Puram, Tehri, approximately 150 km from capital city – Dehradun on beautiful site of THDC project.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Links -->

            <!-- Copyright -->
            <div class="container g-padding-y-50--xs">
                <div class="row">
                    <div class="col-xs-6">
                        <a href="index.html">
                            <img class="g-width-100--xs g-height-auto--xs" src="img/goTA.png" alt="Megakit Logo">
                        </a>
                    </div>
                    <div class="col-xs-6 g-text-right--xs">
                        <p class="g-font-size-14--xs g-margin-b-0--xs g-color--white-opacity-light"><a href="http://keenthemes.com/preview/Megakit/">Megakit</a> Theme Powered by: <a href="http://www.keenthemes.com/">KeenThemes.com</a></p>
                    </div>
                </div>
            </div>
            <!-- End Copyright -->
        </footer>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>

        <!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
        <!-- Vendor -->
        <script type="text/javascript" src="vendor/jquery.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.migrate.min.js"></script>
        <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.smooth-scroll.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.back-to-top.min.js"></script>
        <script type="text/javascript" src="vendor/scrollbar/jquery.scrollbar.min.js"></script>
        <script type="text/javascript" src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="vendor/swiper/swiper.jquery.min.js"></script>
        <script type="text/javascript" src="vendor/waypoint.min.js"></script>
        <script type="text/javascript" src="vendor/counterup.min.js"></script>
        <script type="text/javascript" src="vendor/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.parallax.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U"></script>
        <script type="text/javascript" src="vendor/jquery.wow.min.js"></script>

        <!-- General Components and Settings -->
        <script type="text/javascript" src="js/global.min.js"></script>
        <script type="text/javascript" src="js/components/header-sticky.min.js"></script>
        <script type="text/javascript" src="js/components/scrollbar.min.js"></script>
        <script type="text/javascript" src="js/components/magnific-popup.min.js"></script>
        <script type="text/javascript" src="js/components/swiper.min.js"></script>
        <script type="text/javascript" src="js/components/counter.min.js"></script>
        <script type="text/javascript" src="js/components/portfolio-3-col.min.js"></script>
        <script type="text/javascript" src="js/components/parallax.min.js"></script>
        <script type="text/javascript" src="js/components/google-map.min.js"></script>
        <script type="text/javascript" src="js/components/wow.min.js"></script>
        <!--========== END JAVASCRIPTS ==========-->








<!-- THEME 2 -->
<!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor2/popper/popper.min.js"></script>
    <script src="vendor2/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor2/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor2/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor2/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js2/creative.min.js"></script>

<!-- THEME2-->
    </body>
    <!-- End Body -->
</html>
