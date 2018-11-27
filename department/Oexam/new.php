
 <?php
 if(isset($_POST['user'])&& ($_POST['contact']))
 {
 echo $name= $_POST['user'];
 echo $age= $_POST['contact'];
 }
 
 ?>

<form method="GET" action 'forms.php'>
NAME:  <input type= 'text' name='user'>
AGE:   <input type= 'number' name='contact'>
 <input type= 'submit' name='sub'>
 </form