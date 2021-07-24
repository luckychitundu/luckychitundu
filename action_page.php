<?php
$name = $_POST['Name'];
$visitor_email = $_POST['Email'];
$message = $_POST['Message'];






$email_from = 'lchitundu9725@myasu.alasu.edu';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "User Email: $visitor_email.\n".
              "User Message: $message.\n";


$to = 'luckyconschitundu@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: indexc.html");



















?>