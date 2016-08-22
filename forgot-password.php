<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include 'DB_Con.php';
?>
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
                            if((filter_input(INPUT_POST, 'Email_ID')))
                            {
                                $forgotP_email="".$_POST['Email_ID'];
                                require_once('phpmailer/PHPMailerAutoload.php');
                                try{
                                $mail = new PHPMailer;
                                $OTP=1234;
                                $mail->isSMTP();                            // Set mailer to use SMTP
                                $mail->Host = "smtp.gmail.com";             // Specify main and backup SMTP servers
                                $mail->SMTPAuth = true;                     // Enable SMTP authentication
                                $mail->Username = '.com';          // SMTP username
                                $mail->Password = ''; // SMTP password
                                $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
                                $mail->Port = 587;                          // TCP port to connect to
                                $mail->setFrom('ajinkyagurav21695@gmail.com','Ajinkya Gurav');
                                $mail->addReplyTo('ajinkyagurav21695@gmail.com', 'Ajinkya Gurav');
                                $mail->addAddress($forgotP_email);   // Add a recipient
                                

                                $mail->isHTML(true);  // Set email format to HTML

                                $bodyContent = '<h1>You requested to reset password</h1>';
                                $bodyContent .= '<p>Your temperory one time password is  <b> '.$OTP.'</b> .'
                                        . 'Do login again using this password.</p>';

                                $mail->Subject = 'Team Halfpace';
                                $mail->Body    = $bodyContent;
                                $checkUserRegistered="select * from users where email_id='$forgotP_email'";
                                $results=  mysqli_query($con, $checkUserRegistered);
                                $row=  mysqli_fetch_array($results);
                                if(empty($row))
                                {
                                    echo "<script type='text/javascript'>alert('Sorry! This Email ID is not registered.');</script>";
                                }
                                else if(!$mail->send()) {
                                    //echo 'Message could not be sent.';
                                    echo "<script type='text/javascript'>alert('email could not be sent. Please check the email entered');</script>";
                                    //echo 'Mailer Error: ' . $mail->ErrorInfo;
                                } else {
                                    //echo 'Message has been sent';
                                    echo "<script type='text/javascript'>alert('email has been sent');</script>";
                                    $addValues="insert into forgotPassword values('$forgotP_email','$OTP')";
                                    $results=  mysqli_query($con, $addValues);
                                    
                                }
                                }
                                catch (phpmailerException $e) {
                                    $errors[] = $e->errorMessage(); //Pretty error messages from PHPMailer
                                    //echo $errors;
                                } catch (Exception $e) {
                                    $errors[] = $e->getMessage(); //Boring error messages from anything else!
                                    //echo $errors;
                                }
                                                            }

?>