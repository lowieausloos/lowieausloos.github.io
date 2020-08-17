<?php $name = $_POST['voornaam'];
$email = $_POST['email'];
$message = $_POST['bericht'];
$formcontent="From: $name \n Message: $message";
$recipient = "photographywardrobe@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>