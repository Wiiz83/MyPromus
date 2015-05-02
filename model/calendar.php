<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Model functions to pass data from the database to the calendar controller*/
require $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/db_connection.inc.php';


//Return all the events in an associative array ready to get encode in JSON to be used in the Calendar
function getEvents($userId){

	global $link;

	$sql="SELECT  event.*
	 FROM event_friend AS ef INNER JOIN event ON ef.event_id=event.id
	 WHERE ef.friend_id='$userId';";

	 $result=mysqli_query($link,$sql) or die(mysqli_error($link));

	 while ($eventInfo=mysqli_fetch_assoc($result)) {
	 	$event=array("title"=>$eventInfo['name'],"start"=>$eventInfo['date'],"end"=>$eventInfo['date'],"url"=>"../controller/event.php?eventId=".$eventInfo['id'],"editable"=>"false");
	 	$events[]=$event;                  
	 }



	 return $events; //return the events encoded in a JSON format
}


?>