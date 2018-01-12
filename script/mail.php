<?php

if(isset($_POST['mail']) || isset($_POST['fullname']) || isset($_POST['phone']) || isset($_POST['content'])) {
	$email=$_POST['mail'];
	$fullname=$_POST['fullname'];
	$phone=$_POST['phone'];
	$content=$_POST['content'];

	if(strlen($email)==0) return false;
	if(strlen($fullname)==0) return false;
	if(strlen($phone)==0) return false;
	if(strlen($content)==0) return false;
	
	$message="Email od: ".$email;
	$message.="\nTelefon: ".$phone;
	$message.="\nZawartość: ".$content;
	
	mail("fireart@fireart.pl",$fullname."-fireart", $message);
	echo "OK";
	
}

?>