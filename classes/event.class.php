<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Event class that has the attributes of an Event and functions to set new values */

/*
TO DO implementar los updates en cada metodo set
*/
class Event {
	
	private $idEvent;
	private $idAdmin;
	private $name;
	private $date;
	private $place;
	private $description;


	function __construct($idEvent,$idAdmin,$name,$date,$place,$description)
	{
		$this->idEvent=$idEvent;
		$this->idAdmin=$idAdmin;
		$this->name=$name;
		$this->date=$date;
		$this->place=$place;
		$this->description=$description;
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

	public function getPlace(){
		return $this->place;
	}

	public function getDescription(){
		return $this->description;
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