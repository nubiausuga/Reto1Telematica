
<?php 
$conexion=mysql_connect('localhost', 'administrador') or die ('No hay conexion a la base de datos');
$db=mysql_select_db('test', $conexion) or die ('No existe la base de datos');

 ?>