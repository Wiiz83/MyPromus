<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Controller of the profile where the user can upload a user profile image and set configuration */

include $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/session_checker.inc.php';
include $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/getUserHelper.inc.php';

$userId=$_SESSION['userId'];


//If there is a POST request to upload an image profile charges the image loader and redirect again to 
//profile controller
$titlePage="Profile";

if(isset($_POST['upload'])){
	include $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/imageUploader.inc.php';	

}else if(isset($_GET['userId'])){

	$userId=$_GET['userId'];
	$user=getUser($userId);
	include $_SERVER['DOCUMENT_ROOT'].'/myPromus/view/profile.php';

}else{

	$user=getUser($userId);
	include $_SERVER['DOCUMENT_ROOT'].'/myPromus/view/profile.php';
}

?>
