<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Comment class that has the attributes of a Comment and functions to set new values */


class Comment {
	
	private $id;
	private $date;
	private $message;
	private $user_id;
	private $event_id;



	function __construct($id,$date,$message,$user_id,$event_id)
	{
		$this->id=$id;
		$this->date=$date;
		$this->message=$message;
		$this->user_id=$user_id;
		$this->event_id=$event_id;

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

}
?>