<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Controller to manage the user settings */

include $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/session_checker.inc.php';

$userId=$_SESSION['userId'];

if(isset($_POST['submit'])){

	if(isset($_POST['newPassword'])){
		$newPassword=$_POST['newPassword'];
		setPassword($userId,$newPassword);
	}

	if(isset($_POST['newEmail'])){
		$newEmail=$_POST['newEmail'];
		setEmail($userId,$newEmail);
	}

	if(isset($_POST['newCountry'])){
		$newCountry=$_POST['newCountry'];
		setCountry($userId,$newCountry);
	}

	if(isset($_POST['newCity'])){
		$newCity=$_POST['newCity'];
		setCity($userId,$newCity);
	}

	//TO DO Upload image

	header("Location: ../controller/profile.php");

else{

	include $_SERVER['DOCUMENT_ROOT'].'/myPromus/view/settings.php';	
} 

?>