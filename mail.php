<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$from = "info@cardingguru.com";
$to = "$email = $_POST['email']";

$subject = "PHP Mail sending checking";
$message = "PHP Mail works fine.";
$headers = "From:" . $from;

mail($to,$subject,$message,$headers);

echo "Successfully sent";
echo "thank you";
?>
