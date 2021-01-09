<!DOCTYPE html>
<!--PROCESSING THE PHP-->

<?php
require_once('config.php');

//STARTOF INSERTION CODE
if(!empty($_POST)){
//connect and Escape

$mysql=new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);//connect to database

$data= array_map(array($myql,'real_escape_string'),$_POST);//simple security check

//convert to variables
extract($data);

//Add content to database
$query="INSERT INTO users (username,firstname,lastname,password,email)
VALUES ('$username','$firstname','$lastname','$password','$email')";

//testing that data was inserted by using: print_r($query);
exit;

$insert=$mysql->query($query);//query is ran here

//END OF INSERTION

?>

<html>
<title>Regitration Form</title>
<link rel="stylesheet" href="f_project.css">
<meta charset="Shermicah Mitchell Lewis AL2018007952">
<body>
    <p>
        REGISTRATION FORM
    </p>
<div>
<form>
<form action="" method="post">

<!--PHP Block TO DISPLAY FEEDBACK-->
<?php if (isset($isset)):?>
    <?php if($inser==true):?>
    <p>Sign-Up was successfull </p>
<?php else:?>
<p>There was an error with the Sign-Up</p>
<?php endif;?>
</div>
<?php endif;?>

<label>username:</label>
   Username:<br>
  <input type="text" name="username">
  <br>
   First name:<br>
  <input type="text" name="firstname">
  <br>
  Last name:<br>
  <input type="text" name="last name">
  <br>
  Email Address:<br>
  <input type="text" name="email address">
  <br>
  Password:<br>
  <input type="text" name="password">
  <br>
  <br>
  <input type="submit" value="Submit">



</form>
</div> 

<div class="form-box">
    <div class="clow">

    </div>
</div>
</body>
</html>
