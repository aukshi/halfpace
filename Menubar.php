<?php
include 'DB_Con.php';
?>
<html>
    <head>
            <title>Halfpace</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <meta name="HandheldFriendly" content="true">

              <link type="text/css" rel="stylesheet" href="css/home.css" media="screen" />

            <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>


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


            <script type="text/javascript" >
                $(document).ready(function()
                {
                $("#notificationLink").click(function()
                {
                $("#notificationContainer").fadeToggle(300);
                $("#notification_count").fadeOut("slow");
                return false;
                });

                //Document Click hiding the popup 
                $(document).click(function()
                {
                $("#notificationContainer").hide();
                });

                //Popup on click
                $("#notificationContainer").click(function()
                {
                e.stopPropagation();
                });

                });
            </script>

            <link rel="stylesheet" href="css/testingMenubar.css">
     </head>
     <body>
            <div id="header" class="header1" style="width: 100%; height:80px; background:#00cccc; margin:10px; ">
                        <div id="logo">Logo</div>
                        <div id="searcharea" class="header1"><input placeholder="search" type="text" id="searchbox"/></div>
                        <div  id="profilearea" class="header1" ><a href="profile_1.html"><img class="imageCircle" src="Images/kitten.jpg" alt="Profile" width="100" height="100"></a></div>

                        <ul id="nav">
                        <li><a href="#">Settings</a></li>
                        <li><a href="#">Requirements</a></li>
                        <li><a href="#">Skills</a></li>
                        <li id="notification_li">

                            <span id="notification_count">3</span>
                            <a href="#" id="notificationLink">Notifications</a>

                            <div id="notificationContainer">
                            <div id="notificationTitle">Notifications</div>
                            <div id="notificationsBody" class="notifications"></div>
                            <div id="notificationFooter"><a href="#">See All</a></div>
                            </div>

                        </li>
                        <li id="friends_li"><a href="#">Friend Requests</a></li>
                        </ul>

            </div>

            <div id="centerbody">
                <div id="leftboxes">
                    <div style="" width="100%" height="100%">
                        
                    </div>
                    <div id="trending">
                        <img src="images/trending.png" width="50%" height="25%" style="margin: auto"/>
                        <br><b>Trending</b><br><br>
                        
<!--                        <B class="tendsOnHover">1.#Dancing</B><br><br>
                        <b class="tendsOnHover">2.#Dancing</b><br><br>
                        <b class="tendsOnHover">3.#Dancing</b><br><br>
                        <b class="tendsOnHover">4.#Dancing</b><br><br>
                        <b class="tendsOnHover">5.#Dancing</b><br><br>
                        <b class="tendsOnHover">6.#Dancing</b><br><br>
                        <b class="tendsOnHover">7. zhfcbkilkdihgvdhfbvjgdxbvujrbkudfgvbkuriwrpouwpeouwpppppppjjjfffffldkeiirkk kkkkkkkkkkk</b><br><br>
                        <b class="tendsOnHover">8.#Dancing</b><br><br>
                        <b class="tendsOnHover">9.#Dancing</b><br><br>
                        <b class="tendsOnHover">10.#Dancing</b><br><br>-->
                        <?php
                        //mysqli_query($con,"select * from trends order by count desc");
                    $query="select * from trends order by count desc";
                    $results=  mysqli_query($con, $query);
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
                        
                    </div><!-- End of Trending-->
                    
                    <div id="ad1">Adv1</div>
                </div>

                <div id='feed'>
                <div class='layer1'>
                    <?php $query="select * from skillsstatus "
                                     . "where accepted=1 AND requested=1";
                    $results=  mysqli_query($con, $query);
                    $id=1;
                    //loop
                    foreach ($results as $user){
                        $userAccepted=$user["eid2"];

                            ?>
                    <br>
                    <div class='heading' id='hide'>
                             <label class='name'></label>
        
                         <label class='hardcontent'> <?php echo $userAccepted; ?> accepted your request for</label>
                         <label class='name'> <?php echo $user["requestedSkill"] ?></label>
                    </div>
                    <div class='content' id=''<?php $id;?> >
                        <table>
                        <tr><td><div class="" style='width: 100px; height: 100px'><img src='Images//kitten.jpg' alt='Profile' width='100' height='100'></div>
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
                    $id=1;
                    //loop
                    foreach ($results as $user){
                        $userAccepted=$user["user"];

                            ?>
                    <br>
                    <div class='heading' id='hide'>
                             <label class='name'></label>
        
                         <label class='hardcontent'> <?php echo $userAccepted; ?> Has posted...</label>
                                         <!--<label class='name'> <?//php echo $user["requestedSkill"] ?></label>-->
                    </div>
                    <div class='content' id=''<?php $id;?> >
                 
                        <table>
                        <tr><td><div style='width: 100px; height: 100px'><img src='Images//kitten.jpg' alt='Profile' width='100' height='100'></div>
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
                    <div id="endorsements">Endorsements</div>

                    <div id="ad2">Adv2</div>
                    </div>

            </div>
    </body>
</html>
