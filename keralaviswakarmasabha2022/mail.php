<?php
// ini_set( 'display_errors', 1 );
// error_reporting( E_ALL );
error_reporting(E_ERROR | E_PARSE);
$name = $_POST['name'];
$email= $_POST['email'];
$phone = $_POST['phone'];
$sub= $_POST['sub'];
$message= $_POST['message'];
$subject="KERALA VISWAKARMA SABHA";
$to = "info@keralaviswakarmasabha.com";  

$txt ="Name : ". $name . "\r\n phone : " . $phone . "\r\n   message :" . $message;
$subject= $subject;
$headers = "From:" . $email;
 
if(mail($to,$sub,$txt,$headers)) {
 
echo "<h1>Sent Successfully! Thank you ".$name.", We will contact you shortly!</h1>";
} else {
    echo "The email message was not sent.";
}

?>
