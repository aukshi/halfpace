<?php
    include_once 'DB_Con.php';
    session_start();
    $query="select * from users";
    $results=  mysqli_query($con, $query);
    //$index=1;
    //loop
    //echo 'Password is '.$Password;
    
//    function SignIn() 
//    { 
//        session_start(); //starting the session for user profile page 
$username=filter_input(INPUT_POST, 'username');
$password=filter_input(INPUT_POST,'password');
$flag=0;

foreach ($results as $user){
                                if( $user["email_id"]==$username AND  $user["password"]==$password)
                                {

                                    $flag=1;
                                }
                        }
                        if($flag==1)
                        {
                            $_SESSION["loggedUser"] = $username;
                            $_SESSION["loggedpUserPassword"] = $password;
                            $_SESSION["logged_in"]=true;
                            header('Location: home.php');
                        }
                        else
                        {
                            
                            echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
                            header( "refresh:3; url=login.php" ); 
//                            
                        }


//    if(!empty($username)) { 
//        
//        $query = mysql_query("SELECT * FROM users where email_id = $username"
//                . " AND password = $password") ; 
//        echo 'Hiiiiiiiiiiiiiiiii';
//        $row = mysql_fetch_array($query) or die("<br><br>".mysql_error());
//        echo 'Hiiiiiiiiiiiiiiiii1';
//        
//        if(!empty($row['email_id']) AND !empty($row['password'])) 
//            { 
//                $_SESSION['userName'] = $row['pass']; 
//                echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE..."; 
//                header('Location: index.php');
//                
//            } 
//        else 
//            { 
//                echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; 
//                
//            } 
//            
//    } 
    
//    } 
//    if(!empty(isset(filter_input(INPUT_POST, 'submit')))) 
//    { 
//        SignIn();  
//    }


    
    
                
                

?>