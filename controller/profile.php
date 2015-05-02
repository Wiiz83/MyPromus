<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Controller of the profile where the user can upload a user profile image and set configuration */

include $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/session_checker.inc.php';
include $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/getUserHelper.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/myPromus/model/friends_model.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/myPromus/model/dashboard_model.php';

$userId=$_SESSION['userId'];


//If there is a POST request to upload an image profile charges the image loader and redirect again to 
//profile controller
$titlePage="My profile";

if(isset($_GET['userId'])){

	$userProfileId=$_GET['userId'];
	$user=getUser($userProfileId);
	

	if($userId==$userProfileId){		//Check if the user is the owner of the profile that's visiting
		$isAdmin=true;

		$events=getPastEvents($userId,6);
		
		include $_SERVER['DOCUMENT_ROOT'].'/myPromus/view/myprofile.php';
	
	}else{
		$isAdmin=false;
		$events=getPastEvents($userProfileId,6);
		$friends=getCommonFriends($userId,$userProfileId);
		$titlePage=$user->getUsername()."'s' Profile";
		

		include $_SERVER['DOCUMENT_ROOT'].'/myPromus/view/profile-friend.php';
	}

	

}else{

	$user=getUser($userId);
	include $_SERVER['DOCUMENT_ROOT'].'/myPromus/view/myprofile.php';
}

?>
