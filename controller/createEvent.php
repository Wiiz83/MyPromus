<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Controller to create an event */


session_start();
include $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/session_checker.inc.php'; //Check if the session has expired,in that case redirect to the main page
require $_SERVER['DOCUMENT_ROOT'].'/myPromus/model/event_model.php';
include $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/validatorHelper.php';
require $_SERVER['DOCUMENT_ROOT'].'/myPromus/model/friends_model.php';


if(!isset($_POST['submit'])){

	$userId=$_SESSION['userId'];
	$friends=getFriends($userId);  //$friends will be an array of Users
	include $_SERVER['DOCUMENT_ROOT'].'/myPromus/view/create_event.php';	//include view of the form



}else{



	//Variables from the form
	$userId=$_SESSION['userId'];
	$name=sanitizeInput($_POST['name']);
	$date=sanitizeInput($_POST['date']);
	$place=sanitizeInput($_POST['place']);
	$description=sanitizeInput($_POST['description']);
	$friends=sanitizeInput($_POST['friends']);
	$friends=parseFriends($friends);


	if(createEvent($userId,$name,$date,$place,$description,$friends)){
		header("Location: event_creation_succesful.html.php");
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