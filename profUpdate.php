<?php
include 'DB_Con.php';
session_start();
$status=$_POST["status"];
$mno=$_POST["mno"];
$password=$_POST["password"];
if(!empty($_POST["privacyStat"])){
$privacy=$_POST["privacyStat"];}
$loggedUser=$_SESSION["loggedUser"];
if((!empty($status))&&(!empty($mno))&&(!empty($password))){
$queryProfile="update profile set status='$status',mobileNo='$mno',privacyStatus='$privacy' where email_id='$loggedUser'";
mysqli_query($con, $queryProfile);
if(!empty($password))
{
    $queryuser="update users set password='$password' where email_id='$loggedUser'";
    mysqli_query($con, $queryuser);
}
header( "refresh:0; url=profile.php" ); 
echo "<script type='text/javascript'>alert('Profile updated successfully')</script>";
}
header( "refresh:0; url=profile.php" );
?>
