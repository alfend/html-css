<?php 
$to  = $_POST['email']; 

$subject = $_POST['title']; 

$message = $_POST['message'];

$headers  = "Content-type: text/html; charset=UTF-8 \r\n"; 
$headers .= "From: От кого письмо <from@example.com>\r\n"; 
$headers .= "Reply-To: reply-to@example.com\r\n"; 

mail($to, $subject, $message, $headers); 
sleep(5);
header("Location: http://html-css.im56.ru");

?>