

<html>
<body>

<form action="cfaclog.php" method="post">

  <p style="color: red;"> *UserId and password required</p>

    
   <h2>Login---Enter your ID & Password</h2>
    
  
    Username: <input name="username" type="text" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>"><br><br>
  
     Password: <input name="password" type="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>"><br><br>

    <input type="checkbox" name="remember" /> Remember me
  
  

  
  
</form>
<a href="faclogfirst.php"><h3 style="text-align:center;"> Login</h3> </a>
<br>


<a href="facultyforgot.php">Forgot Password?</a><br><br>
<button><a href="HomePage.php">Go To HomePage </button>
</a></button></body></html>