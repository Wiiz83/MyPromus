<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Model functions of the requests page */

require_once $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/db_connection.inc.php';	//Database connections
require $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/getUserHelper.inc.php';
require $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/id_parser.inc.php';
require $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/getEventHelper.inc.php';	

function getFriendRequests($userId){
	global $link;

	$sql="SELECT * FROM requests WHERE friend_id='$userId'";
	$result=mysqli_query($link,$sql) or die(mysqli_error($link));

	while($requestInfo=mysqli_fetch_assoc($result)){

		$user=getUser($requestInfo['user_id']);
		$username=$user->getUsername();
		//Image $image=$user->getImage()

		$requestFriend['$username']=$image;

	}

	if(isset($requestFriend)){
		return $requestFriend;
	}else{
		return null;		//If there is any event return null,need to be handled 
	}

}

function acceptFriend($userId,$friendName){
	global $link;

	$friendId=getUserId($friendName);
	require $_SERVER['DOCUMENT_ROOT'].'/myPromus/model/friends_model.php';

	$isDone=addFriend($userId,$friendId);

	if($isDone){
		discardRequest($userId,$friendId);
		return true;
	}else{
		return false;
	}

}


function getEventRequests($userId){
	global $link;

	$sql="SELECT * FROM requests WHERE friend_id='$userId'";
	$result=mysqli_query($link,$sql) or die(mysqli_error($link));

	while($requestInfo=mysqli_fetch_assoc($result)){
		
		$event=getEvent($requestInfo['event_id']);	//Get the event that you have been invited
		$friend=getUser($requestInfo['user_id']);  //Get the user that has invited you to the event
		$friendName=$friend['username'];
		$requestEvent['friendName']=$event;
	}

	if(isset($requestEvent)){
		return $requestEvent;
	}else{
		return null;		//If there is any event return null,need to be handled 
	}
}

//Function to accept an event invitation,the user will be added to the event assistant list
function acceptEvent($userId,$eventId){
	global $link;

	$sql="INSERT INTO event_friend (event_id,friend_id) VALUES ('$eventId','$userId')";
	$result=mysqli_query($link,$sql);
	discardRequest($userId,$friendId);


	
}





//Function to discard a friend request that userId have received
function discardFriendRequest($userId,$friendName){
	global $link;

	$friendId=getUserId($friendName);
	
	$sql="DELETE FROM friend_request WHERE user_id='$friendId' AND friend_id='$userId'";
	$result=mysqli_query($link,$sql);
}

//Function to discard a event request that userId have received
function discardEventRequest($userId,$eventId){
	global $link;

	$sql="DELETE FROM event_request WHERE friend_id='$userId' AND event_id='$eventId'";
	$result=mysqli_query($link,$sql);
}


?>