<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Controller where will be displayed a sticky form and will update the data of the user */

include $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/session_checker.inc.php';
include $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/getUserHelper.inc.php';
include $_SERVER['DOCUMENT_ROOT'].'/myPromus/model/settings.php';

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

	if(isset($_FILES['userfile'])){
		
		include $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/imageUploader.inc.php';
	}

	header("Location: ../controller/profile.php");

}else{

	$user=getUser($userId);
	include $_SERVER['DOCUMENT_ROOT'].'/myPromus/view/update-profile.php';

}

?>