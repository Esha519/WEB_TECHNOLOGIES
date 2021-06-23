<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body style="background-color:white;">  

<?php
// define variables and set to empty values
$nameErr =  $passErr="" ;
$name = $pass ="";
$sp= "/(?=.*?[#?!@$%^&*-])/";
$min= "/.{8,}/";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
     
    if (!preg_match("/^[a-zA-Z-' , ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
      $name="";
     
    }}}

    if  (empty($_POST["password"])) {
    $passErr = "Password is required";
  } else  {
    $pass= test_input($_POST["password"]);
    // check if name only contains letters and whitespace
     
    if (!preg_match("/(?=.*?[#?!@$%^&*-])/",$pass)) {
      $passErr = "Write special char";
     
     
    }

    else if  (!preg_match($min,$pass)) {
   $passErr="MINIMUM number 8";

}
else{
     $passErr="";
}

    }
  
   

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP TASK(lab task 2)</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>



 Password: <input type="text" name="password" value="<?php echo $pass;?>">
  <span class="error">* <?php echo $passErr;?></span>
  <br><br>

 <input type="checkbox" name="remember" /> Remember me <br><br>
     
     <input type="submit" value="Login">
     <p><a href="forgot.php"> Forgot password ?</a> </p>

      </body>  
 </html>  