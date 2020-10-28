<?php
$name = $_POST['fname'];
$email = $_POST['email'];
$message = $_POST['subject'];
$formcontent=" From: $name \n Message: $message";
$recipient = "dummyemail@domain.com";
$subject = "Alert";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='Contact_Us.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>