<?php

	include $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/session_checker.inc.php'; //Check if the session has expired,in that case redirect to the main page
	require $_SERVER['DOCUMENT_ROOT'].'/myPromus/model/calendar.php';

	$titlePage="Calendar";
	$userId=$_SESSION['userId'];

	//$events = getNearestEvents( $userId, 80 );
	
	$events=getEvents($userId);

	echo json_encode($events);

?>