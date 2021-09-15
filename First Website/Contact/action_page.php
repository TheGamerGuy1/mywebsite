<?php
if(!empty($_POST["send"])) {
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$subject = $_POST["subject"];
	$content = $_POST["content"];

	$toEmail = "megekkotheone@gmail.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(isset($toEmail, $subject, $content, $mailHeaders)) {
	  echo "Jou bericht en informatie is succesvol ontvangen.";
	    $type = "success";
		
	}
}
require_once "contact-view.php";
?>