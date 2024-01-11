<?php 
//email
$to = "lecature@domain.com";
$subject = "PHP Tutorial";
$message = "This is a test email";
$from = "md.habiblimon94@gmail.com";

$headers = "From: $from";

$sendMail = mail($to, $subject, $message, $headers);

if($sendMail){
    echo "Mail Sent successfully";
}else{
    echo "Mail not sent";
}



?>