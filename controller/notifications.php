<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Controller of the requests page */

include $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/session_checker.inc.php'; //Check if the session has expired,in that case redirect to the main page
include $_SERVER['DOCUMENT_ROOT'].'/myPromus/model/requests_model.php';

$titlePage="Notifications";
$userId=$_SESSION['userId'];



if(isset($_POST['friendId']) && isset($_POST['decline'])){  //Discard a friend request and return a string to the AJAX function

	$friendId=$_POST['friendId'];
	discardFriendRequest($userId,$friendId);
	echo "Declined";



}else if(isset($_POST['friendId']) && isset($_POST['request'])){	//Send a friend request and return a string to the AJAX function

	$friendId=$_POST['friendId'];
	$isDone=sendFriendRequest($userId,$friendId);
	if($isDone){
	echo "Done";
	}else{
		echo "Already sent";
	}


}else if(isset($_POST['friendId'])){	//Accept friend request and return a string to the AJAX function
	$friendId=$_POST['friendId'];
	
	$isDone=acceptFriend($userId,$friendId);  

	

	if($isDone){
		echo "Friend added";
	}else{
		echo "error adding friend";
	}


}else if( isset($_POST['eventId']) && isset($_POST['decline'])){  ////Decline a request and return a string to the AJAX function

	$eventId=$_POST['eventId'];
	discardEventRequest($userId,$eventId);

	echo "Declined";



}else if(isset($_POST['eventId'])){		//Accept an event request and return a string to the AJAX function

	$eventId=$_POST['eventId'];
	acceptEvent($userId,$eventId);
	echo "Done";

}else{


$friendRequests=getFriendRequests($userId); //array of Users
$eventRequests=getEventRequests($userId);




include $_SERVER['DOCUMENT_ROOT'].'/myPromus/view/notification.php';
}

?>