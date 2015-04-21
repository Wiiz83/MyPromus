<?php
/*author: Ferran Rovira 	mail:ferran294@gmail.com
Functions to sanitize and validate data*/

function sanitizeInput($data){

	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data,ENT_QUOTES,'UTF-8');
	return $data;
}

?>