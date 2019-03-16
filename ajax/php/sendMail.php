<?php
	
	header("Content-Type: text/plain");
	
	$contentMail = file_get_contents("../html/contentMail.html");
	$content = [
		"{{email}}"     => $_POST['email'],
		"{{telephone}}" => $_POST['telephone'],
		"{{message}}"   => $_POST['message'],
	];
	
	$headers = "From: " . strip_tags($_POST['email']) . "\r\n";
	$headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	
	$message = strtr($contentMail, $content);
	
	if(mail("thomastartas33@gmail.com", "[CONTACT] PercoCoffre", $message, $headers)) {
		echo json_encode([
			"text" => "Mail Envoyé !"
		]);
	} else {
		echo json_encode([
			"text" => "Une erreur est survenu, réessayez !"
		]);
	}
	
	