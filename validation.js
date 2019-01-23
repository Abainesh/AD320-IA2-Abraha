<html>
<head>
<script type="text/javaScript"> 
    function validateform(){ 
    // Storing Field Values In Variables
    var name=document.getElementById("name").value;
    var email=document.getElementById("email").value;
    var phoneNuber=document.getElementById("phoneNumber").value;
    var stateOfResidency=document.getElementById("stateOfResidency").value;
    
    if (name.value==null || name.value==""){
        alert("Name can't be blank");
        return false;
        
    }else if(email.value==null || email.value==""){
        alert("Email can't be blank");
        return false;  
  }  
}
  
    //Getting all input text objects
    var name = document.forms["vform"]["name"];
    var email = document.forms["vform"]["email"];
    var phoneNumbr = document.forms["vform"]["phoneNumber"];
    var stateOfResidency= document.forms["vform"]["stateOfResidency"]; 
    //Getting all error display objects
    var nameErr = document.getElementById("nameErr");
    var emailErr = document.getElementById("emailErr");
//Setting all event listeners
name.addEventListener("blur, nameVerify, true");
email.addEventListener("blur, emailVerify, true");
</script>

</body>
</html>