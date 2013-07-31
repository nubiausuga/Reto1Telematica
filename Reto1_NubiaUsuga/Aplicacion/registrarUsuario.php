<?php 

include ("conexion.php");

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$login = $_POST['login'];
$password = $_POST['password'];

$query = "INSERT INTO usuarios(nombre, email, login, password) VALUES('".$nombre."', '".$email."', '".$login."', '".$password."')";

if(mysql_query($query))$q=1;
else $q=0;

if($q==1){
		$result = mysql_result($q, 1);
		echo "Usuario registrado con exito";
		header("Location: login.html");
} else
		echo "El usuario no pudo ser registrado";


?>