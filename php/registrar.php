<?php
#crear bariables
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$addNombre = $_POST['nombre'];
$addApellido = $_POST['apellido'];
$addTitulo = $_POST['titulo'];
$addFoto = $_POST['foto'];
$addwebpersonal = $_POST['webpersonal'];
$addemail = $_POST['email'];
#------------------------------------------------------------------------

//creo la coneccion
$cone = new PDO('sqlite:BasesdeDatos/blogs.db') or die('ha sido imposible establecer la conexion');
//crear consulta
$consulta = "INSERT INTO Usuarios 
VALUES ('$usuario',
	'$contrasena',
	'$addNombre',
	'$addApellido',
	'$addTitulo',
	'$addFoto',
	'$addwebpersonal',
	'$addemail',
	1);";
//ejecuto la consulta
$resul = $cone->exec($consulta);
echo "<scrip lenguage='javascript'> alert = 'Usuario registrado correctamente' </scrip>";
echo "
<html>
	<head>
		<meta http-equiv='REFRESH' content=0;url=php/index.html>
	</head>
</html>";
//cerrar coneccion
$cone =  NULL;
?>