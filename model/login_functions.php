<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Login model functions */
require $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/db_connection.inc.php';	//Database connections

//Check user
function checkUser($id,$password){
	$sql="SELECT username FROM user WHERE username='$id'";
	global $link;	//We take the connection of the database as a global variable
	$result=mysqli_query($link,$sql) or die("Query died");
	$num=mysqli_num_rows($result);

	if($num>0){	//login name was found
		$sql="SELECT username FROM user WHERE username='$id' AND password='$password'";  //Anyadir encriptacion md5
		$result=mysqli_query($link,$sql);
		$num=mysqli_num_rows($result);
		if($num>0){
			return true; 
		}else{
			return false;	//o retornar un mensaje diciendo que el psswd es incorrecto
		}

	}else{
		return false; //o retornar que el usuario no existe
	} 
}
?>