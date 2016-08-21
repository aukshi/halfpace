<?php

include_once 'DB_Con.php';
    //$index=1;
    //loop
    //echo 'Password is '.$Password;
    
//    function SignIn() 
//    { 
//        session_start(); //starting the session for user profile page 
$username=filter_input(INPUT_POST, 'name');
$email=filter_input(INPUT_POST, 'email');
$password=filter_input(INPUT_POST,'password');
$flag=0;
$query="Insert into users values ('$email','$username','$password')";
$queryProfile="INSERT INTO `profile`(`email_id`) VALUES ('$email')";

mysqli_query($con, $query);
mysqli_query($con, $queryProfile);
echo 'Registered Successfully :) <br> Redirecting to login Page ';
header( "refresh:3; url=login.php" ); 
//                        if($flag==1)
//                        {
//                            header('Location: index.php');
//                        }
//                        else
//                        {
//                            
//                            echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
//                            header( "refresh:3; url=login.php" ); 
////                            
//                        }
?>