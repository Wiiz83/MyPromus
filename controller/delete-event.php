<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Controller to delete an event */

include $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/session_checker.inc.php'; //Check if the session has expired,in that case redirect to the main page
require $_SERVER['DOCUMENT_ROOT'].'/myPromus/model/event_model.php';

//Starts session and gets username
$userId=$_SESSION['userId'];
$eventId=$_POST['eventId'];


if(deleteEvent($eventId,$userId)){
	header("Location: dashboard.php");
}else{
	$output_error="Error ocurred trying to delete the event,if you are not the admin you can't delete it ";
	include $_SERVER['DOCUMENT_ROOT'].'/myPromus/view/error_output.php';
}





?>