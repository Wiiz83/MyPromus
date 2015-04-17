<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Dashboard model with functions that returns data from the database needed to show info in the dashboard page */

include $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/db_connection.inc.php';	//Database connections

//Get the 3 nearest events to show in the main dashboard

function getNearestEvents($id){		//The id is the username of the user that is asking for the events
	$sql="SELECT * FROM Event WHERE username='$id'";
	$result=mysqli_query($link,$sql);
	for($i=0;$i<3;$i++){
		//TO DO
	}
}


?>