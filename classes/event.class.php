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
	private $imageURL;


	function __construct($idEvent,$idAdmin,$name,$date,$place,$description,$imageURL)
	{
		$this->idEvent=$idEvent;
		$this->idAdmin=$idAdmin;
		$this->name=$name;
		$this->date=$date;
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

	public function getPlace(){
		return $this->place;
	}

	public function getDescription(){
		return $this->description;
	}

	public function getImage(){
		return $this->imageURL;
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