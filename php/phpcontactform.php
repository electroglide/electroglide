<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['comments'];
$formcontent="From: $name \n Message: $message";
$recipient = "info@electroglide.co.uk";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>