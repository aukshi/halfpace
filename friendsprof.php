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
                $(".container").style.display="popup";
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
            $currentUser=$_GET["redirectName"];
            $usersQuery="select * from profile where email_id='$currentUser'";
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
          <li><a href="friendsStatus.php?connect=<?php echo $currentUser ?>"><button id="frndrq" class="w3-btn " style="float: right" >Send Request</button></a></li>
          
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
                    $profileQueryRequested="select * from friend_status where eid1='$currentUser'";
                        $profileResultsReq=  mysqli_query($con, $profileQueryRequested);
                        $profileQueryAccepted="select * from friend_status where eid2='$currentUser'";
                        $profileResultsAcc=  mysqli_query($con, $profileQueryAccepted);
                        
                    //loop for displaying the friends who sent friend requests
                    foreach ($profileResultsReq as $rowReq){
                        if($rowReq["eid2"]==$_SESSION["loggedUser"]){
                            ?>
            <li><a href="profile.php"><img src="Images/avatar.png" width="22" height="22"><?php echo $rowReq["eid2"] ?></a></li>
            <?php 
                        }
                        else {
            ?>
            <li><a href="friendsprof.php?redirectName=<?php echo $rowReq["eid2"] ?>"><img src="Images/avatar.png" width="22" height="22"><?php echo $rowReq["eid2"] ?></a></li>
            <?php 
                        }
            
                    }
            ?>
          <?php 
                    //loop
                    foreach ($profileResultsAcc as $rowAcc){
                        if($rowReq["eid2"]==$_SESSION["loggedUser"]){
                            ?>
            <li><a href="profile.php"><img src="Images/avatar.png" width="22" height="22"><?php echo $rowReq["eid2"] ?></a></li>
            <?php 
                        }
                        else {
            
                          ?>
                    <li><a href="friendsprof.php?redirectName=<?php echo $rowAcc["eid1"] ?>" method="post"><img src="Images/avatar.png" width="22" height="22"><?php echo $rowAcc["eid1"] ?></a></li>
            <?php 
                    }
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
