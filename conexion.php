<?php
$con=mysqli_connect("localhost:33066","anachui","123456");
mysqli_select_db($con,"academico_4");
if(!$con){
	die("No hay conexion:".mysql_connect_error());
}
$conn=mysqli_connect("localhost:33066","anachui","123456");
mysqli_select_db($conn,"flujo2");
if(!$conn){
	die("No hay conexion:".mysql_connect_error());
}

?>