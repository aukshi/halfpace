<?php

include_once 'DB_Con.php';
    //$index=1;
    //loop
    //echo 'Password is '.$Password;
    
//    function SignIn() 
//    { 
//        session_start(); //starting the session for user profile page 

$email=filter_input(INPUT_POST, 'email');
$password=filter_input(INPUT_POST,'pass');
$fname=filter_input(INPUT_POST, 'fname');
$lname=filter_input(INPUT_POST, 'lname');
$phone=filter_input(INPUT_POST, 'phone');
$pic=filter_input(INPUT_POST, 'pic');
$country=filter_input(INPUT_POST, 'country');
$state=filter_input(INPUT_POST, 'states');
$city=filter_input(INPUT_POST, 'cities');
echo 'Email: '.$email;
$flag=0;
$query="Insert into users values ('$email','$fname $lname','$password')";
mysqli_query($con, $query);
//$queryProfile="update profile set status='hello' where email_id=2";

try{
$queryProfile="Insert into profile (email_id,mobileNo,picture,country,state,city) VALUES "
        . "('$email','$phone','$pic','$country','$state','$city')";
mysqli_query($con, $queryProfile);

echo 'Registered Successfully :) <br> Redirecting to login Page ';
header( "refresh:3; url=try.php" ); 
}
 catch (Exception $e)
 {
     echo 'exception: '.$e->getMessage();
 }
//
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