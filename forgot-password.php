<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Forgot Password</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="css/style1.css" media="screen" />
        <link type="text/css" rel="stylesheet" href="css/button.css" media="screen" />
        
        <script>
            function validateForgotPasswordForm()
            {
            var email = document.forgot_password.username.value;
            alert("Email: "+email);
            <?php echo "Hii" ?>
	//var password = document.getElementById("password").value;
        
	if ( email === "" ){
	alert ("Enter Email");
	return false;
        }
        
}
 </script>
    </head>
    <body>
          <form id="forgot_password" method="post" name="forgot_password" onsubmit=" return validateForgotPasswordForm()"  >
       <div id="wrapper">
	    <div id="wrappertop"></div>
                <div id="wrappermiddle">
                     <br><h3>Forgot Password</h3>
                        <br><br>
                           <div id="username_input">
                                <div id="username_inputleft"></div>
                                    <div id="username_inputmiddle">
			                 <input type="text" id="username" name="Email_ID" Placeholder="E-mail Address" >
					    <br> <br>  <img id="url_user" src="images/mailicon.png" alt="">
                                     </div>
                                     <div id="username_inputright"></div>
                           </div>
                       <div class="hot-container">
	          <p>
                      <br>
		<button type="submit" id="submit" class="btn btn-blue">Send My Password</button>
	          </p>
	
                      </div>

		</div>
            
                <div id="wrapperbottom"></div>
                
       </div>
          </form>
    </body>
</html>

<?php
if(isset($_POST['submit']))
{
    $to      = 'nobody@example.com';
    $subject = 'the subject';
    $message = 'hello';
    $headers = 'From: webmaster@example.com' . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);

    echo 'Email Sent.';
}

?>