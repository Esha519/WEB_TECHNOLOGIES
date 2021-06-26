

<?php 

session_start();

$UserID="19-39767-1";
$password="12345678";

if (isset($_POST['uname']))


 {
  if ($_POST['uname']==$UserID && $_POST['pass']==$password) {
    $_SESSION['uname'] = $UserID;
    header("location:faclogfirst.php");
  }
  else{
    $msg="username or password invalid";
    // echo "<script>alert('uname or pass incorrect!')</script>";
  }

}

 ?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

  <p style="color: red;"> *UserId and password required</p>
  <table align="center">
    
    <tr>
      <th colspan="2"><h2>Login</h2></th>
    </tr>
    <?php if(isset($msg)){?>
        <tr>
          <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
        </tr>
      <?php } ?>
    <tr>
      <td>UserID</td>
      <td><input type="text" name="uname"></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input type="password" name="pass"></td>
    </tr>
    <input type="checkbox" name="remember" /> Remember me  
    <tr>
      <td align="right" colspan="2"><input type="submit" name="login" value="login"></td>
    </tr>
  </table>
  
</form>
