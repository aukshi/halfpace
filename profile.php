<!doctype html>
<?php
include 'DB_Con.php';
session_start();
?>
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="HandheldFriendly" content="true">
  <title>Profile</title>
  <meta name="author" content="Abhishek Kshirsagar">
  <link rel="stylesheet" href="css/w3.css">
  <link rel="stylesheet" type="text/css" media="all" href="css/profile.css">
  <link rel="stylesheet" href="css/testingMenubar.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script type="text/javascript" src="js/notifications.js"></script>
  <link rel="stylesheet" href="css/testingMenubar.css">
   <link rel="stylesheet" href="css/footer-distributed-with-contact-form.css">
  <link rel="shortcut icon" href="kitten.jpg">
  <link rel="icon" href="kitten.jpg">
  
  <script type="text/javascript">
                jQuery(document).ready(function() {
                  jQuery(".content").hide();
                  //toggle the componenet with class msg_body
                  jQuery(".heading").click(function()
                  {
                    jQuery(this).next(".content").slideToggle(500);
                  });
                });
            </script>
        
       
</head>

<body>
<!-- Menubar begins here-->
             <div id="header" class="header1" style="background:url('Images/bg1.jpg')0 100% no-repeat; background-size: cover; ">
            <div id="logo">Logo</div>
            <div id="searcharea" class="header1"><input placeholder="search" type="text" id="searchbox"/></div>
            <div  id="profilearea" class="header1" ><a href="profile.html"><img class="imageCircle" src="kitten.jpg" alt="Profile" width="100" height="100"></a></div>
            
            <ul id="nav">
            <li><a href="logout.php">Log out</a></li>
            
            
            
            <li id="notification_li">
            
                <span id="notification_count">3</span>
                <a href="#" id="notificationLink">Notifications</a>

                <div id="notificationContainer">
                <div id="notificationTitle">Notifications</div>
                <div id="notificationsBody" class="notifications">
                    <div class="w3-card w3-yellow">
                    <p>w3-card</p>
                    </div>
                </div>
                <div id="notificationFooter"><a href="notification.html">See All</a></div>
                </div>

            </li>
            
            <li id="friend_li">
            
                <span id="friend_count">3</span>
                <a href="#" id="friendLink">Friend Requests</a>

                <div id="friendContainer">
                <div id="friendTitle">Friend Requests</div>
                <div id="friendBody" class="notifications">
                    <div class="w3-card-8 w3-dark-grey">

                    <div class="w3-container w3-center">
                      <img src="Images/timepass.jpg" alt="Avatar" style="width:80%">
                      <h5>John Doe</h5>

                      <button class="w3-btn w3-green">Accept</button>
                      <button class="w3-btn w3-red">Decline</button>
                    </div>

                    </div>
                </div>
                <div id="friendFooter"><a href="friendRequest.html">See All</a></div>
                </div>

            </li>
            
            
            </ul>
             </div>
          <!-- Menubar ends here-->
         
    
    <div id="superWrapper" style="margin-top: 10%; width:100%;">
  <div id="w" style=" width: 65%; margin-left:2%;">
    <div id="content" class="clearfix">
        <h1 style="font-family: Comic Sans;">Profile</h1>
        <?php
        //Code for getting the profile image  
            $loggedUser=$_SESSION["loggedUser"];
            $usersQuery="select * from profile where email_id='$loggedUser'";
            $profileResults=  mysqli_query($con, $usersQuery);
            $row = mysqli_fetch_array($profileResults);
            $profilePic=$row["picture"];
                        //////////////////////////////
                        ?>
        <div id="userphoto"><img src="<?php echo $profilePic ?>" alt="<?php echo $profilePic ?>" width="300" height="300"></div>
      <div id="profilespecs">
      <nav id="profiletabs">
        <ul class="clearfix">
            <?php
        //Code for getting the profile of the logged user
            $profileBio=$row["bio"];
                        //////////////////////////////
                        ?>
          <li><a href="#bio" class="sel">Bio</a></li>
          
          <li><a href="#activity">Activity</a></li>
          <li><a href="#friends">Friends</a></li>
          <li><a href="#settings">Settings</a></li>
        </ul>
      </nav>
          </div>
      
      <section id="bio">
       <?php echo $profileBio ?>
      </section>
      
      <section id="activity" class="hidden">
        <p>Most recent actions:</p>
        
        <p class="activity">Activity 1</p>
        
        <p class="activity">Activity 2</p>
        
        <p class="activity">Activity 3</p>
        
        <p class="activity">Activity 4</p>
        
        <p class="activity">Activity 5</p>
      </section>
      
      <section id="friends" class="hidden">
        <p>Friends list:</p>
        
        <ul id="friendslist" class="clearfix">
            <!--Code for displaying friends-->
            <?php 
                    $profileQueryRequested="select * from friend_status where eid1='$loggedUser'";
                        $profileResultsReq=  mysqli_query($con, $profileQueryRequested);
                        $profileQueryAccepted="select * from friend_status where eid2='$loggedUser'";
                        $profileResultsAcc=  mysqli_query($con, $profileQueryAccepted);
                        
                    //loop
                    foreach ($profileResultsReq as $rowReq){
                            ?>
          <li><a href="#"><img src="Images/avatar.png" width="22" height="22"><?php echo $rowReq["eid2"] ?></a></li>
            <?php 
                    }
            ?>
          <?php 
                    //loop
                    foreach ($profileResultsAcc as $rowAcc){
                          ?>
                    <li><a href="temp1.php?temp1=true" method="post"><img src="Images/avatar.png" width="22" height="22"><?php echo $rowAcc["eid1"] ?></a></li>
            <?php 
                    }
            ?>
                    <!--End of Code for displaying friends-->
          <!--<li><a href="#"><img src="Images/avatar.png" width="22" height="22"> SomeGuy123</a></li>
          <li><a href="#"><img src="Images/avatar.png" width="22" height="22"> PurpleGiraffe</a></li>-->
        </ul>
      </section>
      
      <section id="settings" class="hidden">
        <p>Update your account:</p>
        
        <p class="setting"><span>Mobile Number <img src="Images/edit.png" alt="*Edit*"></span> 1234567890</p>
        
        <p class="setting"><span>Address <img src="Images/edit.png" alt="*Edit*"></span>xyz</p>
        
        <p class="setting"><span>Status <img src="Images/edit.png" alt="*Edit*"></span> If you gotta dream then you gotta protect it.</p>
        
        <p class="setting"><span>Profile Status <img src="Images/edit.png" alt="*Edit*"></span> Public</p>
        
      </section>
      
    </div><!-- @end #content -->
   
  </div><!-- @end #w -->
   <div id="w2" style=" width: 30%; float:right; margin-left:2%;">
    <div id="content2" class="clearfix">
        <h1 style="font-family: Comic Sans;">Update</h1>
      <nav id="profiletabs">
        <ul class="clearfix">
          <li><a href="#Skills" class="sel">Skills</a></li>
          <li><a href="#Requirements">Requirements</a></li>
        </ul>
      </nav>
      
        <section id="Skills" class="hidden">
       <p>This is skills section:</p>
      </section>
      
        <section id="Requirements" class="hidden" >
        <p>This is requirements section:</p>
        
      </section>
      
    </div><!-- @end #content2 -->
   
  </div><!-- @end #w2 -->
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
    <!--Footer ends here-->

  </div><!-- @end #superWrapper -->
  
<script type="text/javascript">
$(function(){
  $('#profiletabs ul li a').on('click', function(e){
    e.preventDefault();
    var newcontent = $(this).attr('href');
    
    $('#profiletabs ul li a').removeClass('sel');
    $(this).addClass('sel');
    
    $('#content section').each(function(){
      if(!$(this).hasClass('hidden')) { $(this).addClass('hidden');
      }
    });
    $('#content2 section').each(function(){
      if(!$(this).hasClass('hidden')) { $(this).addClass('hidden');
      }
    });
    
    $(newcontent).removeClass('hidden');
  });
});
</script>
</body>
</html>