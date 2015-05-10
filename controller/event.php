<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Controller of the event page,this page just can be loaded with a GET parameter with the id of the event */

include $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/session_checker.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/myPromus/model/event_model.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/getEventHelper.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/myPromus/model/comment_model.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/getUserHelper.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/myPromus/model/event_model.php';

$titlePage="Event";
	
if(isset($_POST['comment'])){


	$userId=$_SESSION['userId'];
	$comment=$_POST['comment'];
	$eventId=$_POST['eventId'];


	createComment($userId,$eventId,$comment);
	header("Location: ../controller/event.php?eventId=$eventId");
	


}else if(isset($_POST['friendId'])){	//AJAX request to send an event request to a user

	$friendId=$_POST['friendId'];
	$eventId=$_SESSION['currentEvent'];
	$userId=$_SESSION['userId'];
	$isDone=sendEventRequest($userId,$friendId,$eventId);

	if($isDone){
		echo "Done";
	}else{
		echo "Already sent";
	}


}else if(isset($_POST['songName'])){
	
	$song=$_POST['songName'];
	$result=searchSong($song);
	echo "$result";


}else if(isset($_POST['songId'])){

	
	$songId=$_POST['songId'];
	$eventId=$_SESSION['currentEvent'];
	$playlistId=getPlaylistId($eventId);
	addSong($playlistId,$songId);
	echo "Done";

}else if(isset($_GET['eventId'])){

	$userId=$_SESSION['userId'];
	$eventId=$_GET['eventId'];



	$isAdmin=checkAdmin($userId,$eventId);	//true if is admin and false if not
	$existsPlaylist=checkPlaylist($eventId);  //true if exists a playlist,then hide the playlist creation in the view

	$event=getEvent($eventId);		//Event object

	if($event==null){
		$output_error="Ups! this event doesn't exists";
		include $_SERVER['DOCUMENT_ROOT'].'/myPromus/view/error_output.php';
		exit();
	}
	$adminUser=getUser($event->getIdAdmin());
	$adminName=$adminUser->getUsername();
	$_SESSION['currentEvent']=$event->getIdEvent();

	$comments=loadComments($eventId);	//Array of Comments
	$playlistId=getPlaylistId($eventId);
	$spotifyUserId=getSpotifyUserId($eventId);
	$participants=getParticipants($eventId);	//Array of users
	$friendsToInvite=getPossibleParticipants($userId,$eventId);

	
	include $_SERVER['DOCUMENT_ROOT'].'/myPromus/view/event.php';


}else{
	$output_error="You have to specify an event Id";
	include $_SERVER['DOCUMENT_ROOT'].'/myPromus/view/error_output.php';
}


?>