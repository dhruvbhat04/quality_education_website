<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'dag05464@gmail.com';
$email_subject = 'New Form Submission';

$email_body = "User Name: $name\n".
              "User Email: $visitor_email\n".
              "Subject: $subject\n".
              "Message: $message\n";

$to = 'dhruvnakshatra4@gmail.com';

$headers = "From: $email_from\r\n";
$headers .= "Reply-To: $visitor_email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");
// exit();
?>
