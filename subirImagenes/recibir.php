<?php 
//print_r($_FILES['imagen'] ['name']); muestra varias dimenciones de la imagen
/*print_r($_FILES);
echo'<br>';
echo 'Nombre de la imagen: ';
print_r($_FILES['imagen'] ['name']);

echo'<br>';
echo 'Tipo de la imagen: ';
print_r($_FILES['imagen'] ['type']);

echo'<br>';
echo ' Ruta temporal de la imagen: ';
print_r($_FILES['imagen'] ['tmp_name']);
*/

include ("conexion.php");

$login=$_POST["login"];

$rutaEnServidor='imagenes';
$rutaTemporal=$_FILES['imagen'] ['tmp_name'];
$nombreImagen=($_FILES['imagen'] ['name']);
$rutaDestino=$rutaEnServidor.'/'.$login.$nombreImagen;
move_uploaded_file($rutaTemporal, $rutaDestino); // carga la imagen

$desc=$_POST["descripcion"];




$sql="INSERT INTO datos (ruta, descripcion) values('".$rutaDestino."', '".$desc."')" ;
$res=mysql_query($sql,$conexion);

if($res){
	echo'OPERACION CON EXITO';
	
	} else{
		echo 'OPERACION FALLO';
		}

 ?>