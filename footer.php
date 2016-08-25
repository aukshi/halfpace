<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <meta name="HandheldFriendly" content="true">
            <link rel="stylesheet" href="css/w3.css">
            <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>          
            <link rel="stylesheet" href="css/footer-distributed-with-contact-form.css">
    </head>
    <body>
        <!--Footer-->
    <footer class="footer-distributed">

			<div class="footer-left">

				<h3>Halfpace<span>...Coz everything can't be learned on the Internet!</span></h3>

				<p class="footer-links">
					<a href="#">About us</a>
					·
					<a href="#">FAQ</a>
					·
					<a href="#">Contact</a>
				</p>
                                
                                <div class="footer-icons">
                                    <p style='color:white;'>Share us on</p>
                                    
                                    
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=www.quora.com" style="background:url('Images/fb.png')0 100% no-repeat;" target="_blank">
</a>
                                    <a href="https://twitter.com/share" class="twitter-share-button" data-show-count="false" style="background:url('Images/twit.jpg')0 100% no-repeat;"></a><script async  charset="utf-8"></script>
                                    
                                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=www.quora.com&title=trial&summary=&source=" style="background:url('Images/in.png')0 100% no-repeat;"></a>  
                                    
					
                            
                                <a href="https://plus.google.com/share?url=www.quora.com" style="background:url('Images/gp.png')0 100% no-repeat;"></a>
                                    
                                <a href="whatsapp://send?text=www.quora.com" style="background:url('Images/wha.png')0 100% no-repeat;"></a>
                                </div>

				<p class="footer-company-name">Halfpace Pvt. Ltd. &copy; 2016</p>

				

			</div>

			<div class="footer-right" >

                            <h4>Want to suggest a skill?<br>
                                Or anything else?<br></h4>

				<form action="" method="post">
					<textarea name="suggestionMessage" placeholder="Message"></textarea>
					<button>Send</button>

				</form>
                            <!-- To check whether HTML fields are set -->
                            <?php
                            if((filter_input(INPUT_POST, 'suggestionEmail')) && (filter_input(INPUT_POST, 'suggestionEmail')))
                            {
                                require_once('phpmailer/PHPMailerAutoload.php');
                                try{
                                $mail = new PHPMailer;

                                $mail->isSMTP();                            // Set mailer to use SMTP
                                $mail->Host = "smtp.gmail.com";             // Specify main and backup SMTP servers
                                $mail->SMTPAuth = true;                     // Enable SMTP authentication
                                $mail->Username = 'ajinkyagurav21695@gmail.com';          // SMTP username
                                $mail->Password = '121237h21'; // SMTP password
                                $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
                                $mail->Port = 587;                          // TCP port to connect to
                                $mail->setFrom('ajinkyagurav21695@gmail.com','Ajinkya Gurav');
                                $mail->addReplyTo('ajinkyagurav21695@gmail.com', 'Ajinkya Gurav');
                                $mail->addAddress('shiramteke3@gmail.com');   // Add a recipient


                                $mail->isHTML(true);  // Set email format to HTML

                                $bodyContent = '<h1>How to Send Email using PHP in Localhost by CodexWorld</h1>';
                                $bodyContent .= '<p>This is the HTML email sent from localhost using PHP script by <b>CodexWorld</b></p>';

                                $mail->Subject = 'Email from Localhost by CodexWorld';
                                $mail->Body    = $bodyContent;

                                if(!$mail->send()) {
                                    echo 'Message could not be sent.';
                                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                                } else {
                                    echo 'Message has been sent';
                                }
                                }
                                catch (phpmailerException $e) {
                                    $errors[] = $e->errorMessage(); //Pretty error messages from PHPMailer
                                    echo $errors;
                                } catch (Exception $e) {
                                    $errors[] = $e->getMessage(); //Boring error messages from anything else!
                                    echo $errors;
                                }
                                                            }
                            ?>
                            

			</div>

		</footer>
    <!--Footer ends here-->

    </body>
</html>
