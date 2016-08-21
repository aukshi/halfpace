<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include 'DB_Con.php';
session_start();
?>
<html>
    <head>
            <title>Halfpace</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <meta name="HandheldFriendly" content="true">
            <link rel="stylesheet" href="css/w3.css">
            <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script type="text/javascript" src="js/notifications.js"></script>
            <link rel="stylesheet" href="css/testingMenubar.css">
            <link rel="stylesheet" href="css/footer-distributed-with-contact-form.css">

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


       
            

            <link rel="stylesheet" href="css/testingMenubar.css">
     </head>
     <body onload="document.refresh();">
         <!-- Menubar begins here-->
             <div id="header" class="header1" style="width: 100%; height:80px; background:url('images/bg1.jpg')0 100% no-repeat; background-size: cover;; margin:10px; ">
            <div id="logo">Logo</div>
            <div id="searcharea" class="header1"><input placeholder="search" type="text" id="searchbox"/></div>
            <?php
            $loggedUser=$_SESSION["loggedUser"];
            $usersQuery="select * from profile where email_id='$loggedUser'";
            $profileResults=  mysqli_query($con, $usersQuery);
            $row = mysqli_fetch_array($profileResults);
            $profilePic=$row["picture"];
            ?>
            
            <div  id="profilearea" class="header1" ><a href="profile.php"><img class="imageCircle" src="<?php echo $profilePic; ?>" alt="<?php echo $profilePic; ?>" width="100" height="100"></a></div>
            
            <ul id="nav">
            <li class="dropdown">
            <a class="dropdown-toggle">Settings<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Option 1</a></li>
              <li><a href="#">Option 2</a></li>
              <li><a href="#">Option 3</a></li>
              <li><a href="#">Option 4</a></li>
              <li><a href="#">Option 5</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="logout.php">Log out</a></li>
            </ul>
            
            
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
<!--body-->
<div id='checking'>
            <div id="centerbody">
                <div id="leftboxes">
                    <div id="trending">
                        <br><b>Trending</b>
                        <br><br>
                    <?php
                        //mysqli_query($con,"select * from trends order by count desc");
                    $trendsQuery="select * from trends order by count desc";
                    $results=  mysqli_query($con, $trendsQuery);
                    $index=1;
                    //loop
                    foreach ($results as $trends){
                        ?>
                    <b class="tendsOnHover"><?php echo "$index . ";echo $trends["skillname"];?></b>
                    <br><br>
                    <?php
                    $index++;
                    }
                    ?>
                    </div>
                    <div id="ad1"><h4>Advertisements</h4></div>
                </div>

                <div id="feed">
                    <div class="layer1">
                        <?php $skillsQuery="select * from skillsstatus "
                                     . "where accepted=0 AND requested=1";
                        
                    $skillsResults= mysqli_query($con, $skillsQuery);
                    
                    $className="headingAccept";
                    
                    $id=1;
                    //loop
                    foreach ($skillsResults as $user){
                        $userAccepted=$user["eid2"];
                        
                        //Code for getting the profile image  
                        $profileQuery="select * from profile where email_id='$userAccepted'";
                        $profileResults=  mysqli_query($con, $profileQuery);
                        $row = mysqli_fetch_array($profileResults);
                        $acceptedPic=$row["picture"];
                        //////////////////////////////
                            ?>
                    <br>
                    <div class='heading' id='hide'>
                             <label class='name'></label>
        
                         <label class='hardcontent'> <?php echo $userAccepted; ?> accepted your request for</label>
                         <label class='name'> <?php echo $user["requestedSkill"] ?></label>
                    </div>
                    <div class='content' id=''<?php $id;?> >
                        <table>
                            <tr><td><div class="" style='width: 100px; height: 100px'><img src="<?php echo $acceptedPic ?>" alt='Profile' width='100' height='100'></div>
                            <td> <div class='details'><b>This is my status</b><br>Contact no.: 8983319502<br> At Post Barav,Junnar.</div>
                        </tr>
                        </table>
                    </div>
                    <?php
                 $id++;
                    }; 
                    ?>
                    <?php $query="select * from posts";
                    $results=  mysqli_query($con, $query);
                    //loop
                    foreach ($results as $user){
                        $userAccepted=$user["user"];
                        //Code for getting the profile image  
                        $profileQuery="select * from profile where email_id='$userAccepted'";
                        $profileResults=  mysqli_query($con, $profileQuery);
                        $row = mysqli_fetch_array($profileResults);
                        $acceptedPic=$row["picture"];
                        //////////////////////////////
                            ?>
                    <br>
                    <div class='heading' id='hide'>
                             <label class='name'></label>
        
                         <label class='hardcontent'> <?php echo $userAccepted; ?> Has posted...</label>
                                         <!--<label class='name'> <?//php echo $user["requestedSkill"] ?></label>-->
                    </div>
                    <div class='content' id=''<?php $id;?> >
                 
                        <table>
                        <tr><td><div style='width: 100px; height: 100px'><img src="<?php echo $acceptedPic ?>" alt="<?php echo $acceptedPic ?>" width='100' height='100'></div>
                            <td> <div class='details'><br><?php echo $user["title"];echo ("<br>"); echo $user["message"]; ?></div>

                        </tr>
                        </table>

                    </div>
                    
                    
                    <?php
                 $id++;
                    }; 
                    ?>

                    </div>



                </div><!--End of Feed-->

                <div id="rightboxes">
                    <div id="endorsements"><h4>Endorsements</h4></div>

                    <div id="ad2"><h4>Advertisements</h4></div>
                    </div>
            </div>
    
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

			<div class="footer-right" style='margin-top:-12%;'>

                            <h4>Want to suggest a skill?<br>
                                Or anything else?<br></h4>

				<form action="" method="post">

					<input type="text" name="suggestionEmail" placeholder="Email" />
					<textarea name="suggestionMessage" placeholder="Message"></textarea>
					<button>Send</button>

				</form>
                            <!-- To check whether HTML fields are set -->
                            <?php
                            if((filter_input(INPUT_POST, 'suggestionEmail')) && (filter_input(INPUT_POST, 'suggestionEmail')))
                            {
                                $email=filter_input(INPUT_POST, 'suggestionEmail');
                                $message=filter_input(INPUT_POST,'suggestionMessage');
                                $query="Insert into suggestion values ('$email','$message')";
                                mysqli_query($con, $query);       
         $to = "guraaji@gmail.com";
         $subject = "This is subject";
         
         $message = "<b>This is HTML message.</b>";
         $message .= "<h1>This is headline.</h1>";
         
         $header = "From:ajinkyagurav21695@gmail.com \r\n";
         $header .= "Cc:ajinkyagurav21695@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
                            }
                            ?>
                            

			</div>

		</footer>
    <!--Footer ends here-->

        
</div>
    </body>
</html>
