
<!--
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */-->

<!doctype html>
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
            <?php include('header.php'); ?>
          <!-- Menubar ends here-->
         
    
    <div id="superWrapper" style="margin-top: 10%; width:100%;">
  <div id="w" style=" width: 65%; margin-left:2%;">
    <div id="content" class="clearfix">
        <h1 style="font-family: Comic Sans;">Profile</h1>
        <div id="userphoto"><img src="Images/kitten.jpg" alt="default avatar" width="300" height="300"></div>
      <div id="profilespecs">
      <nav id="profiletabs">
        <ul class="clearfix">
          <li><a href="#bio" class="sel">Bio</a></li>
          <li><a href="#activity">Activity</a></li>
          <li><a href="#friends">Friends</a></li>
          <li><button id="frndrq" class="w3-btn " style="float: right" >Send Request</button>
           </ul>
      </nav>
          </div>
      
     <section id="Bio" >
       
         <p class="setting"><span>Status  </span>If you gotta dream then you gotta protect it.</p>
       
        
        <p class="setting"><span>Address </span>xyz</p>
        
        
        <p class="setting"><span>Profile Status </span> Public</p>
       
        
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
          <li><a href="#"><img src="Images/avatar.png" width="22" height="22"> Username</a></li>
          <li><a href="#"><img src="Images/avatar.png" width="22" height="22"> SomeGuy123</a></li>
          <li><a href="#"><img src="Images/avatar.png" width="22" height="22"> PurpleGiraffe</a></li>
        </ul>
      </section>
      
      
    </div><!-- @end #content -->
   
  </div><!-- @end #w -->
   <div id="w2" style=" width: 30%; float:right; margin-left:2%;">
    <div id="content2" class="clearfix">
        <h1 style="font-family: Comic Sans;">Skillset</h1>
     
        <!--<section id="Skills" class="hidden">-->
       
       <div  style="overflow-y: auto;border:1px;">
          <div class="w3-card w3-cyan w3-center">
              <h4>Driving</h4><br>
              
   
<link rel="stylesheet" href="style.css" />
<form id="ratingsForm">
	<div class="stars">
		<input type="radio" name="star" class="star-1" id="star-1" />
		<label class="star-1" for="star-1">1</label>
		<input type="radio" name="star" class="star-2" id="star-2" />
		<label class="star-2" for="star-2">2</label>
		<input type="radio" name="star" class="star-3" id="star-3" />
		<label class="star-3" for="star-3">3</label>
		<input type="radio" name="star" class="star-4" id="star-4" />
		<label class="star-4" for="star-4">4</label>
		<input type="radio" name="star" class="star-5" id="star-5" />
		<label class="star-5" for="star-5">5</label>
		<span></span>
	</div>
  
</form>

              
              
              
                    <button class="w3-btn">Send Request</button>
                    </div>
        
       
       </div>
<!--      </section>-->
      
        <!--<section id="Requirements" class="hidden" >-->
        <!--<p>This is requirements section:</p>-->
        
      <!--</section>-->
      
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



