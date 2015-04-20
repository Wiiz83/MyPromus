<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Dashboard model with functions that returns data from the database needed to show info in the dashboard page */


require_once $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/db_connection.inc.php';	//Database connections
require $_SERVER['DOCUMENT_ROOT'].'/myPromus/classes/event.class.php';



/*Get the  nearest events to show in the main dashboard, the number of events that we want to show
will be passed as an argument in the method,the function returns an array of Events
*/

function getNearestEvents($username,$numberOfEvents){		//The id is the username of the user that is asking for the events
	global $link;
	$todayDate=date("Y-m-d");
	
	$sql="SELECT * FROM event WHERE user_id='$username' ORDER BY date";
	$result=mysqli_query($link,$sql) or die(mysqli_error($link));
	$rowsNumber=mysqli_num_rows($result);
	
	if($rowsNumber<$numberOfEvents){
		$numberOfEvents=$rowsNumber;	//If in the database there are less events than asked, the number of
	}									//events showed will change
	
	for($i=0;$i<$numberOfEvents;$i++){
		$eventInfo=mysqli_fetch_assoc($result);
		$events[]=new Event($eventInfo['id'],$eventInfo['user_id'],$eventInfo['name'],$eventInfo['date'],$eventInfo['place'],$eventInfo['description']);
		
	}

	print_r("$events");
	
	if(isset($events)){
		return $events;
	}else{
		return null;		//If there is any event return null,need to be handled 
	}
}


?>