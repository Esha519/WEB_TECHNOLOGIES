
<h3>

  
   <h3  > Your UserID & Password is correct.</h3><br><br>


<?php 

session_start();

if (isset($_SESSION['uname']))



{
    


    echo "<br><a href='faclog2nd.php'>Go to main Profile</a><br><br><br>";


echo "<a href='facultylog.php'>Log Out</a><br>";

}
else{
        header("location:facultylog.php");
        // echo "<script>location.href='login.php'</script>";
    }

 ?>