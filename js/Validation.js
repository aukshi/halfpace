function validateRegisterForm()
	{
            alert("M in ValidateReg");
	var name = document.reg_form.reg_name.value;
        var password = document.reg_form.reg_password.value;
        var email = document.reg_form.reg_email.value;
        var cpassword = document.reg_form.reg_confirm_password.value;
	//var password = document.getElementById("password").value;
        
	if ( name === "" ){
	alert ("Enter Name");
	return false;
        }
        else if(password==="")
        {
            alert ("Enter Password");
            return false;
            
        }
        else if(email==="")
        {
            alert("Enter email");
            return false;
        }
        else if(cpassword==="")
        {
            alert ("Confirm the Password");
            return false;
        }
        else if(cpassword!==password)
        {
            alert("Password not matched");
            return false;
        }
        

}
 function validateLoginForm()
	{
	var name = document.Login.username.value;
        var password = document.Login.password.value;
        
	//var password = document.getElementById("password").value;
        
	if ( name === "" ){
	alert ("Enter Name");
	return false;
        }
        else if(password==="")
        {
            alert ("Enter Password");
            return false;
            
        }
        
      

}
