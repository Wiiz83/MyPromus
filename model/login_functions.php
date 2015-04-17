<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Login model functions */
include $_SERVER['DOCUMENT_ROOT'].'/myPromus/includes/db_connection.inc.php';	//Database connections

//Check user
function checkUser($id,$password){
	$sql="SELECT username FROM user WHERE username='$id'";
	$result=mysqli_query($link,$sql) or die("Query died");
	$num=mysqli_num_rows($result);

	if($num>0){	//login name was found
		$sql="SELECT username FROM user WHERE username=$id AND password=md5('$password')";
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