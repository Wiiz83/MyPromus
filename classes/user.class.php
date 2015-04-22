<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
User class that has the attributes of an User and functions to set new values */

/*
TO DO implementar los updates en cada metodo set
TO DO decidir si quitar atributos bla bla bla
*/
class User {
	
	private $idUser;
	private $username;
	private $country;
	private $city;
	private $email;


	function __construct($idUser,$username,$country,$city,$email)
	{
		$this->idUser=$idUser;
		$this->username=$username;
		$this->country=$country;
		$this->city=$city;
		$this->email=$email;
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