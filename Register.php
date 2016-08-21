<?php

include_once 'DB_Con.php';
?>
<html>
<head>
<title>Registration Form </title>
<!-- Include CSS File Here -->
<link rel="stylesheet" href=
      "css/style.css"/>
<link rel="stylesheet" href=
      "css/style3.css"/>
<link rel="stylesheet" href=
      "css/button.css"/>
<!-- Include JS File Here -->
<script type="text/javascript" src="js/validation"></script>
<script>
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
        else if(email==="")
        {
            alert("Enter email");
            return false;
        }
        else if(password==="")
        {
            alert ("Enter Password");
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
    </script>
</head>

<body background="Images/bg.jpg">
    <div align="middle"> <strong>Welcome to Halfpace Pvt. Ltd.</strong> <br>

    </div>
<div class="container">
<div class="main">
     
<h2>Registration </h2>
<form id="Register" method="post" name="reg_form" onsubmit=" return validateRegisterForm()"  action="RegisterUser.php">
 <br/>   
 <!--<label class="required">Username :</label>
<input type="text" name="username" id="reg_username"/>
-->
<label class="required">Name :</label>
<input type="text" name="name" id="reg_name"/>
<br>
<label class="required">Email ID :</label>
<input type="text" name="email" id="reg_email"/>
<?php

$query="select * from users";
    $results=  mysqli_query($con, $query);
$email=filter_input(INPUT_POST, 'email');
$flag=0;
if(!empty($email)){
    

    foreach ($results as $user){


                                    if( $user["email_id"]==$email)
                                    {
                                        $message = " Hii Oops! Email Already Registered <br> Please enter new Email ID";
                                        echo "<script type='text/javascript'>alert('$message');</script>";
                                        //echo'Oops! Email Already Registered <br> Please enter new Email ID';
                                        //header( "refresh:3; url=Register.php" );
                                        //$flag=1;
                                    }
                            }
}
?>
<br>
<br>
<label class="required">Enter Password :</label>
<input type="password" name="password" id="reg_password"/>
<br>
<label class="required">Confirm Password :</label>
<input type="password" name="password" id="reg_confirm_password"/>


  
<button type="submit" id="submit" class="btn btn-blue">Register</button>
</form>
<!--<span><b >Note : </b> <b class="note"> * </b> fields are compulsory <br/></span>-->

</div>
</div>
</body>
</html>

