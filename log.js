function validateForm() {
    var uname = document.getElementById("uname").value;
    
    var password = document.getElementById("password").value;
    
   
  
    if (uname == "")
    {
      document.getElementById("mytext").innerHTML="*Please re-enter the name and your name should contain atleast 6 digits";
      return false;
    }
    if (uname.length<6)
    {
      document.getElementById("mytext").innerHTML="*Please re-enter the name and your name should contain atleast 6 digits";
      return false;
    }


    

    if (password.length!=8)
    {
      document.getElementById("mytext").innerHTML="*Your Password should contain atleast 8 digits";
      return false;
    }

   

    


    

  }