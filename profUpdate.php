<?php
include 'DB_Con.php';
session_start();
$status=$_POST["status"];
$mno=$_POST["mno"];
$password=$_POST["password"];
$privacy=$_POST["privacyStat"];
$loggedUser=$_SESSION["loggedUser"];
$queryProfile="update profile set status='$status',mobileNo='$mno',privacyStatus='$privacy' where email_id='$loggedUser'";
mysqli_query($con, $queryProfile);
echo '1';
$queryuser="update users set password='$password' where email_id='$loggedUser'";
mysqli_query($con, $queryuser);
echo '2';
?>
