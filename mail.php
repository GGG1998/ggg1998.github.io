<?php

if(isset($_POST['mail']) || isset($_POST['fullname']) || isset($_POST['phone'])) {
	$email=$_POST['mail'];
	$fullname=$_POST['fullname'];
	$phone=$_POST['phone'];
	$content=$_POST['content'];
	
	mail($email,$fullname."-fireart", $message);
	echo "Sprawdz poczte";
}
echo "Jakis problem";

?>