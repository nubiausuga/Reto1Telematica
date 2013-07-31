<?php

include ("conexion.php");

$login = $_POST['login'];
$password = $_POST['password'];

$query = "SELECT * FROM usuarios WHERE login = '".$login."' AND
	password = '".$password."'";

$q = mysql_query($query);

try {
	if (mysql_num_rows($q)!==0) {
		$result = mysql_result($q, 0);
		header("Location: cargar.html"); 
} else{
		echo 'NO EXISTE';
		header("Location: login.php?login_error=1");
		echo "Error en el login o password, intentelo de nuevo";
}
} catch (Exception $e){
	echo 'Exception' . $e->getMessage();
}

?>
