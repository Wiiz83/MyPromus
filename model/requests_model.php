<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Model functions of the requests page */

require $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/db_connection.inc.php';	//Database connections
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

function acceptFriend($username){
	global $link;

	$friendId=getUserId($username);

	//llamar al modelo de friends o que?? ya esta implementado

}


function getEventRequests($userId){
	global $link;

	$sql="SELECT * FROM requests WHERE friend_id='$userId'";
	$result=mysqli_query($link,$sql) or die(mysqli_error($link));

	while($requestInfo=mysqli_fetch_assoc($result)){
		
		$event=getEvent($requestInfo['event_id']);	//Get the event that you have been invited
		$friend=getUser($requestInfo['user_id']);  //Get the user that has invited you to the event
		$friendName=$friend['username'];
		$RequestEvent['friendName']=$event;
	}

	if(isset($requestEvent)){
		return $requestEvent;
	}else{
		return null;		//If there is any event return null,need to be handled 
	}
}


?>