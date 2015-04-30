<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
User class that has the attributes of an User and functions to set new values */

/*
TO DO implementar los updates en cada metodo set
TO DO decidir si quitar atributos bla bla bla
*/

require $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/db_connection.inc.php';	//Database connections


class User {
	
	private $idUser;
	private $username;
	private $country;
	private $city;
	private $email;
	private $imageURL;
	private $isFriend; //For the results of the search and to know if is a user friend (tiene que haber una array con los amigos y checkear si el usuario esta en la array,si lo esta ponemos este valor a true)


	function __construct($idUser,$username,$country,$city,$email,$imageURL)
	{
		$this->idUser=$idUser;
		$this->username=$username;
		$this->country=$country;
		$this->city=$city;
		$this->email=$email;
		$this->imageURL=$imageURL;
		$this->isFriend=false;
	}

	public function getIdUser(){
		return $this->idUser;
	}

	public function getUsername(){
		return $this->username;
	}

	public function getCountry(){
		return $this->country;
	}

	public function getCity(){
		return $this->city;
	}

	public function getEmail(){
		return $this->email;
	}

	function getImage(){
		return $this->imageURL;
	}

	public function setName($newName){
		//TO DO pensar si ponerlo o no
	}

	public function setPassword($newPassword){
		//TO DO introducirlo en la BD
	}

	public function setCountry($newCountry){
		//TO DO introducirlo en la BD
	}

	public function setCity($newCity){
	//TO DO introducirlo en la BD
	}

	public function setEmail($newEmail){
	//TO DO introducirlo en la BD
	}
}
?>