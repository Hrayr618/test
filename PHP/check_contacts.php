<?php
session_start();

	unset($_SESSION['username']);
	unset($_SESSION['email']);
	unset($_SESSION['subject']);
	unset($_SESSION['password']);
	unset($_SESSION['male']);



	unset($_SESSION['error_username']);
	unset($_SESSION['error_email']);
	unset($_SESSION['error_subject']);
	unset($_SESSION['error_male']);

	unset($_SESSION['pass_email']);





function redirect(){
	header('Location: cite.php');
	exit;
}
	$name = trim($_POST['username']);
	$email = trim($_POST['email']);
	$subject = trim($_POST['password']);
	$message = trim($_POST['message']);
	$male = trim($_POST['male']);

	$_SESSION['username'] = $name;
	$_SESSION['email'] = $email;
	$_SESSION['password'] = $subject;
	$_SESSION['message'] = $message;
	$_SESSION['male'] = $male;


	if (strlen($name) <= 2 || strlen($name) >= 10) {
		$_SESSION['error_username'] = "uncorrect name";
		redirect();
	}else if(strlen($email) <= 4 || strpos($email, "@") == false){
		$_SESSION['error_email'] = "uncorrect email";
		redirect();
	}else if(strlen($subject) < 7 || strlen($subject) > 20){
		$_SESSION['error_subject'] = "password must be wright";
		redirect();
	}else if (isset($_POST['male']) == false) {
		$_SESSION['error_male'] = "choose one of these options";
		redirect();
	}
	else{
		$message = "soobshenie";
		$from = "isahakyan.2005w@mail.ru";
		$to = "isahakyan.2005w@mail.ru";
		$subjects = "=?utf-8?B?" . base64_encode("subject of message") . "?=";
		$headers = "From: $from\r\nReply-to: $from\r\nContent-type:text/plain; carset=utf-8\r\n";
		mail($to, $subjects, $headers, $message);
			$_SESSION['pass_email'] = "sent";
			redirect();		
	}
	
	


	$mysql = new mysqli("localhost", "root", "", "citedb");
	$mysql->query("SET NAMES 'utf8'");

	$query = "INSERT INTO message VALUES (NULL , :name, NOW())";
	$msg = $mysql->prepare($query);
	$msg->execute(['name' => $name, 'email' => $email]);

	if (strlen($name) <= 2 || strlen($name) >= 10) {
		$mysql = null;
	}else if (strlen($email) <= 4 || strpos($email, "@") == false) {
		$mysql = null;
	}else if (strlen($subject) < 7 || strlen($subject) > 20){
		$mysql = null;
	}else {
		$mysql;
	}

	$mysql->close(); 
?>