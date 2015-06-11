<?php

session_start();

include "includes/variablesusuario.php";
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Strata by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body id="top">

		<!-- Header -->
			<header id="header">
				<a href="#" class="image avatar"><img src="images/avatar.jpg" alt="" /></a>
				<h1><strong><?php echo $_SESSION['nombre']." ".$_SESSION['apellido']; ?></strong>, Iniciando en PHP<br />
				<?php echo $_SESSION['descripcion']."<br />";?>
				<a href="<?php $_SESSION['webpersonal']; ?>"> <?php echo $_SESSION['webpersonal']; ?></a><br />
				
			</header>

		
			<div id="main">

				<section id="one">
						<header class="major">
							<h2><?php echo $_SESSION['titulo'];?></h2>
						</header>
						<?php
						include "includes/crearnuevopost.php";
						?>
						<?php
						include "includes/post.php";
						?>
				</section>
			</div>			
	</body>
</html>