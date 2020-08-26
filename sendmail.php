<?php

$data = $_POST;
$name = htmlspecialchars(urldecode($data["name"]));
$email = $data["email"];
$message = $data["message"];

$to = "janos.szabo@pixelzsoldos.hu";
$subject = $name." grafikust keres";
$headers = "MIME-Version: 1.0" . "\r\n" .
		   "Content-type: text/html; charset=UTF-8;" . "\r\n" .
		   "From: ".$name." <".$email.">" . "\r\n"; 

echo $headers;
echo $message;

echo mail($to, $subject, $message, $headers);

?>