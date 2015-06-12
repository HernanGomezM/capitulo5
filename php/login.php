<?php
session_start();
//bariables por metodo post
$email = $_POST['email'];
//conexion
$cone = new PDO('sqlite:../blogs.db');
//consulta
$consulta = "SELECT * FROM Usuarios WHERE email='".$email."'";
//ejecucion de consulta
$result = $cone->query($consulta);
//repasamos resultados
foreach ($result as $key) {
	
	$CorreoPersona = $key['email'];
if ($CorreoPersona == $email) {
	echo "<script>alert('!!!bienvenido¡¡¡')</script>";
	echo "
	<html>
		<head>
			<meta = http-equiv='REFRESH' content = '0; url=../posts/index.php'>
		</head>
	</html>";
}elseif ($CorreoPersona !== $email){
		echo "<script>alert('Usuario Incorrecto Vuelva a Intentar')</script>";
		echo "
		<html>
			<head>
				<meta = http-equiv='REFRESH' content = '0; url=../posts/index.php'>
			</head>
		</html>";
	}
}
//cerrar conexion
$cone = NULL;
?>