<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Controller of the friends page */

include $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/session_checker.inc.php'; //Check if the session has expired,in that case redirect to the main page
include $_SERVER['DOCUMENT_ROOT'].'/myPromus/model/friends_model.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/myPromus/classes/user.class.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/getUserHelper.inc.php';

$titlePage="Friends";
$userId=$_SESSION['userId'];

if(isset($_POST['friendId'])){
	
	
	$friendId=$_POST['friendId'];
	$isDone=deleteFriend($userId,$friendId);
	if($isDone){
		echo "Friend deleted";
	}else{
		echo "Error deleting";
	}
	
}else{



$friends=getFriends($userId);	//Array of Users

$user=getUser($userId);  //get the User
$city=$user->getCity();	 //get the city of the user
$cityFriends=getCityFriends($userId,$city);	//Array of Users

$country=$user->getCountry();
$countryFriends=getCountryFriends($userId,$country);


include $_SERVER['DOCUMENT_ROOT'].'/myPromus/view/friends.php';
}
?>