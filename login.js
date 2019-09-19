

function validateForm(){
      var un = document.loginform.email.value;
      var pwform = document.loginform.password.value;
      var username = "username";
       var pw = "password";
       if((un == username)  && (pwform == pw)){
           alert("login was successful.");
       }else{
           alert("Login unsuccessful,check your username and password ");
       }

}
