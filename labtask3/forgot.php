<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body style="background-color:snow;">  

<?php

$cpassErrErr =  $passErr=  $opassErr="" ;
$cpass = $pass =  $opass="";
$sp= "/(?=.*?[#?!@$%^&*-])/";
$min= "/.{8,}/";



    if  (empty($_POST["opass"])) {
    $opassErr = "Password is required";
  } else  {
    $opass= test_input($_POST["opass"]);
    // check if name only contains letters and whitespace
     
    if (!preg_match("/(?=.*?[#?!@$%^&*-])/",$opass)) {
      $opassErr = "Write special char";
     
     
    }

    else if  (!preg_match($min,$opass)) {
   $opassErr="MINIMUM number 8";

}
else{
     $opassErr="";
}

    }



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

    if  (empty($_POST["cpass"])) {
    $cpassErr = "Password is required";
  } else  {
    $cpass= test_input($_POST["cpass"]);
    // check if name only contains letters and whitespace
     
    if (!preg_match("/(?=.*?[#?!@$%^&*-])/",$cpass)) {
      $cpassErr = "Write special char";
     
     
    }

    else if  (!preg_match($min,$cpass)) {
   $cpassErr="MINIMUM number 8";

}
if($cpass!=$pass){
   $cpassErr="Confirm Password doest Matched";
}
else{
     $cpassErr="";
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
  Old password: <input type="text" name="opass" value="<?php echo $opass;?>">
  <span class="error">* <?php echo $opassErr;?></span>
  <br><br>



 Password: <input type="text" name="password" value="<?php echo $pass;?>">
  <span class="error">* <?php echo $passErr;?></span>
  <br><br>

 Confirm password: <input type="text" name="cpass" value="<?php echo $cpass;?>">
  <span class="error">* <?php echo $cpassErr;?></span>
  <br><br>

  <input type="submit" name="submit" value="Submit">  

           <p><a href="login1.php"> Forgot password </a> </p>
      </body>  
 </html>  