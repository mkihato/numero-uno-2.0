<?php
$name =$_POST['name'];
$visitor_email =$_POST['email'];
$model =$_POST['model']
$message =$_POST['message'];

$email_from ='info@logo.com';

$email_subject ='New form submission';

$email_body = "User name: $name.\n".
"User email: $visitor_email.\n".
"User message: $message.\n";

$to ='mlamaar9@gmail.com';

$headers ="from: $email_from\r\n";

$headers .="Reply-to: $visitor_email\r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");
?>