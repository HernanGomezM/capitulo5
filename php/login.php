<?php
session_start();
//bariables por metodo post
$email = $_POST['email'];
//conexion
$cone = new PDO('sqlite:../blogs.db');
//consulta
$consulta = "SELECT * FROM Usuarios";
//ejecucion de consulta
$result = $cone->query($consulta);
//repasamos resultados
foreach ($result as $key) {
	$CorreoPersona = $key['email'];
	if ($email == $CorreoPersona) {
	echo "<html>
	<head>
		<meta = http-equiv='REFRESH' content = '0; url=../posts/index.php'>
	</head>

</html>";
	}else{
		echo "<script lenguage='JavaScript'>alert('Usuario incorrecto');</script>";
	echo "<html>
	<head>
		<meta = http-equiv='REFRESH' content = '0; url=../index.html'>
	</head>

</html>";
	}
}
//cerrar conexion
$cone = NULL;
?>