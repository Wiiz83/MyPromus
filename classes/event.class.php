<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Event class that has the attributes of an Event and functions to set new values */

include $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/getUserHelper.inc.php';

class Event {
	
	private $idEvent;
	private $idAdmin;
	private $name;
	private $date;
	private $time;
	private $place;
	private $description;
	private $imageURL;


	function __construct($idEvent,$idAdmin,$name,$date,$time,$place,$description,$imageURL)
	{
		$this->idEvent=$idEvent;
		$this->idAdmin=$idAdmin;
		$this->name=$name;
		$this->date=$date;
		$this->time=$time;
		$this->place=$place;
		$this->description=$description;
		$this->imageURL=$imageURL;
	}

	public function getIdEvent(){
		return $this->idEvent;
	}

	public function getIdAdmin(){
		return $this->idAdmin;
	}

	public function getName(){
		return $this->name;
	}

	public function getDate(){
		return $this->date;
	}

	public function getTime(){
		return $this->time;
	}

	public function getPlace(){
		return $this->place;
	}

	public function getDescription(){
		return $this->description;
	}

	public function getImage(){
		return $this->imageURL;
	}

	public function getAdminName(){
		$user=getUser($this->idAdmin);
		return $user->getUsername();
	}

	public function setName($newName){
		$this->name=$newName;
	}

	public function setDate($newDate){
		$this->date=$newDate;
	}

	public function setPlace($newPlace){
		$this->place=$newPlace;
	}

	public function setDescription($newDescription){
		$this->description=$newDescription;
	}

}
?>