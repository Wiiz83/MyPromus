<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Frien Request class that has the attributes of a Friend Request and functions to set new values */


class FriendRequest {
	
	private $id;
	private $userId;
	private $friendId;
	private $date;
	
	
	function __construct($id,$userId,$friendId,$date)
	{
		$this->id=$id;
		$this->userId=$userId;
		$this->friendId=$friendId;
		$this->date=$date;
	}

	public function getId(){
		return $this->id;
	}

	public function getUserId(){
		return $this->userId;
	}

	public function getFriendId(){
		return $this->friendId;
	}

	public function getDate(){
		return $this->date;
	}

?>