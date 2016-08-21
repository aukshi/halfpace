<?php
$To = 'ajinkyagurav21695@gmail.com';
$Subject = 'Send Email';
$Message = 'This example demonstrates how you can send plain text email with PHP';
$Headers = "From: sender@yourdomain.com \r\n" .
"Reply-To: sender@yourdomain.com \r\n" .
"Content-type: text/html; charset=UTF-8 \r\n";
  
mail($To, $Subject, $Message, $Headers);
?>