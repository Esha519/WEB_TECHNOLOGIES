function validateForm() {
    
    var email = document.getElementById("email").value;
   
    var pass = document.getElementById("pass").value;
    var cpass = document.getElementById("cpass").value;
   
  
  
    if(email.indexOf('@')<=0){
        document.getElementById('mytext').innerHTML="You have to have @ in your email adrress ";
        return false;
    }     
    if ((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.')) 
    {
        document.getElementById('mytext').innerHTML="You missed the dot symbol of your email adrress";
        return false;
    }
    

    if (pass.!preg_match("/(?=.*?[#?!@$%^&*-])/") && (pass.length>7)
    {
      document.getElementById("mytext").innerHTML="*Your Password should contain atleast 8 digits";
      return false;
    }

    if (cpass.!preg_match("/(?=.*?[#?!@$%^&*-])/")  && (cpass.length>7)
    {
      document.getElementById("mytext").innerHTML="*Your confirm password should contain atleast 8 digits";
      return false;
    }


    


    

  }