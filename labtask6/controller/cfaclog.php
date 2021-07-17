<?php

if(!empty($_POST["remember"])) {
  setcookie ("username",$_POST["username"],time()+ 1000);
  setcookie ("password",$_POST["password"],time()+ 1000);
  echo "Cookies Set Successfuly <br>";
  echo "Welcome Faculty ". $_POST["username"];
} else {
  setcookie("username","");
  setcookie("password","");
  echo "Cookies Not Set. I will forget you !!!!";
}

?>
 <!DOCTYPE html>
<html>
<body>
<br>
<a href="faclogfirst.php"> Log In </a>
<br>

</body>
</html>