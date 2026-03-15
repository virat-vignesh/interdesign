<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$service = $_POST['service'];
$message = $_POST['message'];

$to = "viratvignesh096@gmail.com";   // change to your email
$subject = "New Curtain Service Inquiry";

$body = "Name: $name\n";
$body .= "Phone: $phone\n";
$body .= "Email: $email\n";
$body .= "Service: $service\n";
$body .= "Message: $message\n";

$headers = "From: $email";

if(mail($to,$subject,$body,$headers)){
    echo "Form submitted successfully";
}else{
    echo "Mail sending failed";
}

}

?>