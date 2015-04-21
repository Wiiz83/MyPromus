<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Model functions to create,modify or delete event*/

require $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/db_connection.inc.php';	//Database connections

//Create an event and insert it in the database
function createEvent($userAdmin,$name,$date,$place,$description){

	global $link;

	$sql="INSERT INTO event (user_id,name,date,place,description)
	 VALUES ('$userAdmin',$name,'$date','$place','$description')";	

	if(!mysqli_query($link,$sql)){

		return false;
	
	}else{
		$eventId = mysqli_insert_id($link);  //get the id of the event inserted in the DB

		$sql="INSERT INTO event_friend (event_id,friend_id) VALUES ('$eventId','$userAdmin')";	//insert in the event_friend table the admin of the event as an assistant
		if(!mysqli_query($link,$sql)){
			return false;
		}else{
			return true;
		}

		
	}
}

//Delete event 		(the username argument is to see if the user have permission to delete it)
function deleteEvent($idEvent,$username){
	global $link;

	$sql="SELECT user_id FROM event WHERE user_id='$username' AND id='$idEvent'";
	$result=mysqli_query($link,$sql);
	if(mysqli_num_rows($result)==0){
		return false; //The user is not the admin and can't delete the event or the event doesn't exists
	}else{
		$sql="DELETE FROM event WHERE id='$idEvent'";
		if(mysqli_query($link,$sql)){
			return true;
		}else{
			return false;  //Error deleting the event
		}
	}
}







?>