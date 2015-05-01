<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Helper to get an event from an $eventId */
require_once $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/db_connection.inc.php';	//Database connections
include $_SERVER['DOCUMENT_ROOT'].'/myPromus/classes/event.class.php';

function getEvent($eventId){
	global $link;
	$sql="SELECT * FROM event WHERE id='$eventId'";
	$result=mysqli_query($link,$sql) or die(mysqli_error($link));

	while($eventInfo=mysqli_fetch_assoc($result)){
		$event=new Event($eventInfo['id'],$eventInfo['user_id'],$eventInfo['name'],$eventInfo['date'],$eventInfo['time'],$eventInfo['place'],$eventInfo['description'],$eventInfo['image_url']);

	}

	if(isset($event)){
		return $event;
	}else{
		return null;		//If there is any event return null,need to be handled 
	}

}
?>