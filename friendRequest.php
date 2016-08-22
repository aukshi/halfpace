<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Friend Requests</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="HandheldFriendly" content="true">
        <link rel="stylesheet" href="css/w3.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/footer-distributed-with-contact-form.css">
        <script type="text/javascript" src="js/notifications.js"></script>
        <link rel="stylesheet" href="css/testingMenubar.css">
    </head>
    <body>
        <!-- Menubar begins here-->
             <div id="header" class="header1" style=" background:url('Images/bg1.jpg')0 100% no-repeat; background-size: cover; ">
            <div id="logo">Logo</div>
            <div id="searcharea" class="header1"><input placeholder="search" type="text" id="searchbox"/></div>
            <div  id="profilearea" class="header1" ><a href="profile.php"><img class="imageCircle" src="kitten.jpg" alt="Profile" width="100" height="100"></a></div>
            
            <ul id="nav">
            <li class="dropdown">
            <a href="#" class="dropdown-toggle">Settings<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Option 1</a></li>
              <li><a href="#">Option 2</a></li>
              <li><a href="#">Option 3</a></li>
              <li><a href="#">Option 4</a></li>
              <li><a href="#">Option 5</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Log out</a></li>
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
                <div id="notificationFooter"><a href="notification.php">See All</a></div>
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
                <div id="friendFooter"><a href="friendRequest.php">See All</a></div>
                </div>

            </li>
            
            
            </ul>
             </div>
          <!-- Menubar ends here-->
        
       <div id="mainbody" style="margin-top: 10%;">
           
                <div style="align-content: center; font-family: Comic Sans; font-size:20px; font-weight: bold; text-align: center;">Friend requests</div>
                 <div id="requests" style= "display: -webkit-box; -webkit-box-orient:horizontal; padding-bottom: 10%;">
                <div class="w3-card-8 w3-dark-grey" style="width:20%; margin-left: 2%; padding-left: 2%;">

                    <div class="w3-container w3-center">
                      <img src="Images/timepass.jpg" alt="Avatar" style="width:80%">
                      <h5>Abhishek Kshirsagar</h5>

                      <button class="w3-btn w3-green">Accept</button>
                      <button class="w3-btn w3-red">Decline</button>
                    </div>

                    </div>
            </div>
                
             <div style="align-content: center; font-family: Comic Sans; font-size:20px; font-weight: bold; text-align: center;">Let's expand your circle!</div>
            <div id="knowthem" style=" height: 50%; display: -webkit-box; -webkit-box-orient:horizontal; padding-bottom:5%;">
                <div id="knowthemsub">
                <div class="w3-card-4" style="width:40%; margin-left: 2%; padding-left: 2%;">

                <header class="w3-container w3-light-grey">
                  <h3>Abhijeet Kharat</h3>
                </header>

                <div class="w3-container">
                  <p>1 new friend request</p>
                  <hr>
                  <img src="Images/kitten.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:40%">
                  <p>CEO at Mighty Schools. Marketing and Advertising. Seeking a new job and new opportunities.</p><br>
                </div>

                <button class="w3-btn-block w3-dark-grey">+ Connect</button>
                

</div>
                    </div>

            </div>
             <!--Footer-->
    <footer class="footer-distributed">

			<div class="footer-left">

				<h3>Halfpace<span>...Coz everything can't be learned on the Internet!</span></h3>

				<p class="footer-links">
					<a href="#">About us</a>
					Â·
					<a href="#">FAQ</a>
					Â·
					<a href="#">Contact</a>
				</p>
                                
                                <div class="footer-icons">
                                    <p style='color:white;'>Share us on</p>
                                    <a href="#" style="background:url('Images/fb.png')0 100% no-repeat;"></a>
					<a href="#" style="background:url('Images/twit.jpg')0 100% no-repeat;"></a>
					<a href="#" style="background:url('Images/in.png')0 100% no-repeat;"></a>
					

				</div>

				<p class="footer-company-name">Halfpace Pvt. Ltd. &copy; 2016</p>

				

			</div>

			<div class="footer-right" style='margin-top:-12%;'>

                            <h4>Want to suggest a skill?<br>
                                Or anything else?<br></h4>

				<form action="#" method="post">

					<input type="text" name="email" placeholder="Email" />
					<textarea name="message" placeholder="Message"></textarea>
					<button>Send</button>

				</form>

			</div>

		</footer>
    <!--Footer ends here-->

        </div>
           
    </body>
</html>
