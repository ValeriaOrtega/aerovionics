<?php


$conexion=mysqli_connect('localhost','root','','basewebsite') or die ('Error en la base de datos');

$sql="INSERT INTO tablaslogin VALUES(null,'".$_POST["user"]."','".$_POST["password"]."')";
$resultado=mysqli_query($conexion,$sql) or die ('Error en el query');
mysqli_close($conexion);
echo "¡El cuestionario ha sido contestado correctamente!"
	


?>