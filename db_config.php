<?php

try {
	//host, dbname, user, password
	$host = "localhost"; //hostname
	$dbname = "soluotech"; //this is the name of the database
	$user = "root"; //username
	$password = ""; //this is the password but by default local host is empty

	$conn = new PDO ("mysql:host=$host;dbname=$dbname", $user, $password);

	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}

catch (PDOException $e)
{
	echo $e-> getMessage();
}


?>