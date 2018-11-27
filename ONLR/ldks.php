<?php
require_once('connect.php');
$branch = $_POST['cse'];
$ece = $_POST['ece'];
$ce = $_POST['ce'];
$me = $_POST['me'];
$ee = $_POST['ee'];
$check = mysqli_query($con,"SELECT email FROM user WHERE email='$email'");
$count = mysqli_num_rows($check);
if($count == true)
{
    $query = mysqli_query($con,"SELECT * FROM user WHERE email='$email'");
    $row = mysqli_fetch_assoc($query);
    if($pass == $row["password"])
    {
      session_start();
      $_SESSION['id']=$row["email"];
      $_SESSION['name']=$row['name'];
      header("location:profile.php");    
    }	
    else
    {
      echo "invalid passsword";
      ?>
      <a href="index.html">retry</a>
      <?php
    }
}
else
{
echo "you are not registered";
?>
<a href="form.html">sign up</a>
<?php
}
?>