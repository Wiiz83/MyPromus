<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Controller to create an event */


session_start();
include $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/session_checker.inc.php'; //Check if the session has expired,in that case redirect to the main page
require $_SERVER['DOCUMENT_ROOT'].'/myPromus/model/event_model.php';
include $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/validatorHelper.php';


//Validate and check that the data is correct and not null TODO


//Code to DO.................


//The data should be validated in the client side

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



function parseFriends($friends){
	$friendsArray=split(",",$friends);
	return $friendsArray;
}

?>