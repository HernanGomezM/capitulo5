<?php
#crear bariables
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$addNombre = $_POST['nombre'];
$addApellido = $_POST['apellido'];
$addTitulo = $_POST['titulo'];
$addDescripcion = $_POST['descripcion'];
$addFoto = $_POST['foto'];
$addwebpersonal = $_POST['webpersonal'];
$addemail = $_POST['email'];
$addPermiso = $_POST['permiso'];
#------------------------------------------------------------------------

//creo la coneccion
$cone = new PDO('sqlite:../blogs.db');

if ($cone == true) {
//crear consulta
$consulta = "INSERT INTO Usuarios 
VALUES 
(	'$usuario',
	'$contrasena',
	'$addNombre',
	'$addApellido',
	'$addTitulo',
	'$addDescripcion',
	'$addFoto',
	'$addwebpersonal',
	'$addemail',
	$addPermiso);";
//ejecuto la consulta
$resultado = $cone->exec($consulta);
echo"
<html>
	<head>
		<meta http-equiv='REFRESH' content=0;url=../index.html>
	</head>
</html>";
}else{
	echo "Error En la conexion";
}
//cerrar coneccion
$cone =  NULL;
?>