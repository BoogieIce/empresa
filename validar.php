<?php
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

$conexion=mysqli_connect("localhost", "root", "", "empresa");
$consulta="SELECT * FROM usuarios WHERE usuario='$usuario' and clave='$clave'"
$resultado=mysql_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas>0) {
	header("location:bienvenido.html");
}
else{
	echo "Error en la autentificacion";
}

mysqli_free_result($resultado);
mysqli_close($conexion);