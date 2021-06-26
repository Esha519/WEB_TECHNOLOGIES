
<h3>

  <a href="#"><marquee direction="right" behavior="alternate"  bgcolor="white"> AIUB
-Where leaders are created</a></h3>
  
  
<img src="logo.jpg" width="50" height="50" title="Logo of a company" alt="Logo of a company" /></marquee>

<h3 style="text-align: center;" > Welcome Respected Faculty </h3>
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