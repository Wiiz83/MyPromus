<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Controller to create an event */


session_start();
include $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/session_checker.inc.php'; //Check if the session has expired,in that case redirect to the main page
require $_SERVER['DOCUMENT_ROOT'].'/myPromus/model/event_model.php';


//Validate and check that the data is correct and not null TODO


//Code to DO.................


//The data should be validated in the client side

//Variables from the form
$username=$_SESSION['logname'];
$name=strip_tags(trim($_POST['name']));
$date=strip_tags(trim($_POST['date']));
$place=strip_tags(trim($_POST['place']));
$description=strip_tags(trim($_POST['description']));

//Securizing data cleaning malicious html
$username=htmlspecialchars($username,ENT_QUOTES,'UTF-8');
$name=htmlspecialchars($name,ENT_QUOTES,'UTF-8');
$date=htmlspecialchars($date,ENT_QUOTES,'UTF-8');
$place=htmlspecialchars($place,ENT_QUOTES,'UTF-8');
$description=htmlspecialchars($description,ENT_QUOTES,'UTF-8');

if(createEvent($username,$name,$date,$place,$description)){
	header("Location: event_creation_succesful.html.php");
}else{
	$errorMessage="An error ocurred when trying to insert the user in the database";
	include $_SERVER['DOCUMENT_ROOT'].'/myPromus/view/error_output.php';
}

?>