<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Controller of the event page,this page just can be loaded with a GET parameter with the id of the event */

include $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/session_checker.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/myPromus/model/event_model.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/getEventHelper.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/myPromus/model/comment_model.php';

session_start();

if(isset($_GET['eventId'])){
	$userId=$_SESSION['userId'];
	$eventId=$_GET['eventId'];



	$isAdmin=checkAdmin($userId,$eventId);	//true if is admin and false if not
	$event=getEvent($eventId);		//Event object

	if($event==null){
		$output_error="Ups! this event doesn't exists";
		include $_SERVER['DOCUMENT_ROOT'].'/myPromus/view/error_output.php';
		exit();
	}

	$comments=loadComments($eventId);	//Array of Comments

	$participants=getParticipants($eventId);	//Array of users


	include $_SERVER['DOCUMENT_ROOT'].'/myPromus/view/event.php';

}else{
	$output_error="You have to specify an event Id";
	include $_SERVER['DOCUMENT_ROOT'].'/myPromus/view/error_output.php';
}


?>