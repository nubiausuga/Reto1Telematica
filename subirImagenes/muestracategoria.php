<?php 
include ("conexion.php");

$categoria=$_POST['categoria'];

$consulta=mysql_query("select * from datos where descripcion ='".$categoria."'");
while($filas=mysql_fetch_array($consulta)){
$ruta=$filas['ruta'];
$desc=$filas['descripcion'];

?>
<?php echo $desc; ?> 
<img src="<?php echo $ruta;?>" width="272" height="186">
<?php } ?>