<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Model functions to create,load or delete comments*/

//Comments should have a hidden input to know the id of every comment


require $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/db_connection.inc.php';	//Database connections
require $_SERVER['DOCUMENT_ROOT'].'/myPromus/classes/comment.class.php';

function loadComments($eventId){
	global $link;

	$sql="SELECT * FROM comment WHERE event_id='$eventId' ORDER BY date";
	$result=mysqli_query($link,$sql) or die(mysqli_error($link));

	while($commentInfo=mysqli_fetch_assoc($result)){
		$comments[]=new Comment($commentInfo['id'],$commentInfo['date'],$commentInfo['message'],$commentInfo['user_id'],$commentInfo['event_id']);

	}

	if(isset($comments)){
		return $comments;
	}else{
		return null;		
	}
}


function createComment($userId,$eventId,$message){
	global $link;
	$todayDate=date("Y-m-d");

	$sql="INSERT INTO comment (date,message,user_id,event_id)
	 VALUES ('$todayDate',$message,'$userId','$eventId')";

	 if(!mysqli_query($link,$sql) or die(mysqli_error($link))){
	 
	 	return false;
	 
	 }else{
	 
	 	return true;
	 
	 }
}

function deleteComment($commentId){
	global $link;

	$sql="DELETE FROM comment WHERE id='$commentId'";

	if(!mysqli_query($link,$sql) or die(mysqli_error($link))){
		return false;
	}else{
		return true;
	}
}


?>