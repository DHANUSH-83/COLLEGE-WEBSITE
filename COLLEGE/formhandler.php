<?php
$name =$_POST['Name'];
$visitor_email =$_POST['email'];
$subject =$_POST['Subject'];
$message=$_POST['Message'];

$email_from ='info@yourwebsite.com';
$email_Subject ='New From Submission';

$email_body = "User Name:$name.\n".
              "User Email:$visitor_email.\n".
              "Subject:$Subject.\n".
              "User message:$Message.\n".

$to ='received email.com';

$headers ="Form: $email_from \r\n";

$headers .="Replay-To:$visitor_email \r\n "

mail($to,$email_Subject,$email_body,$headers);
header("location:contact.html");

?>