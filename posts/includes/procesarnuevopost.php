<?php
session_start();
$usuario = $_SESSION['usuario'];

$titulo = $_POST['titulo'];
$subtitulo = $_POST['subtitulo'];
$contenido = $_POST['contenido'];


$postutc = date('U');
$postanio = date('Y');
$postmes = date('m');
$postdia = date('d');
$posthora = date('H');
$postminuto = date('i');
$postsegundo = date('s');

//conexion
$cone = new PDO('sqlite:../../blogs.db');
//consulta
$consulta = "INSERT INTO Posts VALUES(
	'$postutc',
	'$postanio',
	'$postmes',
	'$postdia',
	'$posthora',
	'$postminuto', 
	'$postsegundo',
	'$usuario',
	'$titulo',
	'$subtitulo',
	'',
	'$contenido',
	'',
	'',
	''
	);";
//ejecuto
$result = $cone->exec($consulta);
//cerrar conexion
$cone = NULL;
?>