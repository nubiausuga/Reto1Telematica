<?php

include ("conexion.php");

$login = $_POST['login'];
$password = $_POST['password'];

$query = "SELECT * FROM usuarios WHERE login = '".$login."' AND
	password = '".$password."'";

$q = mysql_query($query);

try {
	if (mysql_result($q, 0)) {
		$result = mysql_result($q, 0);
		header("Location: cargar.html"); 
} else
		echo "Ellogin o password no pertenecen al usuario";
} catch (Exception $error){}

?>
