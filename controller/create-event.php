<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Controller to create an event */



include $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/session_checker.inc.php'; //Check if the session has expired,in that case redirect to the main page
require_once $_SERVER['DOCUMENT_ROOT'].'/myPromus/model/event_model.php';
include $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/validatorHelper.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/myPromus/model/friends_model.php';

$titlePage="Create event";

if(!isset($_POST['submit'])){

	$userId=$_SESSION['userId'];
	$friends=getFriends($userId);  //$friends will be an array of Users
	include $_SERVER['DOCUMENT_ROOT'].'/myPromus/view/create-event.php';	//include view of the form



}else{



	//Variables from the form
	$userId=$_SESSION['userId'];
	$name=sanitizeInput($_POST['name']);
	$date=sanitizeInput($_POST['date']);
	$place=sanitizeInput($_POST['place']);
	$description=sanitizeInput($_POST['description']);
	$friends=sanitizeInput($_POST['friends']);
	$friends=parseFriends($friends);
	$finalPath=null;	//Define to null the path to save the event image
	require_once $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/imageEventUploader.inc.php'; //upload the image and takes the final path from there

	$eventId=createEvent($userId,$name,$date,$place,$description,$friends,$finalPath);

	if($eventId!=false){
		header("Location: ../controller/event.php?eventId=$eventId");
	}else{
		$errorMessage="An error ocurred when trying to insert the user in the database";
		include $_SERVER['DOCUMENT_ROOT'].'/myPromus/view/error_output.php';
	}
}


function parseFriends($friends){
	$friendsArray=split(",",$friends);
	return $friendsArray;
}

?>