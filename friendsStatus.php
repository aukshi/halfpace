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
    $loggedUser=$_SESSION["loggedUser"];
    $requestedUser=$_GET["requested"];
    echo "<script type='text/javascript'>alert('In Accept '.$requestedUser)</script>";
    $acceptQuery="update friend_status set accepted=1,requested=0 where eid1='$requestedUser' AND eid2='$loggedUser'";
    mysqli_query($con,$acceptQuery);
    echo 'Successful';
    header('Location: ' . $_SERVER["HTTP_REFERER"] );
exit;
//    header("Refresh:1; url: javascript:history.back(-1)");
//    exit;
}

function decline(mysqli $con) {
   $loggedUser=$_SESSION["loggedUser"];
    $requestedUser=$_GET["requested"];
    echo "<script type='text/javascript'>alert('In Accept '.$requestedUser)</script>";
    $acceptQuery="update friend_status set accepted=0,requested=0 where eid1='$requestedUser' AND eid2='$loggedUser'";
    mysqli_query($con,$acceptQuery);
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
    echo 'Successful';
    header('Location: ' . $_SERVER["HTTP_REFERER"] );
exit;
}
?>