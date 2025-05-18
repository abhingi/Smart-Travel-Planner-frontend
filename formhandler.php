<?php
$name = $_POST[''];
$visitor_email = $_POST[''];
$message = $_POST[''];


$email_from = 'codesquad@gmail.com';

$email_subject = 'New Form Submission';
$email_body= "User Name: $name.\n".
             "User Email: $visitor_email.\n".
             "Subject: $subject.\n".
             "User Message: $message.\n";
$to = 'nabhi2265@gmail.com';

$headers = "from : $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>

