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

<link rel="stylesheet" href=
      "css/style.css"/>
<link rel="stylesheet" href=
      "css/style3.css"/>
<link rel="stylesheet" href=
      "css/button.css"/>

  <script type="text/javascript" src="js/notifications.js"></script>
  <link rel="stylesheet" href="css/testingMenubar.css">
   <link rel="stylesheet" href="css/footer-distributed-with-contact-form.css">
  <link rel="shortcut icon" href="kitten.jpg">
  <link rel="icon" href="kitten.jpg">

            
            <script>
            function myFormSubmit(){
                $(".container").hide();
                $(".container").style.display="none";
                $('.container').css("z-index","0");
            }
            
            function myUpdate(){
                $(".container").show();
                $("document").style.display="none";
                $(".container").style.display="block";
                $('.container').css("z-index","3");
              
            }
            </script>          
            
</head>

<body>
<!-- Menubar begins here-->
             <?php include('header.php'); ?>
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
          
         <button type="button" id="updateProfile" class="btn btn-blue" onclick="myUpdate()">Update profile</button></a>

    <div class="container w3-dropdown-content" data-role="popup" id="myPopup" style="display: none; margin-top: -33%; margin-left: 30%;" >
<div class="main">
     
<h2>Update Profile: </h2>
<form id="Register" method="post" name="update" action="profUpdate.php">
 <br/>   
 <!--<label class="required">Username :</label>
<input type="text" name="username" id="reg_username"/>
-->
<label class="required" for="status">Status</label>
<input type="text" id="status" name="status" placeholder="Status"/>
<br>
<label class="required" for="mno">Mobile Number:</label>
<input type="text" name="mno" id="mno" placeholder="0123456789"/>
<br>
<label class="required">Enter Password :</label>
<input type="password" name="password" id="reg_password"/>
<br>
<label class="required">Confirm Password :</label>
<input type="password" name="password" id="reg_confirm_password"/>
<br>
<label class="required" for="privacyStat">Privacy Status</label><br> <input type="radio" name="privacyStat" value="Public"> Public<br> <input type="radio" name="privacyStat" value="Private"> Private
            </p>
  
            <button type="submit" id="submit" class="btn btn-blue" onclick="myFormSubmit()">Update</button>
</form>
<!--<span><b >Note : </b> <b class="note"> * </b> fields are compulsory <br/></span>-->

</div>
</div>
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
        <?php 
        
        $activityQuery="select * from activity order by timestamp asc";
        $activities=  mysqli_query($con, $activityQuery);
        $Query="insert into tablename (email_id,timestamp) values ('1234',CURRENT_TIMESTAMP);";
        mysqli_query($con, $Query);
                                foreach ($activities as $activity)//Fiends of the value in 2nd column
                                {
        
        ?>
                                    <p class="activity"><?php echo $activity["activity_type"] ?></p>
        <?php 
                                }
        ?>
        
<!--        <p class="activity">Activity 2</p>
        
        <p class="activity">Activity 3</p>
        
        <p class="activity">Activity 4</p>
        
        <p class="activity">Activity 5</p>-->
      </section>
      
      <section id="friends" class="hidden">
        <p>Friends list:</p>
        
        <ul id="friendslist" class="clearfix">
            <!--Code for displaying friends-->
            <?php 
                    $profileQueryRequested="select * from friend_status where eid1='$loggedUser' AND accepted=1";
                        $profileResultsReq=  mysqli_query($con, $profileQueryRequested);
                        $profileQueryAccepted="select * from friend_status where eid2='$loggedUser' AND accepted=1";
                        $profileResultsAcc=  mysqli_query($con, $profileQueryAccepted);
                        
                    //loop
                    foreach ($profileResultsReq as $rowReq){
                            ?>
            <li><a href="friendsprof.php?redirectName=<?php echo $rowReq["eid2"] ?>"><img src="Images/avatar.png" width="22" height="22"><?php echo $rowReq["eid2"] ?></a></li>
            <?php 
                    }
            ?>
          <?php 
                    //loop
                    foreach ($profileResultsAcc as $rowAcc){
                          ?>
                    <li><a href="friendsprof.php?redirectName=<?php echo $rowAcc["eid1"] ?>" method="post"><img src="Images/avatar.png" width="22" height="22"><?php echo $rowAcc["eid1"] ?></a></li>
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
    <?php include('footer.php'); ?>
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
