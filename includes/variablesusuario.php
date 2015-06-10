<?php
$_SESSION['UsuarioTemporal'] = 'hernan';

$cone = new PDO('sqlite:BasesdeDatos/blogs.db')or die('imposible conectarce ala base de datos');

$consulta = "SELECT  * FROM Usuarios WHERE usuario = '".$_SESSION['UsuarioTemporal']."';";
$result = $cone->query($consulta);
foreach ($result as $rows) {
	$_SESSION['usuario'] = $rows['usuario'];
	$_SESSION['nombre'] = $rows['nombre'];
	$_SESSION['apellido'] = $rows['apellido'];
	$_SESSION['titulo'] = $rows['titulo'];
	$_SESSION['descripcion'] = $rows['descripcion'];
	$_SESSION['foto'] = $rows['foto'];
	$_SESSION['webpersonal'] = $rows['webpersonal'];
	$_SESSION['email'] = $rows['email'];
	$_SESSION['permiso'] = $rows['permiso'];
}
$cone = NULL;
?>