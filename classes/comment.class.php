<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Comment class that has the attributes of a Comment and functions to set new values */

require $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/db_connection.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/getUserHelper.inc.php';

class Comment {
	
	private $id;
	private $date;
	private $time;
	private $message;
	private $user_id;
	private $event_id;
	private $user;



	function __construct($id,$date,$time,$message,$user_id,$event_id)
	{
		$this->id=$id;
		$this->date=$date;
		$this->time=$time;
		$this->message=$message;
		$this->user_id=$user_id;
		$this->event_id=$event_id;
		$this->user=getUser($user_id);

		
	}

	public function getId(){
		return $this->id;
	}

	public function getDate(){
		return $this->date;
	}

	public function getMessage(){
		return $this->message;
	}

	public function getUserId(){
		return $this->user_id;
	}

	public function getEventId(){
		return $this->event_id;
	}

	public function getUsername(){
		return $this->user->getUsername();
	}

	public function getUserImage(){
		return $this->user->getImage();
	}

	public function getTime(){
		return $this->time;
	}	
}
?>