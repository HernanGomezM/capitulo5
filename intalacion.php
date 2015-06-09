<?php
#---------------------CREAR TABLA USUARIOS----------------------------------------------------
//Conexion
$cone = new PDO('sqlite:BasesdeDatos/blogs.db') or die ('no se a podido acceder a la conexion de la base de datos');
//consulta
$consulta = "CREATE TABLE Usuarios(
	usuario char(40)NOT NULL,
	contrasena char(40)NOT NULL,
	nombre char(40),
	apellido char(40),
	titulo char(120),
	descripcion char(1500),
	foto char(40),
	webpersonal char(80),
	email char(80),
	permiso int
	);";
//ejecutar consulta
$result =  $cone->exec($consulta);
//cerrar conexion
$cone = NULL;
#---------------------INSERTAR CONTENIDO A LA TABLA USUARIO-----------------------------------
//Conexion
$cone = new PDO('sqlite:BasesdeDatos/blogs.db') or die ('no se a podido acceder a la conexion de la base de datos');
//consulta
$consulta = "INSERT INTO Usuarios VALUES(
	'hernan',
	'hernan',
	'Hernan',
	'Gomez',
	'Iniciando en PHP',
	'desarrollando la guia sobre php con el uso de videos',
	'fotohernan',
	'www.hernaphp.com',
	'hernandeth599@gmail.com',
	1
	);";
//ejecutar consulta
$result =  $cone->exec($consulta);
//cerrar conexion
$cone =  NULL;	
#---------------------CREAR TABLA DE  CONFIG DE USUARIOS--------------------------------------
//Conexion
$cone = new PDO('sqlite:BasesdeDatos/blogs.db') or die ('no se a podido acceder a la conexion de la base de datos');
//consulta
$consulta = "CREATE TABLE ConfigUsuarios(
	usuario char(40)NOT NULL,
	contrasena char(40)NOT NULL,
	piel char(40),
	respuestas char(40)
	);";
//ejecutar consulta
$result =  $cone->exec($consulta);
//cerrar conexion
$cone =  NULL;
#---------------------INSERTAR CONTENIDO DE PRUEBA EN LA CONFIG DE USUARI---------------------
//Conexion
$cone = new PDO('sqlite:BasesdeDatos/blogs.db') or die ('no se a podido acceder a la conexion de la base de datos');
//consulta
$consulta = "INSERT INTO ConfigUsuarios VALUES (
	'hernan',
	'hernan',
	'default',
	'si'
	)";
//ejecutar consulta
$result =  $cone->exec($consulta);
//cerrar conexion
$cone =  NULL;
#---------------------CREAR TABLA POSTS-------------------------------------------------------
//Conexion
$cone = new PDO('sqlite:BasesdeDatos/blogs.db') or die ('no se a podido acceder a la conexion de la base de datos');
//consulta
$consulta = "CREATE TABLE Posts(
	utc int NOT NULL,
	anio int ,
	mes int ,
	dia int ,
	hora int ,
	minuto int ,
	segundo int ,
	usuario char(80),
	titulo char(120),
	subtitulo char(200),
	icono char(80),
	texto char(4000),
	imagen char(200),
	video char(200),
	sonido char(200)
	);";
//ejecutar consulta
$result =  $cone->exec($consulta);
//cerrar conexion
$cone =  NULL;
#---------------------INSERTAR CONTENIDO EN TABLA POSTS---------------------------------------
//Conexion
$cone = new PDO('sqlite:BasesdeDatos/blogs.db') or die ('no se a podido acceder a la conexion de la base de datos');
//consulta
$consulta = "INSERT INTO Posts VALUES (
	00000,
	2015,
	06,
	09,
	04,
	17,
	39,
	'hernan',
	'Mi Primer Post',
	'Beinvenido al mi post',
	'icono',
	'Hola te dice el post',
	'imagenpost',
	'videopost',
	'sonidopost'
	)";
//ejecutar consulta
$result =  $cone->exec($consulta);
//cerrar conexion
$cone =  NULL;
#---------------------CREAT TABLA LOGS--------------------------------------------------------
//Conexion
$cone = new PDO('sqlite:BasesdeDatos/blogs.db') or die ('no se a podido acceder a la conexion de la base de datos');
//consulta
$consulta = "CREATE TABLE Logs(
	utc int NOT NULL,
	anio int ,
	mes int ,
	dia int ,
	hora int ,
	minuto int ,
	segundo int ,
	ip char(80),
	navegador char(120),
	usuario char(200),
	operacion char(80)
	);";
//ejecutar consulta
$result =  $cone->exec($consulta);
//cerrar conexion
$cone =  NULL;
#---------------------INSERTAR CONTENIDO EN TABLA LOGS----------------------------------------
//Conexion
$cone = new PDO('sqlite:BasesdeDatos/blogs.db') or die ('no se a podido acceder a la conexion de la base de datos');
//consulta
$consulta = "INSERT INTO Logs VALUES (
	00000,
	2015,
	06,
	09,
	04,
	17,
	39,
	'192.168.200.254',
	'Chrome',
	'hernan',
	'crear'
	)";
//ejecutar consulta
$result =  $cone->exec($consulta);
//cerrar conexion
$cone =  NULL;
?>