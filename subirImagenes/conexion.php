
<?php 
$conexion=mysql_connect('localhost', 'nomUsuario', '123') or die ('No hay conexion a la base de datos');
$db=mysql_select_db('based', $conexion) or die ('No existe la base de datos');

$consulta=mysql_query("select * from datos");
while($filas=mysql_fetch_array($consulta)){
$ruta=$filas['ruta'];
$desc=$filas['descripcion'];

?>
<?php echo $desc; ?> <br>
<img src="<?php echo $ruta;?>" width="272" height="186"><br>
<?php } ?>