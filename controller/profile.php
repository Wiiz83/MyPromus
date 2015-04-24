<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Controller of the profile where the user can upload a user profile image and set configuration */

include $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/session_checker.inc.php';
include $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/getUserHelper.inc.php';

$userId=$_SESSION['userId'];

if(isset($_POST['upload'])){
	include $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/imageUploader.inc.php';	
}else{

	$user=getUser($userId);
	include $_SERVER['DOCUMENT_ROOT'].'/myPromus/view/profile.php';
}

?>
