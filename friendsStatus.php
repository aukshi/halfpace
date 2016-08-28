<?php
include 'DB_Con.php';
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (isset($_GET['Acc'])) {
    
            accept($con);
    }
    else if (isset($_GET['Dec'])) {
    
        decline($con);
    }
    else if (isset($_GET['connect'])) {
    
        connect($con);
    }


function accept(mysqli $con) {
    $flist=$_SESSION['flist'];
    $rlist=$_SESSION['rlist'];
    $loggedUser=$_SESSION["loggedUser"];
    $requestedUser=$_GET["requested"];
    echo "<script type='text/javascript'>alert('In Accept '.$requestedUser)</script>";
    $acceptQuery="update friend_status set accepted=1,requested=0 where eid1='$requestedUser' AND eid2='$loggedUser'";
    mysqli_query($con,$acceptQuery);
    
    
    $_SESSION['flist'][]=$requestedUser;//to add currently accepted user into friends' list
    $_SESSION['rlist']=array_diff($rlist,$requestedUser);//To delete currently accepted user from requested list
    print_r($_SESSION['rlist']);
    //var_dump($_SESSION);
    //Enter the action in activity table
    $desc="You Accepted the friend request of $requestedUser";
    $description=mysql_real_escape_string($desc);
    $activityQuery="insert into activity (email_id,description,timestamp) values ('$loggedUser','$description',CURRENT_TIMESTAMP);";
    mysqli_query($con,$activityQuery);
    //////////////////////
    echo 'Successful';
    header('Location: ' . $_SERVER["HTTP_REFERER"] );
exit;
//    header("Refresh:1; url: javascript:history.back(-1)");
//    exit;
}

function decline(mysqli $con) {
    $flist=$_SESSION['flist'];
    $rlist=$_SESSION['rlist'];
    $loggedUser=$_SESSION["loggedUser"];
    $requestedUser=$_GET["requested"];
    echo "<script type='text/javascript'>alert('In Accept '.$requestedUser)</script>";
    $acceptQuery="update friend_status set accepted=0,requested=0 where eid1='$requestedUser' AND eid2='$loggedUser'";
    mysqli_query($con,$acceptQuery);
    $_SESSION['rlist']=array_diff($rlist,$requestedUser);//To delete declined user from requested list
    //Enter the action in activity table
    $desc="You declined the friend request of $requestedUser";
    $description=mysql_real_escape_string($desc);
    $activityQuery="insert into activity (email_id,description,timestamp) values ('$loggedUser','$description',CURRENT_TIMESTAMP);";
    mysqli_query($con,$activityQuery);
    ////////////////////////////////
    
    echo 'Successful';
    header('Location: ' . $_SERVER["HTTP_REFERER"] );
exit;
}
function connect(mysqli $con) {
   $loggedUser=$_SESSION["loggedUser"];
    $connect=$_GET["connect"];
    echo "<script type='text/javascript'>alert('In connect '.$connect)</script>";
    $acceptQuery="insert into friend_status values('$loggedUser','$connect',1,0)";
    mysqli_query($con,$acceptQuery);
    $_SESSION['rlist'][]=$connect;//to add currently requested user into requests' list
    print_r($_SESSION['rlist']);
    //Enter the action in activity table
    $desc="You sent friend request to $connect";
    $description=mysql_real_escape_string($desc);
    $activityQuery="insert into activity (email_id,description,timestamp) values ('$loggedUser','$description',CURRENT_TIMESTAMP);";
    mysqli_query($con,$activityQuery);
    ////////////////////////////////
    echo 'Successful';
    header('Location: ' . $_SERVER["HTTP_REFERER"] );
exit;
}
?>
