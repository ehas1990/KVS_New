<?php
// ini_set( 'display_errors', 1 );
// error_reporting( E_ALL );
error_reporting(E_ERROR | E_PARSE);
$name = $_POST['name'];
$email= $_POST['email'];
$phone = $_POST['phone'];
$sub1= $_POST['sub1'];
$message= $_POST['message'];
$subject="KERALA VISWAKARMA SABHA";
$to = "info@keralaviswakarmasabha.com";  
// $to ="ehasalpha@gmail.com";

$txt ="Name : ". $name . "\r\n phone : " . $phone . "\r\n subject : " . $sub1 . "\r\n  message :" . $message;

$headers = "From:" . $email;
 
if(mail($to,$subject,$txt,$headers)) {
 
echo "<h1>Sent Successfully! Thank you ".$name."</h1>";
} else {
    echo "The email message was not sent.";
}
require_once "contact.html";
?>
